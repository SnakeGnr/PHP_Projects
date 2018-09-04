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

    <title>Area Administrativa</title>

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
  <h1>Bem vindo a Area Administrativa </h1>
  
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
