<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/style1.css">
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
            <div>
                <p>Primeira missão: escolher o mapa certo</p>
            </div>
            <!-- ITENS -->
            <div class="conteudo"> 
                <div class="item">
                    <p>Mapa 1</p> 
                    <input type="checkbox" name="mapa1" value="op">
                    <img src="../src/img/deserto.png" width="150" alt="Mapa 1">
                </div>
                <div class="item">
                    <p>Mapa 2</p>
                    <input type="checkbox" name="mapa2" value="op">
                    <img src="../src/img/colinas.png" width="150" alt="Mapa 2">
                </div>
                <div class="item">
                    <p>Mapa 3</p>
                    <input type="checkbox" name="mapa3" value="op">
                    <img src="../src/img/floresta.png" width="150" alt="Mapa 3">
                </div>
            </div>
            <button style="color: #8b5742;" type="button" onclick="verificar()">Começar a viagem!</button>
        </div>
    </form>
    <br>
    <hr class="barra-branca">
    <div class="footer">
        <h4>Informações do projeto</h4>
        <a href="#">Repositório</a>
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