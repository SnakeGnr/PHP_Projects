<?php 
session_start();

$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];

include_once("conexao.php");

$conectar = new mysqli("localhost","root","","projeto1");

$result = $conectar->query("SELECT * FROM usuarios WHERE login='$usuariot' AND senha='$senhat' LIMIT 1");
$resultado = $result->fetch_assoc();
//echo "Usuario: ".$resultado['nome'];

if (empty($resultado)){
 //Mensagem de erro
 //cria uma variavel global 'loginError'
 $_SESSION['loginError'] = "Usuario ou senha inválidos";

 //Redireciona pra tela login
 header("Location: login.php");
}else{
    //cria uma variavel global 'usuarioNome' que sera passado na sessao
    //define os valores atribuidos na sessao
    $_SESSION['usuarioId'] =$resultado['id'];
    $_SESSION['usuarioNome'] =$resultado['nome'];
    $_SESSION['usuarioEmail'] =$resultado['email'];
    $_SESSION['usuarioLogin'] =$resultado['login'];
    $_SESSION['usuarioSenha'] =$resultado['senha'];
    $_SESSION['usuarioNivelAcesso'] =$resultado['nivel_acesso_id'];

    if($_SESSION['usuarioNivelAcesso'] == 1){
        header("Location: administrativo.php");
    }else{
        header("Location: usuario.php");
    }



    
}

?>