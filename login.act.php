<?php

extract($_POST);
require('connect.php');
session_start();
$destino = "";
$msg;


if($nomeEmail != "" && $senha !=""){
    $user = mysqli_query($con, "SELECT * FROM `tb_user` WHERE `email` = '$nomeEmail' OR `nome` = '$nomeEmail'");
    if($user->num_rows == 1){
        $user = mysqli_fetch_assoc($user);
        if(password_verify($senha, $user['senha'])){
            $_SESSION['logado'] = true;
            $_SESSION['codUser'] = $user['cod'];
            $_SESSION['sobrenome'] = $user['sobrenome'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['foto'] = $user['foto'];
            $msgSL = "Bem vindo $user[nome]";

            $destino = "location:paginaUsuario.php?codU=".$_SESSION['codUser'];
        }else{
            $msg = "Nome ou senha incorreta!";
            $destino = "location:login.php";
        }
    }else{
        $msg = "Nome ou senha incorreta!";
        $destino = "location:login.php";
    }
}else{
    $msg = "Preencha os dois campos!";
    $destino = "location:login.php";
}

$_SESSION['mensagemSL'] = $msgSL;
$_SESSION['msgL'] = $msg;
header($destino);