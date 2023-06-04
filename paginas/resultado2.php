<?php
// Pega varíeveis do formulário
$aliado1 = filter_input(INPUT_GET, 'aliado1');
$aliado2 = filter_input(INPUT_GET, 'aliado2');
$aliado3 = filter_input(INPUT_GET, 'aliado3');
$aliado4 = filter_input(INPUT_GET, 'aliado4');
$anel1 = filter_input(INPUT_GET, 'anel1');
$anel2 = filter_input(INPUT_GET, 'anel2');
$anel3 = filter_input(INPUT_GET, 'anel3');
$anel4 = filter_input(INPUT_GET, 'anel4');

$anelErr = ($anel1 || $anel2 || $anel3 == "op");
$aliadoErr = ($aliado1 || $aliado2 || $aliado3 == "op");

$burriceAnel = ($anel1 && $anel2) || ($anel1 && $anel3) || ($anel1 && $anel4) || ($anel2 && $anel3) || ($anel2 && $anel4) || ($anel3 && $anel4);
$burriceAliado = ($aliado1 && $aliado2) || ($aliado1 && $aliado3) || ($aliado1 && $aliado4) || ($aliado2 && $aliado3) || ($aliado2 && $aliado4) || ($aliado3 && $aliado4);

if (($aliado4 == 'op') && ($anel4 == 'op')){ // Variáveis que têm o value="cer"
    $msgVenceu = '
    <a class="texto-resultado">Parabéns, Cavaleiro!<br>
    <br>O reino de Inforny fora tomado pelos dragões e você, como um dos importantes cavaleiros do reino, enfrentou-os de forma sábia com êxito, mesmo não encontrando tempo suficiente para se preparar, por isso, além de parabenizá-lo pela sua sabedoria de escolhas, o reino o parabeniza pelo bom desempenho durante a guerra.   
    <br><br>Ass. Reino de Inforny.</a>';
} else{
    $msgPerdeu = '
    <a class="texto-resultado">Lamentamos ao Cavaleiro...<br><br>O reino de Inforny lamenta, através desta carta, à morte do cavaleiro. Por conta de suas más escolhas, não conseguiu resistir à guerra.
    Alguns dos itens encontrados que, possivelmente, o atrapalharam durante a guerra:<br><br>';
    $msgPerdeu1 = '<br>Nossas condolências à família e amigos... 
    <br><br>Ass. Reino de Inforny.</a> ';
    if (($aliado1 || $aliado2 || $aliado3 == "op") && ($anel1 || $anel2 || $anel3 == "op")){
        $aliadoErr = ($aliado1 || $aliado2 || $aliado3 == "op"); // Escolhas erradas do tipo específico
        if($aliadoErr){ 
            $aliadoErr = '♞ O cavaleiro escolheu um(s) aliado(s) ruim(s).<br>';
        } else{
            $aliadoErr = '';
        }
        if($anelErr){ 
            $anelErr = '♞ O cavaleiro escolheu um(s) anel(s) ruim(s).<br>';
        } else{
            $anelErr = '';
        }
    } else{
        if($burriceAnel){
            $burriceAnel = '(Por que você escolheu dois anéis?)<br>';
        } else{
            $burriceAnel = "";
        }
        if($burriceAliado){
            $burriceAliado = '(Por que você escolheu dois aliados?)<br>';
        } else{
            $burriceAliado = '';
        }
        if($burriceAnel){
            $aliadoErr = '♞ O cavaleiro não escolheu um aliado.<br>';
        } else{
            $aliadoErr = '';
        }
        if($burriceAliado){
            $anelErr = '♞ O cavaleiro não escolheu um anel.<br>';
        } else{
            $anelErr = '';
        }
    }
    if (($anel4 == 'op') && ($aliado1 || $aliado2 || $aliado3 == 'op')){
        $aliadoErr = '♞ O cavaleiro escolheu um(s) aliado(s) ruim(s).<br>';
    }
    if (($aliado4 == "op") && ($anel1 || $anel2 || $anel3 == "op")){
        $anelErr = '♞ O cavaleiro escolheu um(s) anel(is) ruim(s).<br>';
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
    <title>Resultado 2</title>
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
        echo '<br><center><button><a href="capitulo3.php">PRÓXIMO CAPÍTULO</a></button></center>';
        echo '</div>';
    } else{ // Se o usuário perdeu
        echo '<div class="texto-resultado">';
        echo '<div class="resposta"';
        echo $msgPerdeu;
        echo $aliadoErr;
        echo $anelErr;
        echo $burriceAliado;
        echo $burriceAnel;
        echo $msgPerdeu1;
        echo '</div>';
        echo '<br><center><button><a href="home.php">VOLTAR AO INÍCIO</a></button></center>';
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
</html>