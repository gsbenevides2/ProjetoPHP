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
      <h3>Quem somos:</h3>
      <p>
        DIC3 - A sua maior fonte de animes do Mundo, agora está em suas mãos,
        trazendo notícias e novidades todos os dias!!!
      </p>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://firebasestorage.googleapis.com/v0/b/projeto-php-ff075.appspot.com/o/love%20is%20war_1.jpg?alt=media&token=7de0ce9d-1914-4bf9-9d83-b63516f0326a" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="https://firebasestorage.googleapis.com/v0/b/projeto-php-ff075.appspot.com/o/damonsleyer.jpg?alt=media&token=a1fa841b-7abd-44fb-9e3c-93f786c4cc7e" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="https://firebasestorage.googleapis.com/v0/b/projeto-php-ff075.appspot.com/o/naruto.jpg?alt=media&token=5662bd5c-a973-4b9f-b904-0166a4e4e440" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="https://firebasestorage.googleapis.com/v0/b/projeto-php-ff075.appspot.com/o/bleach_1.jpg?alt=media&token=bc0fffc5-7b03-4fa9-be09-55e73ec53f44" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="https://firebasestorage.googleapis.com/v0/b/projeto-php-ff075.appspot.com/o/onepiece.jpg?alt=media&token=f72f649f-a563-4942-9baa-694ee931fc34" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="https://firebasestorage.googleapis.com/v0/b/projeto-php-ff075.appspot.com/o/black_cover.jpg?alt=media&token=2c5c3e5f-5a37-412b-82d9-87ad0f581af7" class="d-block w-100" />
          </div>
          <div class="carousel-item">
            <img src="https://firebasestorage.googleapis.com/v0/b/projeto-php-ff075.appspot.com/o/one%20punch%20man.jpg?alt=media&token=e4d8964e-d684-4971-be2a-201b5847071c" class="d-block w-100" />
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
      <h3 class="mt-3">Conheça os ANIMES</h3>
      <p>
        Animes são os desenhos animados produzidos no Japão. Para os japoneses
        os animes são todos os desenhos animados, independente da sua origem,
        nacional ou estrangeira. Para o mundo ocidental os animes são apenas
        os desenhos animados do Japão.
      </p>

      <div class="image-grid">
        <img src="https://firebasestorage.googleapis.com/v0/b/gui-benevides.appspot.com/o/animes%2FAnime%20001.jpg?alt=media&token=40b57774-b56f-40a6-b789-6bdf7c31cf1b" />
        <img src="https://firebasestorage.googleapis.com/v0/b/gui-benevides.appspot.com/o/animes%2Faime0005.jpg?alt=media&token=e33f9334-4c7f-43bf-b0ed-66cf14178eab" />
        <img src="https://firebasestorage.googleapis.com/v0/b/gui-benevides.appspot.com/o/animes%2Fanime002.jpg?alt=media&token=f107f630-0051-4842-b0a7-66b9bb636126" />
        <img src="https://firebasestorage.googleapis.com/v0/b/gui-benevides.appspot.com/o/animes%2Fanime003.jpg?alt=media&token=af059df9-c4ed-43d4-820d-fb95622befdc" />
        <img src="https://firebasestorage.googleapis.com/v0/b/gui-benevides.appspot.com/o/animes%2Fanime004.jpg?alt=media&token=b4610829-1a9a-4896-9e2f-935c1044a8fb" />
        <img src="https://firebasestorage.googleapis.com/v0/b/gui-benevides.appspot.com/o/animes%2Fnime006.jpg?alt=media&token=ddf9a871-8d40-4b8d-a753-f5cc0d9323b2" />
      </div>
      <h5 class="text-center pb-3 pt-3">
        Criado com 🖤 por Felipe, Guilherme e Lucas
      </h5>
    </div>
  </div>
</body>

</html>
