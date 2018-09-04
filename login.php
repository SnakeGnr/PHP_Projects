<?PHP 

    session_start();

    ?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="SnakeGnr">
    <link rel="icon" href="img/favicon.ico">

    <title>Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <?php 
    //unset destroi as variaveis da sessão
      unset(
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioEmail'] ,
        $_SESSION['usuarioLogin'],
        $_SESSION['usuarioSenha'],
        $_SESSION['usuarioNivelAcesso'] );
    ?>
    
    <form class="form-signin" method="post" action="valida_login.php">
      <img class="mb-4" src="img/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Área de Login</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="usuario" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
    <p class="text-danger"> 
      <?php 
      
        if(isset($_SESSION['loginError'])){
          echo $_SESSION['loginError'];
          unset ($_SESSION['loginError']);
        }

      ?>
    
      </p>

      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

  </body>
</html>

