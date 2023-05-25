<?php

// Pega varíeveis do formulário
$mapa1 = filter_input(INPUT_GET, 'mapa1');
$mapa2 = filter_input(INPUT_GET, 'mapa2');
$mapa3 = filter_input(INPUT_GET, 'mapa3');

if ($mapa3 == 'op'){ // Variáveis que têm o value="cer"
    $msgVenceu = 'Parabéns, Cavaleiro!<br><br>
    <br>O reino de Inforny fora tomado pelos dragões e você, como um dos importantes cavaleiros do reino, enfrentou-os de forma sábia com êxito, mesmo não encontrando tempo suficiente para se preparar, por isso, além de parabenizá-lo pela sua sabedoria de escolhas, o reino o parabeniza pelo bom desempenho durante a guerra.   
    <br><br><br>Ass. Reino de Inforny.';
} else{
    $msgPerdeu = 'Lamentamos ao Cavaleiro...<br><br> 
    <br>O reino de Inforny lamenta, através desta carta, à morte do cavaleiro. Por conta de suas más escolhas, não conseguiu resistir à guerra.
    <br><br>Alguns dos itens encontrados que, possivelmente, o atrapalharam durante a guerra:<br><br>';
    $msgPerdeu1 = '<br>Nossas condolências à família e amigos... 
    <br><br><br><br>Ass. Reino de Inforny. ';
    //Mapas
    $mapaErr = $mapa1 || $mapa2; // Escolhas erradas do tipo específico
    if($mapaErr){ 
        $mapaErr = '♞ O cavaleiro escolheu um(s) mapa(s) ruim(s).<br>';
    } else{
        $mapaErr = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado 1</title>
</head>
<body>
    <?php // Se o usuário venceu
    if (isset($msgVenceu)){
        echo $msgVenceu;
        echo '<button><a href="capitulo2.php">Ir para o próximo capítulo</a></button>';
    } else{ // Se o usuário perdeu
        echo $msgPerdeu;
        echo $mapaErr;
        echo $msgPerdeu1;
        echo '<button><a href="capitulo1.php">Voltar ao início</a></button>';
    }
    ?>
</body>
</html>