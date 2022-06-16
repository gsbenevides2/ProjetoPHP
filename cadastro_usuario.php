<?php
include_once "classes/usuario.php";
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro de Usuário</title>
  <link rel="shortcut icon" href="/favicon.ico" />

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Link CSS de Formatação -->
  <link rel="stylesheet" href="css/estilos globais.css" />
  <link rel="stylesheet" href="css/login.css" />

  <script src="/javascript/backgroundChanger.js"></script>
</head>

<body>
  <div class="background-changer"></div>
  <div class="container">
    <div class="box">
      <h1>Cadastro de Usuário</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <div class="mb-3">
          <label for="user" class="form-label">Usuário:</label>
          <input type="text" class="form-control" id="user" name="user" />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha:</label>
          <input type="password" class="form-control" id="password" name="password" />
        </div>
        <div class="d-flex flex-column text-center mt-4">
          <button type="submit" class="btn btn-dark mb-2">Cadastrar</button>
          <a class="text-dark" href="/login.php">Já Tenho Conta</a>
        </div>
      </form>
      <?php
      if (
        isset($_POST['user']) && $_POST['user']  != '' && isset($_POST['password'])
      ) {
        extract($_POST);
        $user = filter_var($user, FILTER_SANITIZE_STRING);

        $novo = new Usuario();
        $novo->setUsuLogin($user);
        $novo->setUsuSenha($password);
        $novo->setUsuStatus('ativo');
        $novo->insertUsuario();
        header("Location: login.php");
      }
      ?>

    </div>
  </div>
</body>

</html>