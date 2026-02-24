<?php

	session_start();

	$email = $_POST['email'] ?? '';
	$senha = $_POST['senha'] ?? '';
	$confirmar_senha = $_POST['confirmar_senha'] ?? '';

	if (empty($email) || empty($senha) || empty($confirmar_senha)) {
		header('Location: ../public/registra_usuario.php?registro=erro_campos');
		exit();
	}

	if ($senha !== $confirmar_senha) {
		header('Location: ../public/registra_usuario.php?registro=erro_senhas');
		exit();
	}

	$arquivo_usuarios = '../../../engine/usuarios.hd';

	if (file_exists($arquivo_usuarios)) {
		$usuarios_existentes = file($arquivo_usuarios, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		foreach ($usuarios_existentes as $usuario_linha) {
			$dados_usuario = explode('#', $usuario_linha);
			if (isset($dados_usuario[1]) && $dados_usuario[1] === $email) {
				header('Location: ../index.php?registro=erro_email_existente');
				exit();
			}
		}
	}

	$novo_id = 1;
	if (file_exists($arquivo_usuarios)) {
		$linhas = file($arquivo_usuarios, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		if (!empty($linhas)) {
			$maior_id = 0;
			foreach ($linhas as $linha) {
				$dados = explode('#', $linha);
				if (isset($dados[0]) && is_numeric($dados[0])) {
					$maior_id = max($maior_id, (int)$dados[0]);
				}
			}
			$novo_id = $maior_id + 1;
		}
	}

	$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

	$novo_usuario_linha = $novo_id . '#' . $email . '#' . $senha_hash . '#' . 2 . PHP_EOL;

	file_put_contents($arquivo_usuarios, $novo_usuario_linha, FILE_APPEND | LOCK_EX);

	header('Location: ../index.php?registro=sucesso');
	exit();

?>