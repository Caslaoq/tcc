<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="corpoUsuario">
    <?php 
        include('menu.php');

        $usuarios = mysqli_query($con, "SELECT * FROM `tb_user` WHERE `cod` =  '$_SESSION[codUser]'");
        $usuarioA = mysqli_fetch_assoc($usuarios);
    ?>

    <div class="topoAjuste">
        <a href=""><img src="img/ajustesIcon.png" alt="Foto robo ajuste"></a>
        <a href="logout.php" id="logout">SAIR</a>
    </div>


    <div class="tudoUsuario">
        <div class="ladoEUsuario">
            <div class="areaConquistas">
                <div class="conquistas">
                    <div class="tituloConquista">                    
                        <h3>Imparável!</h3>
                    </div>
                    <img src="img/conqN1.png" alt="">
                    <div class="descConquistas">
                        <h4>Realize uma sequência de 10 acessos diários</h4>
                    </div>
                </div>
                <div class="conquistas">
                    <div class="tituloConquista">
                        <h3>Sequência Inicial</h3>
                    </div>
                    <img src="img/conqN2.png" alt="">
                    <div class="descConquistas">
                        <h4>Realize 5 atividades consecutivas</h4>
                    </div>
                </div>
                <div class="conquistas">
                    <div class="tituloConquista">
                        <h3>Um deus, uma Máquina</h3>
                    </div>
                    <img src="img/conqN3.png" alt="">
                    <div class="descConquistas">
                        <h4>Finalize uma atividade com 100% de Sucesso</h4>
                    </div>
                </div>
            </div>

            <div class="todoDiario">
                <h2>Atividade Diária</h2>
                <div class="todaBarraDiaria">
                    <div class="barraDiaria">
                        <div class="carregamento"></div>
                    </div>
                    <h2 id="porcentagemDiaria">90%</h2>
                </div>
            </div>
        </div>

        <div class="ladoDUsuario">
            <div class="divLadoD">
                <div class="usuarioTodo">
                    <?php echo"<div class=fotoUsuario><img src=$_SESSION[foto]></div>";?>
                    <h2><?php echo $_SESSION['nome']." ".$_SESSION['sobrenome'];?></h2>
                </div>

                <div class="todoNivel">
                    <h3>lógica de Programação - Nível 5</h3>
                    <div class="barraNivel">
                        <h3>2700xp / 3000xp</h3>
                    </div>
                </div>

                <img src="img/calender.png" alt="">
            </div>
        </div>
    </div>
    
</body>
</html>