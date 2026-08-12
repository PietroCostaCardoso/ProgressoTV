<?php 
  require_once "scripts/validador_acesso.php";
  
?>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author"   content="Pietro Costa Cardoso">
    <meta name="description" content="Este projeto foi desenvolvido por Pietro costa cardoso">
    <title>ProgressoTV</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/Css/Style.css">
  </head>

  <body class="public-page">

    <nav class="navbar navbar-dark bg-dark border-bottom border-secondary">
      <a class="navbar-brand" href="#">
        <img src="img/assistindo-um-filme.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <strong>ProgressoTV</strong>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="scripts/logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center mb-3 mb-md-0">
                  <a href="public/abrir_chamado.php" class="text-center action-btn w-100">
                    <img src="img/series.png" width="70" height="70"><br>
                    <span>Adicionar Item</span>
                  </a>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                  <a href="public/consultar_chamado.php" class="text-center action-btn w-100">
                    <img src="img/smart-tv.png" width="70" height="70"><br>
                    <span>Minha Lista</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>