<?php

	session_start();

	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

	//usuarios do sistema
	$usuarios_hardcoded = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
		array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
		array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
	);

	$usuarios_do_arquivo = array();
	$arquivo_usuarios_path = __DIR__ . '/usuarios.hd'; 

	if (file_exists($arquivo_usuarios_path)) {
		$linhas = file($arquivo_usuarios_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		foreach ($linhas as $linha) {
			$dados = explode('#', $linha);
			if (count($dados) === 4) { 
				$usuarios_do_arquivo[] = array(
					'id' => (int)$dados[0],
					'email' => $dados[1],
					'senha' => $dados[2], 
					'perfil_id' => (int)$dados[3]
				);
			}
		}
	}

	$usuarios_app = array_merge($usuarios_hardcoded, $usuarios_do_arquivo);

	foreach($usuarios_app as $user) {

		$senha_correta = false;
		if (str_starts_with($user['senha'], '$2y$')) { 
			$senha_correta = password_verify($_POST['senha'], $user['senha']);
		} else { 
			$senha_correta = ($user['senha'] == $_POST['senha']);
		}

		if($user['email'] == $_POST['email'] && $senha_correta) {
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}

	}

	if($usuario_autenticado) {
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: ../home.php');
	} else {
		$_SESSION['autenticado'] = 'NAO';
		header('Location: ../index.php?login=erro');
	}

?>