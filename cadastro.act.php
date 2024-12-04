<?php
    extract($_POST);
    extract($_FILES);

    session_start();

    require('connect.php');
    $msg = "";

    if($foto['size'] == 0){
        $destino = "img/userM.png";
    }else{
        $destino = "fotosUsuarios/".md5(time().$foto['size']). ".jpg";
    }
    
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $emailU = mysqli_query($con, "SELECT * FROM `tb_user` WHERE `email` = '$email'");
    if($emailU->num_rows > 0){
        $msg = "Esse Usuário Já Possui Um Cadastro";
    }else{
        if(mysqli_query($con, "INSERT INTO `tb_user` 
        (`cod`,`nome`, `sobrenome`, `email`, `telefone`, `sexo`, `foto`, `senha`) VALUES 
        (NULL, '$nome', '$sobrenome', '$email', '$telefone', '$sexo', '$destino', '$senha');")){
            move_uploaded_file($foto['tmp_name'], $destino);
            $msg = "Registro feito com sucesso";
        }else{
            $msg = "Erro ao criar registro ". $con->error;
        }
    }

    $_SESSION['msgC'] = $msg;

    header("location:cadastro.php");