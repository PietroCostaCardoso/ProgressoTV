<?php require_once "../scripts/validador_acesso.php" ?>

<?php

  $chamados_exibicao = array();

  $caminho_arquivo = '../../../engine/arquivo.hd';

  if(file_exists($caminho_arquivo)) {
    $linhas = file($caminho_arquivo, FILE_IGNORE_NEW_LINES);

    foreach($linhas as $indice => $registro) {
      $dados = explode('#', $registro);

      if(count($dados) < 6) continue;

      if($_SESSION['perfil_id'] == 2 && $_SESSION['id'] != $dados[0]) continue;

      $chamados_exibicao[] = [
        'id_linha' => $indice,
        'titulo' => $dados[1],
        'tipo' => $dados[2],
        'temporada' => $dados[3],
        'episodio' => $dados[4],
        'notas' => $dados[5]
      ];
    }
  }
  
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
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      .card-main {
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
      .item-card {
        background: #2b2b2b;
        border: none;
        border-radius: 10px;
        transition: transform 0.2s;
        height: 100%;
      }
      .item-card:hover {
        transform: scale(1.03);
        background: #333;
      }
      .badge-custom {
        font-size: 0.8rem;
      }
      .btn-trash {
        color: #dc3545;
        cursor: pointer;
      }
      .btn-trash:hover {
        color: #bd2130;
      }
    </style>
  </head>

  <body>

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

        <div class="card-consultar-chamado">
          <div class="card card-main">
            <div class="card-header">
              Minha Lista de Progresso
            </div>
            
            <div class="card-body border-bottom border-secondary">
              <div class="form-group mb-0">
                <label for="filtro-titulo" class="font-weight-bold">Filtrar por nome</label>
                <input type="text" id="filtro-titulo" class="form-control" placeholder="Digite o nome da série ou filme...">
              </div>
            </div>

            <div class="card-body">

              <?php if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
                <div class="alert alert-success text-center" role="alert">
                  Item adicionado com sucesso!
                </div>
              <?php } ?>

              <div class="row">

              <?php foreach($chamados_exibicao as $item) { ?>
                
                <div class="col-md-4 mb-4 item-container">
                  <div class="card item-card text-white">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title font-weight-bold mb-0"><?= htmlspecialchars($item['titulo']) ?></h5>
                        <?php 
                          $badgeClass = 'badge-secondary';
                          if($item['tipo'] == 'Série') $badgeClass = 'badge-primary';
                          if($item['tipo'] == 'Filme') $badgeClass = 'badge-success';
                          if($item['tipo'] == 'Anime') $badgeClass = 'badge-danger';
                        ?>
                        <span class="badge <?= $badgeClass ?> badge-custom"><?= htmlspecialchars($item['tipo']) ?></span>
                      </div>

                      <?php if($item['tipo'] == 'Série' || $item['tipo'] == 'Anime') { ?>
                        <h6 class="text-info mb-3">
                          Temporada <?= htmlspecialchars($item['temporada']) ?> &bull; Episódio <?= htmlspecialchars($item['episodio']) ?>
                        </h6>
                      <?php } ?>

                      <?php if(!empty(trim($item['notas']))) { ?>
                        <p class="card-text small text-muted border-top border-secondary pt-2 mt-2"><em>"<?= htmlspecialchars($item['notas']) ?>"</em></p>
                      <?php } ?>

                      <form method="POST" action="../scripts/remove_item.php" class="mt-3" onsubmit="return confirm('Tem certeza que deseja excluir este item?');">
                        <input type="hidden" name="id" value="<?= $item['id_linha'] ?>">
                        <button type="submit" class="btn btn-sm btn-outline-danger w-100">
                          Excluir
                        </button>
                      </form>
                    </div>
                  </div>
                </div>

              <?php } ?>
              </div>

              <div class="row mt-5">
                <div class="col-12 col-md-6">
                  <a class="btn btn-lg btn-outline-light btn-block" href="../home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      document.getElementById('filtro-titulo').addEventListener('keyup', function() {
        let termoBusca = this.value.toLowerCase();
        
        let itens = document.querySelectorAll('.item-container');

        itens.forEach(function(item) {
          let titulo = item.querySelector('.card-title').textContent.toLowerCase();

          if (titulo.includes(termoBusca)) {
            item.style.display = ''; 
          } else {
            item.style.display = 'none'; 
          }
        });
      });
    </script>
  </body>
</html>