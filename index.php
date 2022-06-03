<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
  <link rel="shortcut icon" href="/favicon.ico" />

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Link CSS de Formatação -->
  <link rel="stylesheet" href="css/estilos globais.css" />
  <link rel="stylesheet" href="css/home.css" />
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
                <a class="nav-link" href="/cadastro_anime.php">Cadastrar Animes</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <h4 class="text-center">
        A sua maior fonte de animes do Mundo, agora está em suas mãos
      </h4>
      <h5 class="text-center">
        Consulte as informações sobre seus animes favoritos!!
      </h5>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="/anime_detalhes.php?id=2">
              <img src="/media/banners/kaguwa_sama.webp" class="d-block w-100" />
            </a>
          </div>
          <div class="carousel-item">
            <a href="/anime_detalhes.php?id=4">
              <img src="/media/banners/demon_slayer.webp" class="d-block w-100" />
            </a>
          </div>
          <div class="carousel-item">
            <a href="/anime_detalhes.php?id=6">
              <img src="/media/banners/naruto.webp" class="d-block w-100" />
            </a>
          </div>
          <div class="carousel-item">
            <a href="/anime_detalhes.php?id=5">
              <img src="/media/banners/bleach.webp" class="d-block w-100" />
            </a>
          </div>
          <div class="carousel-item">
            <a href="/anime_detalhes.php?id=7">
              <img src="/media/banners/one_piece.webp" class="d-block w-100" />
            </a>
          </div>
          <div class="carousel-item">
            <a href="/anime_detalhes.php?id=8">
              <img src="/media/banners/black_clover.webp" class="d-block w-100" />
            </a>
          </div>
          <div class="carousel-item">
            <a href="/anime_detalhes.php?id=9">
              <img src="/media/banners/one_puch_man.webp" class="d-block w-100" />
            </a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <h3 class="mt-3">Conheça os ANIMES:</h3>
      <p>
        Animes são os desenhos animados produzidos no Japão. Para os japoneses
        os animes são todos os desenhos animados, independente da sua origem,
        nacional ou estrangeira. Para o mundo ocidental os animes são apenas
        os desenhos animados do Japão.
      </p>

      <div class="image-grid">
        <a href="/anime_detalhes.php?id=4">
          <img src="/media/capas/deamon_slayer.webp" />
        </a>
        <a href="/anime_detalhes.php?id=2">
          <img src="/media/capas/kaguwa_sama.webp" />
        </a>
        <a href="/anime_detalhes.php?id=6">
          <img src="/media/capas/naruto.webp" />
        </a>
        <a href="/anime_detalhes.php?id=5">
          <img src="/media/capas/bleach.webp" />
        </a>
        <a href="/anime_detalhes.php?id=7">
          <img src="/media/capas/one_piece.webp" />
        </a>
        <a href="/anime_detalhes.php?id=8">
          <img src="/media/capas/black_clover.webp" />
        </a>
      </div>
      <h5 class="text-center pb-3 pt-3">
        Criado com 🖤 por Felipe, Guilherme e Lucas
      </h5>
    </div>
  </div>
  <script src="/javascript/removeDisclamer.js"></script>
</body>

</html>