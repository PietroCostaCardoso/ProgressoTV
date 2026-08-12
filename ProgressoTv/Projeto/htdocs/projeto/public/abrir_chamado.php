<?php require_once "../scripts/validador_acesso.php" ?>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author"   content="Pietro Costa Cardoso">
    <meta name="description" content="Este projeto foi desenvolvido por Pietro costa cardoso">
    <title>ProgressoTV</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/Style.css">
  </head>

  <body class="public-page">

    <nav class="navbar navbar-dark bg-dark border-bottom border-secondary">
      <a class="navbar-brand" href="#">
        <img src="../img/assistindo-um-filme.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong>ProgressoTV</strong>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../scripts/logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Adicionar item à sua lista
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="../scripts/registra_chamado.php">
                    <div class="form-group">
                      <label>Nome da Série / Filme</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Ex: A Casa do Dragão" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Tipo</label>
                      <select name="tipo" class="form-control">
                        <option>Série</option>
                        <option>Filme</option>
                        <option>Anime</option>
                        <option>Documentário</option>
                        <option>Outro</option>
                      </select>
                    </div>

                    <div class="row">
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Temporada</label>
                          <input name="temporada" type="number" class="form-control" placeholder="Apenas para séries" value="1" min="1">
                        </div>
                      </div>
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Episódio</label>
                          <input name="episodio" type="number" class="form-control" placeholder="Apenas para séries" value="1" min="1">
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label>Notas</label>
                      <textarea name="notas" class="form-control" rows="3" placeholder="Alguma anotação sobre o item..."></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <a class="btn btn-lg btn-outline-light btn-block" href="../home.php">Voltar</a>
                      </div>

                      <div class="col-12 col-md-6">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Adicionar</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>