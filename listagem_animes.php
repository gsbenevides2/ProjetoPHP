<?php
session_start();
require_once "classes/anime.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lista de Animes</title>
  <link rel="shortcut icon" href="/favicon.ico" />

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Link CSS de Formatação -->
  <link rel="stylesheet" href="css/estilos globais.css" />

  <script src="/javascript/backgroundChanger.js"></script>
  <style>
    .page-link {
      color: black;
    }

    .page-link:hover {
      color: black;
      box-shadow: 0 0 0 0.25rem rgba(0, 0, 0, 0.25);
    }
  </style>
</head>

<body>
  <div class="background-changer"></div>
  <div class="container-lg bg-light page-content">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a href="/" class="navbar-brand d-flex flex-column">
          <img src="media/logo.svg" width="100" height="100" class="" alt="Logo do Website" />
          Animes.com
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="d-flex justify-content-end w-100">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Página Inicial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/listagem_animes.php">Lista de Animes</a>
              </li>
              <li class="nav-item">
                <?php
                if (isset($_SESSION['usu_id'])) {
                  echo '<a class="nav-link" href="/deslogar.php">Sair</a>';
                } else {
                  echo '<a class="nav-link" href="/login.php">Entrar</a>';
                }
                ?>

              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <h1 class="text-center">Listagem de Animes</h1>
      <div class="d-grid gap-2 mb-3 w-80">
        <a type="button" class="btn btn-outline-dark text-center" href="/cadastro_anime.php">
          Novo Anime
        </a>
      </div>
      <?php
      $anime = new Anime();
      $lista = $anime->findAll();
      $listaDeAnimes = array();
      foreach ($lista as $key => $value) {
        $anime = new Anime();
        $anime->setAnimId($value->anim_id);
        $anime->setAnimNome($value->anim_nome);
        $anime->setAnimDtLancamento($value->anim_dt_lancamento);
        $anime->setAnimClassificacaoIndicativa($value->anim_classificacao_indicativa);

        //Genero do Anime
        $genero = new Genero();
        $genero->setGenrId($value->genr_id);
        $genero->setGenrNome($value->genr_nome);
        $anime->setAnimGenero($genero);

        $anime->setAnimAutor($value->anim_autor);
        $anime->setAnimQuantidadeEpisodios($value->anim_quantidade_episodios);
        $anime->setAnimQuantidadeTemporadas($value->anim_quantidade_temporadas);

        //Usuario do anime
        $usuario = new Usuario();
        $usuario->setUsuId($value->usu_id);
        $usuario->setUsuLogin($value->usu_login);
        $usuario->setUsuSenha($value->usu_senha);

        $anime->setAnimYtId($value->anim_yt_id);
        $listaDeAnimes[] = $anime;
      }

      foreach ($listaDeAnimes as $anime) {
        echo '<div class="card"><div class="card-body">';
        echo '<h5 class="card-title">' . $anime->getAnimNome() . '</h5>';
        echo '<p class="card-text">Quantidade de temporadas:' . $anime->getAnimQuantidadeTemporadas() . '</p>';
        echo '<a href="/anime_detalhes.php?id=' . $anime->getAnimId() . '" class="btn btn-secondary">Ver detalhes</a></div></div><br/>';
      }
      ?>
      <nav>
        <!--ul class="pagination justify-content-center mt-3 pb-3">
          <li class="page-item">
            <a class="page-link" href="#">Anterior</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Proximo</a></li>
        </!--ul>
      </nav>
    </div>
  </div>
</body>

</html>