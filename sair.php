<?php
session_start();

session_destroy();


unset(
    $_SESSION['usuarioId'],
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioEmail'] ,
    $_SESSION['usuarioLogin'],
    $_SESSION['usuarioSenha'],
    $_SESSION['usuarioNivelAcesso'] );

    header("Location: login.php");

?>