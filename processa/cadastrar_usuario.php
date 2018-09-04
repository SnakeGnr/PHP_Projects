<?php
session_start();

include_once("../seguranca.php");
include_once("../conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$nivel_de_acesso = $_POST['nivel_de_acesso'];


$sql = "INSERT INTO usuarios (nome, email, login, senha, nivel_acesso_id) values ('$nome', '$email', '$login', '$senha', '$nivel_de_acesso')";

if (mysqli_query($conexao, $sql)) {
    echo "Deu boa";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}


mysqli_close($conexao);
?>