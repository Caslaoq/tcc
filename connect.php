<?php
    define("ENDERECO",'localhost');
    define("USUARIO",'root');
    define("SENHA",'');
    define("BASE",'bd_syntax');
    $con = mysqli_connect(ENDERECO,USUARIO,SENHA,BASE);
    mysqli_query($con,"SET NAMES utf8");