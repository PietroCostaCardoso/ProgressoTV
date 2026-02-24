<?php
?>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author"   content="Pietro Costa Cardoso">
    <meta name="description" content="Este projeto foi desenvolvido por Pietro costa cardoso">
    <title>ProgressoTV - Registrar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <style>
      body {
        background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
        font-family: 'Nunito', sans-serif;
        height: 100vh;
        color: #fff;
      }
      .card-register {
        padding: 30px 0 0 0;
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
      }
      .card {
        background-color: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 15px;
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      }
      .card-header {
        background-color: transparent;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        font-weight: bold;
        font-size: 1.2rem;
        text-align: center;
        color: #fff;
      }
      .form-control {
        background-color: rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #fff;
      }
      .form-control:focus {
        background-color: rgba(0, 0, 0, 0.4);
        color: #fff;
        box-shadow: none;
        border-color: #764ba2;
      }
      .btn-primary {
        background: linear-gradient(to right, #667eea, #764ba2);
        border: none;
        font-weight: bold;
      }
      .btn-primary:hover {
        background: linear-gradient(to right, #764ba2, #667eea);
      }
      .navbar {
        background: transparent !important;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark">
      <a class="navbar-brand" href="#">
        <img src="../img/assistindo-um-filme.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong>ProgressoTV</strong>
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-register">
          <div class="card">
            <div class="card-header">
              Criar Nova Conta
            </div>
            <div class="card-body">
              <form action="../scripts/processa_registro.php" method="post" autocomplete="off">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail" required autocomplete="off">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha" required autocomplete="new-password">
                </div>
                <div class="form-group">
                  <input name="confirmar_senha" type="password" class="form-control" placeholder="Confirmar Senha" required autocomplete="new-password">
                </div>

                <?php if(isset($_GET['registro']) && $_GET['registro'] == 'erro_senhas') { ?>
                  <div class="text-danger mb-3">
                    As senhas não coincidem.
                  </div>
                <?php } ?>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
                <a href="../index.php" class="btn btn-lg btn-outline-light btn-block mt-2">Voltar para o Login</a>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>