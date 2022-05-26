<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php
  require_once 'classes/genero.php';


  ?>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro de Animes</title>
  <link rel="shortcut icon" href="/favicon.ico" />

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Link CSS de Formatação -->
  <!--link rel="stylesheet" href="css/formatacao.css" /-->
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
                <a class="nav-link" href="/cadastro_anime.php">Cadastrar Animes</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <h1 class="text-center">Cadastro de Animes</h1>
      <form class="pb-3" action="">
        <div class="mb-3">
          <label for="name" class="form-label">Nome:</label>
          <input type="text" class="form-control" id="name" />
        </div>
        <div class="mb-3">
          <label for="dt-lancamento" class="form-label">
            Data de Lançamento:
          </label>
          <input type="date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" class="form-control" id="dt-lancamento" />
        </div>
        <div class="mb-3">
          <label for="classificacao-indicativa" class="form-label">
            Classificação indicativa:
          </label>
          <input type="number" class="form-control" id="classificacao-indicativa" />
        </div>
        <div class="mb-3">
          <label for="id_genero" class="form-label"> Gênero: </label>
          <select class="form-select" id="id_genero">
            <option selected disabled>Escolha uma opção:</option>
            <?php
            $lista = new Genero();
            $arr = $lista->findAll();

            $arr_genero = array();
            foreach ($arr as $chave => $valor) {

              $genero = new Genero();
              $genero->setGenrId($valor->genr_id);
              $genero->setGenrNome($valor->genr_nome);
              $arr_genero[] = $genero;
            }

            foreach ($arr_genero as $genero) {
              echo '<option value="' . $genero->getGenrId() . '">' . $genero->getGenrNome() . "</option>";
            }

            ?>

          </select>
        </div>
        <div class="mb-3">
          <label for="autor" class="form-label"> Autor: </label>
          <input type="text" class="form-control" id="autor" />
        </div>
        <div class="mb-3">
          <label for="quantidade-episodios" class="form-label">
            Quantidade de Episódios:
          </label>
          <input type="number" class="form-control" id="quantidade-episodios" />
        </div>
        <div class="mb-3">
          <label for="quantidade-temporadas" class="form-label">
            Quantidade de Temporadas:
          </label>
          <input type="number" class="form-control" id="quantidade-temporadas" />
        </div>
        <div class="mb-3 pb-3">
          <label for="yt-id" class="form-label">
            Id da Opening no Youtube:
          </label>
          <input type="text" class="form-control" id="yt-id" />
        </div>
        <div class="text-end w-100">
          <button type="submit" class="btn btn-dark inline-block">
            Cadastrar
          </button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>