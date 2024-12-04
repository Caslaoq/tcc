<?php
    require('connect.php');

    session_start();
    $_SESSION['logado'] = false;
    unset($_SESSION['logado']);
    unset($_SESSION['foto']);
    unset($_SESSION['nome']);

    session_destroy();

    header("location:login.php");
?>
