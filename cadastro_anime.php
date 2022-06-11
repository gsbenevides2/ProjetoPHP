<?php
session_start();
include_once 'classes/genero.php';
include_once 'classes/anime.php';
include_once 'classes/usuario.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

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

  <script src="/javascript/backgroundChanger.js"></script>
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
      <h1 class="text-center">Cadastro de Animes</h1>

      <?php
      if (isset($_SESSION['usu_id']) == FALSE) {
        header("Location: login.php");
      }
      if (
        isset($_POST['nome']) &&
        $_POST['nome']  != '' &&
        isset($_POST['dt_lancamento']) &&
        isset($_POST['classificacao_indicativa']) &&
        isset($_POST['id_genero']) &&
        isset($_POST['autor']) &&
        $_POST['autor']  != '' &&
        isset($_POST['quantidade_episodios']) &&
        isset($_POST['quantidade_temporadas']) &&
        isset($_POST['yt_id']) &&
        $_POST['yt_id']  != ''
      ) {

        extract($_POST);
        //SANITIZANDO O NOME E AUTOR
        $nome = filter_var($nome, FILTER_SANITIZE_STRING);
        $autor = filter_var($autor, FILTER_SANITIZE_STRING);

        //Instanciando o objeto anime para inseri-lo no banco
        $novo = new Anime();
        $novo->setAnimNome($nome);
        $novo->setAnimDtLancamento($dt_lancamento);
        $novo->setAnimClassificacaoIndicativa($classificacao_indicativa);
        $novo->setIdGenero($id_genero);

        $novo->setIdUsuario($_SESSION['usu_id']);

        $novo->setAnimAutor($autor);
        $novo->setAnimQuantidadeEpisodios($quantidade_episodios);
        $novo->setAnimQuantidadeTemporadas($quantidade_temporadas);
        $novo->setAnimYtId($yt_id);




        //Inserindo o anime no banco
        $novo->insertAnime();
        echo '<div class="alert alert-success" role="alert">Anime Cadastrado com Sucesso!</div>';
      }
      ?>

      <form class="pb-3" id="cadastroform" name="cadastroform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <div class="mb-3">
          <label for="name" class="form-label">Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome" />
        </div>
        <div class="mb-3">
          <label for="dt_lancamento" class="form-label">
            Data de Lançamento:
          </label>
          <input type="date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" class="form-control" id="dt_lancamento" name="dt_lancamento" />
        </div>
        <div class="mb-3">
          <label for="classificacao_indicativa" class="form-label">
            Classificação indicativa:
          </label>
          <input type="number" class="form-control" min=1 id="classificacao_indicativa" name="classificacao_indicativa" />
        </div>
        <div class="mb-3">
          <label for="id_genero" class="form-label"> Gênero: </label>
          <select class="form-select" id="id_genero" name="id_genero">
            <option selected disabled>Escolha uma opção:</option>
            <?php
            //Obtendo os generos para coloca-los no select
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
          <input type="text" class="form-control" id="autor" name="autor" />
        </div>
        <div class="mb-3">
          <label for="quantidade_episodios" class="form-label">
            Quantidade de Episódios:
          </label>
          <input type="number" class="form-control" id="quantidade_episodios" name="quantidade_episodios" />
        </div>
        <div class="mb-3">
          <label for="quantidade_temporadas" class="form-label">
            Quantidade de Temporadas:
          </label>
          <input type="number" class="form-control" id="quantidade_temporadas" name="quantidade_temporadas" />
        </div>
        <div class="mb-3 pb-3">
          <label for="yt_id" class="form-label">
            Id da Opening no Youtube:
          </label>
          <input type="text" class="form-control" id="yt_id" name="yt_id" />
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