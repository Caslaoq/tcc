<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax Saga - Início</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('menu.php')?>        

        <div class="pesquisa">
            <div class="barraP">

                <img src="img/lupa.png" alt="lupa">
            </div>

            <div class="menuBarra">
                <div class="linha"></div>
                <div class="linha"></div>
                <div class="linha"></div>
            </div>
        </div>

        <div class="meio">
            <div class="meioG"></div>
        </div>

        <div class="todoCategoria">
            <div class="barraC"></div>

            <div class="categorias">
                <div class="ladoE">
                    <div class="filtrar"></div>
                    <div class="quadradoE">
                        <label for="logicaCheck" class="checkFiltro">
                            <input type="checkbox" name="logica" id="logicaCheck">
                            <h4>Lógica de programação</h4>
                        </label>
                        <label for="htmlCheck" class="checkFiltro">
                            <input type="checkbox" name="html" id="htmlCheck">
                            <h4>HTML</h4>
                        </label>
                        <label for="cssCheck" class="checkFiltro">
                            <input type="checkbox" name="css" id="cssCheck">
                            <h4>CSS</h4>
                        </label>
                    </div>
                </div>

                <div class="ladoD">
                    <a href="cursos.php" class="quadradoCursos" id="c1"><h3>Lógica de Programação</h3></a>
                    <a href="" class="quadradoCursos" id="c2"><h3>HTML</h3></a>
                    <a href="" class="quadradoCursos" id="c3"><h3>CSS</h3></a>
                    <a href="" class="quadradoCursos" id="c4"><h3>Tudo</h3></a>
                </div>
            </div>
        </div>

        <div class="titulos"><h2>APRENDIZADOS:</h2></div>

    <div class="tudoA">
        <div class="imgA">
            <img src="img/principalFoto.jpeg" id="fotoA">
            <div class="infoT">
                <h2 id="tituloTopicos"></h2>
                <p id="descricaoTopicos"></p>
            </div>
        </div>

        <div class="descA">
            <div class="topico" id="t1" data-imagem="img/logicaFoto.jpeg" data-titulo="Lógica" data-descricao="Nos focamos em ensinar lógica pois ela é o primeiro passo que precisamos tomar quando falamos de programação. Ela é necessária durante todo o seu percurso com essa área para entendermos como cada código ou função funciona, ela é mais do que uma companheira quando se é necessária a busca de uma solução rápida e prática para os problemas.">
                <img src="img/logica.png" class="iconL">
                <h2>LÓGICA</h2>
            </div>
            <div class="topico" id="t2" data-imagem="img/htmlFoto.jpeg" data-titulo="HTML" data-descricao="Como base de todo código, temos o HTML, formando a base de todo o site. Usamos o HTML como um aprendizado inicial pois ele é prático e fácil quando precisamos codar algo pela primeira vez. Ajudando a obter um maior entendimento de programação sem muita complicação, o HTML é bem-vindo entre novos programadores.">
                <img src="img/htmlI.png" class="iconH">
                <h2>HTML</h2>
            </div>
            <div class="topico" id="t3" data-imagem="img/cssFoto.jpeg" data-titulo="CSS" data-descricao="Após o básico de HTML, o CSS é apresentado afim de entendermos como estilizar uma página. Muito usado em front-end, o CSS nos auxilia permitindo a mudança de formas e cores no site de forma livre e autônoma. Possuir o conhecimento básico de CSS é um grande passo para tornar o seu site mais bonito e interativo.">
                <img src="img/cssI.png" class="iconC">
                <h2>CSS</h2>
            </div>
        </div>
    </div>

    <div class="titulos">
        <h2 id="tituloOS">A TRIX:</h2>
    </div>

    <div class="tudoZ">
        <div class="descTZ">
            <div class="fotoZ"></div>
            <div class="descZ">
                <h2>TRIX</h2>
                <div class="descT">
                    <h3>Como ajudante, temos a Trix e, ao longo de nossas lições e níveis, ela estará do seu lado para ter ajudar ao máximo, basta procurá-la e a mesma oferecerá uma explicação breve sobre o resultado em que o exercício espera.</h3>
                    <h4>Ela será útil para que você consiga compreender profundamente os tópicos que a nossa aplicação oferece.</h4>
                </div>
            </div>
        </div>
        <div class="funcoesZ">
            <div class="funcoes">Apresenta Conteúdo</div>
            <div class="funcoes">Oferece Dicas</div>
            <div class="funcoes">Mostra Progresso</div>
        </div>
    </div>

    <script>
        var topicos = document.querySelectorAll('.topico');
        var imagemMaior = document.getElementById('fotoA');
        var descricaoTudo = document.querySelector('.infoT');
        var imagemBorda = document.querySelector('.imgA');
        var tituloTopicos = document.getElementById('tituloTopicos');
        var descTopicos = document.getElementById('descricaoTopicos');

        topicos.forEach(elemento => {
            elemento.addEventListener('mouseenter', ()=>{

                let imagensTopicos = elemento.getAttribute('data-imagem');
                imagemMaior.src = imagensTopicos; 
                imagemMaior.style.opacity = 1;
                imagemBorda.style.boxShadow = "black 10px 10px";

                // descricaoTudo.style.transition = "1s ease";
                descricaoTudo.style.opacity = 1;
            
                let titulos = elemento.getAttribute('data-titulo');
                tituloTopicos.innerHTML = titulos;  
            
                let desc = elemento.getAttribute('data-descricao');
                descTopicos.innerHTML = desc;
            });

            elemento.addEventListener('mouseleave', ()=>{
                descricaoTudo.style.opacity = 0;
                // descricaoTudo.style.transition = "0.4s ease";
                imagemBorda.style.boxShadow = "rgba(0, 0, 0, 0.311) 10px 10px";
            });

        });
    </script>

</body>
</html>