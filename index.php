<?php

function randomPass(){
    $lunghezza = $_GET['lunghezza'];
    $lettere = $_GET['lettere'];
    $numeri = $_GET['numeri'];
    $simboli = $_GET['simboli']; 

    $caratteriDisponibili = '';
    if( $lettere == true){
        $mario = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $caratteriDisponibili .= $mario;
    };
    if ( $numeri == true){
        $gabriele = '1234567890';
        $caratteriDisponibili .= $gabriele;
    };
    if ( $simboli == true){
        $milazzo = "'!#$%&'*+,-./:;<=>?@\^_`{|}~";
        $caratteriDisponibili .= $milazzo;
    };
    
    $password = '';

    for ($i=0; $i < $lunghezza ; $i++) {         
        $indiceRandom = rand(0, strlen($caratteriDisponibili));
        $returnCaratter = $caratteriDisponibili[$indiceRandom];
        $password .= $returnCaratter;
    };
    return $password;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <form action="" method="GET">
        <label for="">lunghezza password</label>
        <input type="number" name="lunghezza" id="">
        <input type="checkbox" name="lettere" id="">
        <input type="checkbox" name="numeri" id="">
        <input type="checkbox" name="simboli" id="">
        <button type="submit">GENERA</button>
    </form>

    <?php
    echo randomPass();
    ?>
</body>
</html>