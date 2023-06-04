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
        <h3>Capítulo 1</h3>
    </div>
    <hr class="barra-branca">
    <br>
    <form id="combinacoes" action="resultado1.php" method="get">
        <div class="">
            <center>
                <h3>Primeira missão: escolher o mapa certo</h3>
                <br>
            </center>
            <!-- ITENS -->
            <div class="container col-4">
                <div class="column">
                    <input type="checkbox" name="mapa1" value="op"><a>Deserto do Leste</a> 
                    <p>Um local extremamente seco,<br>antigo lar de criaturas gigantes</p>
                    <center><img src="../src/img/deserto1.png" width="150" alt="Mapa 1" ></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="mapa2" value="op"><a>Colinas do Oeste</a><br>
                    <p>Um ambiente de rochas com<br>uma atmosfera assustadora.</p>
                    <center><img src="../src/img/colinas.png" width="150" alt="Mapa 2" ></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="mapa3" value="op"><a>Floresta do Norte</a><br>
                    <p>Uma floresta fria e quieta,<br>aparentemente normal</p>
                    <center><img src="../src/img/floresta2.png" width="150" alt="Mapa 3" ></center>
                </div>
                <div class="column">
                    <input type="checkbox" name="mapa4" value="op"><a>Batalha do Sul</a><br>
                    <p>Um Cemitério com a carcaça de<br>diversas criaturas envelhecidas.</p>
                    <center><img src="../src/img/bicho.png" width="150" alt="Mapa 4" ></center>
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
        if (selectionados == 1) {
            formulario.submit(); 
        } else {
            if (selectionados < 1){
                alert("Erro: você selecionou MENOS de 1 elementos!");
            } else if (selectionados > 1) {
                alert("Erro: você selecionou MAIS de 1 elementos!");
            }
        }
    };
</script>
</body>
</html>