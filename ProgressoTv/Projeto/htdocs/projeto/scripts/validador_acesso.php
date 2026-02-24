<?php
  session_start();

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    $url = 'index.php?login=erro2';
    if (!file_exists('index.php') && file_exists('../index.php')) {
      $url = '../index.php?login=erro2';
    }
    header('Location: ' . $url);
  }

?>