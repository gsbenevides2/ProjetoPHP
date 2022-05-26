<!DOCTYPE html>
<?php
require_once "classes/anime.php";
?>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>86 Eighty-Six</title>
  <link rel="shortcut icon" href="/favicon.ico" />

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Link CSS de Formatação -->
  <link rel="stylesheet" href="css/estilos globais.css" />
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
                <a class="nav-link" href="/cadastro_anime.html">Cadastrar Animes</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <?php
        $animeId = $_GET['id'];
        $anime = new Anime();
        $resultado = $anime->findById($animeId);
        $unicoAnime = $resultado['0'];
        $anime = new Anime();
        $anime->setAnimId($unicoAnime->anim_id);
        $anime->setAnimNome($unicoAnime->anim_nome);
        $anime->setAnimDtLancamento($unicoAnime->anim_dt_lancamento);
        $anime->setAnimClassificacaoIndicativa($unicoAnime->anim_classificacao_indicativa);

        //Genero do Anime
        $genero = new Genero();
        $genero->setGenrId($unicoAnime->genr_id);
        $genero->setGenrNome($unicoAnime->genr_nome);
        $anime->setAnimGenero($genero);

        $anime->setAnimAutor($unicoAnime->anim_autor);
        $anime->setAnimQuantidadeEpisodios($unicoAnime->anim_quantidade_episodios);
        $anime->setAnimQuantidadeTemporadas($unicoAnime->anim_quantidade_temporadas);

        //Usuario do anime
        $usuario = new Usuario();
        $usuario->setUsuId($unicoAnime->usu_id);
        $usuario->setUsuLogin($unicoAnime->usu_login);
        $usuario->setUsuSenha($unicoAnime->usu_senha);

        $anime->setAnimYtId($unicoAnime->anim_yt_id);
        ?>

        <?php echo '<iframe class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3" style="min-height: 400px" src="https://www.youtube.com/embed/' . $anime->getAnimYtId() . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'; ?>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
          <h2><?php echo $anime->getAnimNome(); ?></h2>
          <span><b>Autor:</b> <?php echo $anime->getAnimAutor(); ?></span><br />
          <span><b>Gênero:</b> <?php echo $anime->getAnimGenero()->getGenrNome(); ?></span><br />
          <span><b>Data de Lançamento:</b> <?php echo strftime("%d de %B de %Y", strtotime($anime->getAnimDtLancamento())) ?></span><br />
          <span><b>Quantidade de Temporadas:</b> <?php echo $anime->getAnimQuantidadeTemporadas(); ?></span><br />

          <span><b>Quantidade de Episódios:</b> <?php echo $anime->getAnimQuantidadeEpisodios(); ?></span><br />
          <span><b>Classificação Indicativa:</b> +<?php echo $anime->getAnimClassificacaoIndicativa(); ?></span>
          <div class="text-end">
            <button type="button" class="btn btn-outline-dark">Editar</button>
            <button type="button" class="btn btn-outline-danger">
              Deletar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>