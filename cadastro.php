<?php 

session_start();
include_once("seguranca.php");

//mostra  o nome
//<?php echo "Bem vindo Administrador:  ".$_SESSION['usuarioNome']; ?> 

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pagina Administrativa">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Cadastro</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>

  <body>
    <?php 
    include("menu_admin.php");
    ?>
    <main role="main" class="container">

<div class="starter-template">
  <h1>Cadastrar Usuario </h1>
</div>

<div class="col-md-12">
<form method="POST" action="processa/cadastrar_usuario.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu Nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Insira seu email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu Login">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Senha</label>
    <input type="password" name="senha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira sua senha">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nivel de acesso</label>
    <select name="nivel_de_acesso" class="custom-select">
  <option selected>Escolha um nivel</option>
  <option value="1">Administrador</option>
  <option value="2">Usuario</option>
</select>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="button" class="btn btn-secondary">Cancel</button>
</form>
</div>

</main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
