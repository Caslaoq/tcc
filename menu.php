<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="usuario.css">
</head>
<body>
    <?php require('connect.php')?>

    <?php session_start();?>
    <div class="menuFixo">
        <?php 

            @$codU = $_SESSION['codUser'];         

            if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
                echo "<a href=paginaUsuario.php?codigoU=$codU class=fotoUser><img src=$_SESSION[foto] alt=foto usuário  id=fotoUsuarioA></a>";
                echo "<a href=inicio.php id=logo><img src=img/logoImg.jpeg></a>";
                echo "<a href=sobreNos.php id=sobreNos><img src=img/sobreNos.png></a>";
            }else{
                echo "<a href=cadastro.php><img src=img/iconUser.png alt=foto usuário id=fotoUser></a>";
                echo "<a href=inicio.php id=logo><img src=img/logoImg.jpeg></a>";
                echo "<a href=sobreNos.php id=sobreNos><img src=img/sobreNos.png></a>";
            }
        ?>

    </div>
</body>
</html>