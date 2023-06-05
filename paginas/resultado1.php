<?php
/**
 * Página de resultado do capítulo 1
 * @autor: Gabrieli Eduarda Lembeck
 */

// Pega varíeveis do formulário
$mapa1 = filter_input(INPUT_GET, 'mapa1');
$mapa2 = filter_input(INPUT_GET, 'mapa2');
$mapa3 = filter_input(INPUT_GET, 'mapa3');
$mapa4 = filter_input(INPUT_GET, 'mapa4');

if ($mapa3 == 'op'){ // Variáveis que têm o value="cer"
    $msgVenceu = '
    <a class="texto-resultado">
    Parabéns, Cavaleiro!<br>
    <br>O reino de Inforny fora tomado pelos dragões e você, como um dos importantes cavaleiros do reino, enfrentou-os de forma sábia com êxito, mesmo não encontrando tempo suficiente para se preparar, por isso, além de parabenizá-lo pela sua sabedoria de escolhas, o reino o parabeniza pelo bom desempenho durante a guerra.   
    <br><br>Ass. Reino de Inforny.</a>';
} else{
    $msgPerdeu = '
    <a class="texto-resultado">
    Lamentamos ao Cavaleiro...<br>
    <br>O reino de Inforny lamenta, através desta carta, à morte do cavaleiro. Por conta de suas más escolhas, não conseguiu resistir à guerra.
    Alguns dos itens encontrados que, possivelmente, o atrapalharam durante a guerra:<br><br>';
    $msgPerdeu1 = '<br>Nossas condolências à família e amigos... 
    <br><br>Ass. Reino de Inforny.</a>';
    //Mapas
    $mapaErr = $mapa1 || $mapa2 || $mapa4; // Escolhas erradas do tipo específico
    if($mapaErr){ 
        $mapaErr = '♞ O cavaleiro escolheu um(s) mapa(s) ruim(s).<br>';
    } else{
        $mapaErr = '';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap" rel="stylesheet">
    <title>Resultado 1</title>
</head>
<body>
    <div class="resultado">
        <div class="header">
            <h1 style="font-family: 'Patrick Hand SC', cursive;">Horizontes Sombrios: O Caminho do Exilado</h1>
        </div>
        <hr class="barra-branca">
        <br>
        <?php // Se o usuário venceu
        if (isset($msgVenceu)){
            echo '<div class="texto-resultado">';
            echo '<div class="resposta"';
            echo $msgVenceu;
            echo '</div>';
            echo '<br><center><button><a href="capitulo2.php">PRÓXIMO CAPÍTULO</a></button></center>';
            echo '</div>';
        } else{ // Se o usuário perdeu
            echo '<div class="texto-resultado">';
            echo '<div class="resposta"';
            echo $msgPerdeu;
            echo $mapaErr;
            echo $msgPerdeu1;
            echo '</div>';
            echo '<br><center><button><a href="capitulo1.php">VOLTAR AO INÍCIO</a></button></center>';
            echo '</div>';
        }
        ?>
        <br><br>
        <hr class="barra-branca">
        <div class="footer">
            <h4>Informações do projeto</h4>
            <a style="font-size: 14px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" target="blank" href="https://github.com/gadulb/joguinho">GitHub</a>
        </div>
    </div>
</body>