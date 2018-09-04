<?php
ob_start();

if(($_SESSION['usuarioNome']=="")|| ($_SESSION['usuarioId']=="")){

    unset(
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioEmail'] ,
        $_SESSION['usuarioLogin'],
        $_SESSION['usuarioSenha'],
        $_SESSION['usuarioNivelAcesso'] );
    //Mensagem de Erro
    $_SESSION['loginError'] = "Área restrita para usuários Cadastrados";

    //redireciona login
    header("Location: login.php");

}



?>