<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax Saga - Cadastro</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
</head>
<body>   
    
    <?php include('menu.php');?>

    <div class="tituloCad">
        <a href="cadastro.php" id="linkSelecionado">CADASTRO</a>
        <a href="login.php" id="linkLog">LOGIN</a>
    </div>

    <div class="divTudoForm">
        <div class="divCampos">
            <form action="cadastro.act.php" method="POST" enctype="multipart/form-data">

                <div class="todosCampos">
                    <h3>Nome:</h3>
                    <input type="text" name="nome" required>
                </div>

                <div class="todosCampos">
                    <h3>Sobrenome:</h3>
                    <input type="text" name="sobrenome" required>
                </div>

                <div class="todosCampos">
                    <h3>Email:</h3>
                    <input type="email" name="email" required>
                </div>

                <div class="camposInfo">
                    <div class="todosCampos">
                        <h3 class="tituloTelS">Telefone:</h3>
                        <input type="tel" name="telefone" class="campoTelS" required id="telefoneMask">
                    </div>

                    <div class="todosCampos">
                        <h3 class="tituloTelS">Senha:</h3>
                        <input type="password" name="senha" class="campoTelS" required>
                    </div>

                </div>
        </div>
        <div class="userInfos">
            <div class="todoEscolhaAvatar">
                <div class="escolhaAvatar"></div>
                <label for="fotoInput" id="fotoLabel">
                    <img src="img/escolheFoto.png" id="fotoImg" alt="camera" />
                </label>
                <input type="file" id="fotoInput" name="foto">  
            </div>

            <div class="escolhaSexo">
                <h2>SEXO:</h2>
                <div class="todoRadio">
                    <label for="fem">
                        <img src="img/fem.png" alt="">
                    </label>
                    <label for="naoDizer">
                        <img src="img/naoDizer.png" alt="">
                    </label>
                    <label for="masc">
                        <img src="img/masc.png" id="imgMasc">
                    </label>
                    <input type="radio" name="sexo" id="fem" value="fem">
                    <input type="radio" name="sexo" id="naoDizer" value="nenhum">
                    <input type="radio" name="sexo" id="masc" value="masc">
                </div>
            </div>

            <div class="botaoCadastro">
                <input type="submit" value="Cadastrar-se" id="botaoCad">
            </div>
            </form>

            <p id="msgC">
            <?php
                @session_start();
                if(isset($_SESSION['msgC'])){
                    echo "<h4 id=mensagemCad>".$_SESSION['msgC']."</h4>";
                    unset($_SESSION['msgC']);
                }
            ?>
            </p>
        </div>
    </div>

    <script>
        $('#telefoneMask').mask('(00) 00000-0000');
    </script>

</body>