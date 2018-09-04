
    <?php
    session_start();
    include_once("seguranca.php");
    include_once("conexao.php");
    ?>


    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="SnakeGnr">
    <link rel="icon" href="img/favicon.ico">

    <title>Listar</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
  </head>

      
   <body role="document">
     <?php include_once("menu_admin.php");

$conectar = new mysqli("localhost","root","","projeto1");

$resultado = $conectar->query("SELECT * FROM usuarios ORDER BY 'id' ");
   

    ?>

       <main role="main" class="container">

<div class="starter-template">
  <h1>Lista de usuários </h1>
  
</div>

  <div class="col-md-12">
  <table class="table table-striped table-dark">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Nome</th>
<th scope="col">Email</th>
<th scope="col">Login</th>
<th scope="col">Nivel de acesso</th>
<th scope="col">Ações</th>
</tr>
</thead>

<?php
require_once('conexao.php');


function listaUsuarios($conexao){

 $usuarios = array();
 $query = "SELECT * FROM usuarios";
 $resultado = mysqli_query($conexao, $query);

 while($usuario = mysqli_fetch_assoc($resultado)){
  array_push($usuarios, $usuario);
 }
 return $usuarios;
}
 
 $usuarios = listaUsuarios($conexao);

 foreach($usuarios as $usuario){?>

<tbody>
<tr>
<th scope="row"><?=$usuario['id']?> </th>
<td><?=$usuario['nome']?></td>
<td><?=$usuario['email']?></td>
<td><?=$usuario['login']?></td>
<td><?=$usuario['nivel_acesso_id']?></td>
<td>Editar </td>
</tr>
</tbody>
<?php
            }
            ?>
</table>
  </div>



</main><!-- /.container -->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>