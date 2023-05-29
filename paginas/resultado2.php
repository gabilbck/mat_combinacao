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

if (($aliado4 == 'op') && ($anel4 == 'op')){ // Variáveis que têm o value="cer"
    $msgVenceu = 'Parabéns, Cavaleiro!<br><br>
    <br>O reino de Inforny fora tomado pelos dragões e você, como um dos importantes cavaleiros do reino, enfrentou-os de forma sábia com êxito, mesmo não encontrando tempo suficiente para se preparar, por isso, além de parabenizá-lo pela sua sabedoria de escolhas, o reino o parabeniza pelo bom desempenho durante a guerra.   
    <br><br><br>Ass. Reino de Inforny.';
} else{
    $msgPerdeu = 'Lamentamos ao Cavaleiro...<br><br> 
    <br>O reino de Inforny lamenta, através desta carta, à morte do cavaleiro. Por conta de suas más escolhas, não conseguiu resistir à guerra.
    <br><br>Alguns dos itens encontrados que, possivelmente, o atrapalharam durante a guerra:<br><br>';
    $msgPerdeu1 = '<br>Nossas condolências à família e amigos... 
    <br><br><br><br>Ass. Reino de Inforny. ';
    //Erros
    $burriceAnel = ($anel1 && $anel2) || ($anel1 && $anel3) || ($anel1 && $anel4) || ($anel2 && $anel3) || ($anel2 && $anel4) || ($anel3 && $anel4);
    $burriceAliado = ($aliado1 && $aliado2) || ($aliado1 && $aliado3) || ($aliado1 && $aliado4) || ($aliado2 && $aliado3) || ($aliado2 && $aliado4) || ($aliado3 && $aliado4);
    if($burriceAnel){
        $burriceAnel = 'Por que você escolheu dois anéis?<br>';
    } else{
        $burriceAnel = "";
    }
    if($burriceAliado){
        $burriceAliado = 'Por que você escolheu dois aliados?<br>';
    } else{
        $burriceAliado = '';
    }
    $aliadoErr = $aliado1 || $aliado2 || $aliado3; // Escolhas erradas do tipo específico
    if($aliadoErr){ 
        $aliadoErr = '♞ O cavaleiro escolheu um(s) aliado(s) ruim(s).<br>';
    } else{
        $aliadoErr = '';
    }
    $anelErr = $anel1 || $anel2 || $anel3; // Escolhas erradas do tipo específico
    if($anelErr){ 
        $anelErr = '♞ O cavaleiro escolheu um(s) aliado(s) ruim(s).<br>';
    } else{
        $anelErr = '';
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
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/css/style.css" rel="stylesheet">
    <title>Resultado 2</title>
</head>
<body>
    <?php // Se o usuário venceu
    if (isset($msgVenceu)){
        echo $msgVenceu;
        echo '<button><a href="capitulo3.php">Ir para o próximo capítulo</a></button>';
    } else{ // Se o usuário perdeu
        echo $msgPerdeu;
        echo $aliadoErr;
        echo $anelErr;
        echo $burriceAliado;
        echo $burriceAnel;
        echo $msgPerdeu1;
        echo '<button><a href="home.php">Voltar ao início</a></button>';
    }
    ?>
</body>
</html>