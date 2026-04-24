<?php

    session_start();

    // Validação simples de sessão.
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
        header('Location: ../index.php?login=erro2');
        exit;
    }

    
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $tipo = str_replace('#', '-', $_POST['tipo']);
    $temporada = str_replace('#', '-', $_POST['temporada']);
    $episodio = str_replace('#', '-', $_POST['episodio']);
    $notas = str_replace('#', '-', $_POST['notas']);
    
   
    $notas = str_replace(PHP_EOL, ' ', $notas);

   
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $tipo . '#' . $temporada . '#' . $episodio . '#' . $notas . PHP_EOL;

    // Abrindo arquivo na pasta engine
    $arquivo = fopen('../../../engine/arquivo.hd', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: ../public/consultar_chamado.php?inclusao=1');
?>
