<?php

// Pega varíeveis do formulário
$armadura1 = filter_input(INPUT_GET, 'armadura1');
$armadura2 = filter_input(INPUT_GET, 'armadura2');
$armadura3 = filter_input(INPUT_GET, 'armadura3');
$armadura4 = filter_input(INPUT_GET, 'armadura4');
$armadura5 = filter_input(INPUT_GET, 'armadura5');
$espada1 = filter_input(INPUT_GET, 'espada1');
$espada2 = filter_input(INPUT_GET, 'espada2');
$espada3 = filter_input(INPUT_GET, 'espada3');
$espada4 = filter_input(INPUT_GET, 'espada4');
$espada5 = filter_input(INPUT_GET, 'espada5');
$escudo1 = filter_input(INPUT_GET, 'escudo1');
$escudo2 = filter_input(INPUT_GET, 'escudo2');
$escudo3 = filter_input(INPUT_GET, 'escudo3');
$escudo4 = filter_input(INPUT_GET, 'escudo4');
$escudo5 = filter_input(INPUT_GET, 'escudo5');
$pocao1 = filter_input(INPUT_GET, 'pocao1');
$pocao2 = filter_input(INPUT_GET, 'pocao2');
$pocao3 = filter_input(INPUT_GET, 'pocao3');
$pocao4 = filter_input(INPUT_GET, 'pocao4');
$pocao5 = filter_input(INPUT_GET, 'pocao5');
$comida1 = filter_input(INPUT_GET, 'comida1');
$comida2 = filter_input(INPUT_GET, 'comida2');
$comida3 = filter_input(INPUT_GET, 'comida3');
$comida4 = filter_input(INPUT_GET, 'comida4');
$comida5 = filter_input(INPUT_GET, 'comida5');

if (($armadura4 == 'op') && ($espada5 == "op") && ($escudo4 == "op") && ($pocao5 == "op") && ($comida2 == "op") && ($comida3 == "op")){ // Variáveis que têm o value="cer"
    $msgVenceu = 'Parabéns, Cavaleiro!<br><br>
    <br>O reino de Inforny fora tomado pelos dragões e você, como um dos importantes cavaleiros do reino, enfrentou-os de forma sábia com êxito, mesmo não encontrando tempo suficiente para se preparar, por isso, além de parabenizá-lo pela sua sabedoria de escolhas, o reino o parabeniza pelo bom desempenho durante a guerra.   
    <br><br><br>Ass. Reino de Inforny.';
} else{
    $msgPerdeu = 'Lamentamos ao Cavaleiro...<br><br> 
    <br>O reino de Inforny lamenta, através desta carta, à morte do cavaleiro. Por conta de suas más escolhas, não conseguiu resistir à guerra.
    <br><br>Alguns dos itens encontrados que, possivelmente, o atrapalharam durante a guerra:<br><br>';
    $armaduraErr; $espadaErr; $escudoErr; $pocaoErr; $comidaErr;
    $msgPerdeu1 = '<br>Nossas condolências à família e amigos... 
    <br><br><br><br>Ass. Reino de Inforny. ';
    //armaduras
    $armaduraErr = $armadura1 || $armadura2 || $armadura3 || $armadura5; // Escolhas erradas do tipo específico
    if($armaduraErr){ 
        $armaduraErr = '♞ O cavaleiro escolheu um(s) armadura(s) ruim(s).<br>';
    } else{
        $armaduraErr = '';
    }
    //espadas
    $espadaErr = $espada1 || $espada2 || $espada3 || $espada4; // Escolhas erradas do tipo específico
    if($espadaErr){ 
        $espadaErr = '♞ O cavaleiro escolheu um(s) espada(s) ruim(s).<br>';
    } else{
        $espadaErr = '';
    }
    //escudos
    $escudoErr = $escudo1 || $escudo2 || $escudo3 || $escudo5; // Escolhas erradas do tipo específico
    if($escudoErr){ 
        $escudoErr = '♞ O cavaleiro escolheu um(s) escudo(s) ruim(s).<br>';
    } else{
        $escudoErr = '';
    }
    //Poções
    $pocaoErr = $pocao1 || $pocao2 || $pocao3 || $pocao4; // Escolhas erradas do tipo específico
    if($pocaoErr){ 
        $pocaoErr = '♞ O cavaleiro escolheu um(s) pocao(s) ruim(s).<br>';
    } else{
        $pocaoErr = '';
    }
    //Comidas
    $comidaErr = $comida1 || $comida4 || $comida5; // Escolhas erradas do tipo específico
    if($comidaErr){ 
        $comidaErr = '♞ O cavaleiro escolheu um(s) comida(s) ruim(s).<br>';
    } else{
        $comidaErr = '';
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
    <title>Resultado 3</title>
</head>
<body>
    <?php // Se o usuário venceu
    if (isset($msgVenceu)){
        echo $msgVenceu;
        echo '<button><a href="home.php">VOLTAR AO INCÍCIO</a></button>';
    } else{ // Se o usuário perdeu
        echo $msgPerdeu;
        echo $armaduraErr; 
        echo $espadaErr; 
        echo $escudoErr; 
        echo $pocaoErr; 
        echo $comidaErr;
        echo $msgPerdeu1;
        echo '<button><a href="capitulo1.php">Voltar ao início</a></button>';
    }
    ?>
</body>
</html>