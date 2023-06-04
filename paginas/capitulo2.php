<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap" rel="stylesheet">
    <title>Horizontes Sombrios: O Caminho do Exilado</title>
</head>
<body>
    <div class="header">
        <h1>Horizontes Sombrios: O Caminho do Exilado</h1>
        <h3>Capítulo 2</h3>
    </div>
    <hr class="barra-branca">
    <br>
    <form id="combinacoes" action="resultado2.php" method="get">
        <div class="">
            <center>
                <h3>Segunda missão: escolher o aliado certo</h3>
                <br>
            </center>
            <!-- ITENS -->
            <div class="container col-4">
                <div class="column">
                    <input type="checkbox" name="aliado1" value="op"><a>Cachorro Caramelo</a> 
                    <p>Ótimo dançarino e companheiro<br>muito fiel.</p>
                    <center><img src="../src/img/cachorro-caramelo.png" width="150" alt="Aliado 1" ></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="aliado2" value="op"><a>Faustão</a><br>
                    <p>Ira lhe apresentar o mundo, porém,<br>ele aparece somente nos domingos.</p>
                    <center><img src="../src/img/faustao.png" width="150" alt="Aliado 2" ></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="aliado3" value="op"><a>R2D2</a><br>
                    <p>Ótimo companheiro para<br>longas viagens</p>
                    <center><img src="../src/img/r2d2.png" width="150" alt="Aliado 3" ></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="aliado4" value="op"><a>Yoshi</a><br>
                    <p>Um companheiro que pode até se<br>sacrificar para o sucesso de seus aliados</p>
                    <center><img src="../src/img/yoshi.png" width="150" alt="Aliado 4" ></center>
                </div>
            </div>
            <br>
            <center>
                <h3>Segunda missão: escolher o presente do aliado certo</h3>
                <br>
            </center>
            <div class="container col-4">
                <div class="column">
                    <input type="checkbox" name="anel1" value="op"><a>Anel Comum</a> 
                    <p>Apenas um anel confortável</p>
                    <center><img src="../src/img/anel1.png" width="150" alt="Anel 1" ></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="anel2" value="op"><a>Anel Estiloso</a><br>
                    <p>Todos se sentem mais confiantes<br>quando estão o utilizando</p>
                    <center><img src="../src/img/anel2.png" width="150" alt="Anel 2" ></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="anel3" value="op"><a>Anel Amaldiçoado</a><br>
                    <p>Qualquer toque do usuário<br>será letal</p>
                    <center><img src="../src/img/anel3.png" width="150" alt="Anel 3" ></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="anel4" value="op"><a>Anel Vigoroso</a><br>
                    <p>Nenhum herói na história morreu<br>em aventuras utilizando este anel.</p>
                    <center><img src="../src/img/anel4.png" width="150" alt="Anel 4" ></center>
                </div>
            </div>
            <br>
            <center><button style="color: #8b5742;" type="button" onclick="verificar()">COMEÇAR A VIAGEM!</button></center>
        </div>
    </form>
    <br><br>
    <hr class="barra-branca">
    <div class="footer">
        <h4>Informações do projeto</h4>
                <a style="font-size: 14px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" target="blank" href="https://github.com/gadulb/joguinho">GitHub</a>

    </div>

<script>
    let verificar = () => {
        const selectionados = document.querySelectorAll('input[type="checkbox"]:checked').length;
        console.log(selectionados); 
        const formulario = document.getElementById("combinacoes");
        if (selectionados == 2) {
            formulario.submit(); 
        } else {
            if (selectionados < 2){
                alert("Erro: você selecionou MENOS de 2 elementos!");
            } else if (selectionados > 2) {
                alert("Erro: você selecionou MAIS de 2 elementos!");
            }
        }
    };
</script>
</body>
</html>