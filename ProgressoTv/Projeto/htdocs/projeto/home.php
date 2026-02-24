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

    <style>
      body {
        background-color: #141414;
        font-family: 'Nunito', sans-serif;
        color: #fff;
      }
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      .card {
        background-color: #1f1f1f;
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.5);
      }
      .card-header {
        background-color: #2b2b2b;
        border-bottom: 1px solid #333;
        color: #fff;
        font-weight: bold;
      }
      .action-btn {
        display: block;
        padding: 20px;
        border-radius: 15px;
        background: #252525;
        transition: transform 0.3s, background 0.3s;
        text-decoration: none !important;
        color: #fff !important;
      }
      .action-btn:hover {
        transform: translateY(-5px);
        background: #333;
      }
      .action-btn span {
        font-size: 1.2rem;
        font-weight: bold;
        margin-top: 10px;
        display: block;
      }
    </style>
  </head>

  <body>

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