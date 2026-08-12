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
    <link rel="stylesheet" href="Css/Style.css">
  </head>

  <body class="auth-page">

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