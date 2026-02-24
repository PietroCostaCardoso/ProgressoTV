<?php

  session_start();

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: ../index.php?login=erro2');
    exit;
  }

  $id_linha = $_POST['id'] ?? null;
  $arquivo_path = '../../../engine/arquivo.hd';

  if($id_linha !== null && file_exists($arquivo_path)) {

    $linhas = file($arquivo_path);
    
    if(isset($linhas[$id_linha])) {
      $registro = explode('#', $linhas[$id_linha]);
      
      // Verifica se o usuário é dono do item ou se é admin (perfil 1)
      if($_SESSION['perfil_id'] == 1 || $_SESSION['id'] == $registro[0]) {
        unset($linhas[$id_linha]);
        // Reescreve o arquivo
        file_put_contents($arquivo_path, implode('', $linhas));
      }
    }
  }

  header('Location: ../public/consultar_chamado.php');
?>