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
        background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
        font-family: 'Nunito', sans-serif;
        height: 100vh;
        color: #fff;
      }
      .card-login {
        padding: 30px 0 0 0;
        width: 100%;
        max-width: 350px;
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
        <img src="img/assistindo-um-filme.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong>ProgressoTV</strong>
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <p class="text-center text-light">Gerencie suas séries e filmes favoritos.</p>
              <form action="scripts/valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                  <div class="text-danger">
                    Usuário ou senha inválido(s)
                  </div>

                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                  <div class="text-danger">
                    Faça login antes de acessar as páginas protegidas
                  </div>
                  
                <?php } ?>

                <?php if(isset($_GET['registro']) && $_GET['registro'] == 'sucesso') { ?>
                  <div class="text-success mb-3">
                    Usuário registrado com sucesso! Faça login.
                  </div>
                <?php } ?>

                <?php if(isset($_GET['registro']) && $_GET['registro'] == 'erro_email_existente') { ?>
                  <div class="text-danger mb-3">
                    Este e-mail já está em uso.
                  </div>
                <?php } ?>

                <a href="public/registra_usuario.php" class="btn btn-sm btn-outline-light btn-block mb-3">Criar Conta</a>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>