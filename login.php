<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax Saga - Login</title>
    <link rel="stylesheet" href="usuario.css">
</head>
<body id="corpoLogin">

    <?php include('menu.php')?>        
    
    <div class="tituloCad">
        <a href="cadastro.php" id="linkCad">CADASTRO</a>
        <a href="login.php" id="linkSelecionado">LOGIN</a>
    </div>

    <div class="divTudoForm" id="todoLogin">
        <div class="divCampos" id="todosCamposL">
            <form action="login.act.php" method="POST" enctype="multipart/form-data" id="formLogin">
                <div class="todosCampos" id="camposLogin">
                    <h3>Email:</h3>
                    <input type="text" name="nomeEmail">
                </div>

                <div class="todosCampos" id="camposLogin">
                    <h3>Senha:</h3>
                    <input type="password" name="senha" id="senhaLogin">
                </div>
                
                <input type="submit" value="Entrar" id="botaoLog">
            </form>

            <p id="msgL">
            <?php
                @session_start();
                if(isset($_SESSION['msgL'])){
                    echo "<h4 id=mensagemLog>".$_SESSION['msgL']."</h4>";
                    unset($_SESSION['msgL']);
                }
            ?>
            </p>
        </div>

    </div>

</body>