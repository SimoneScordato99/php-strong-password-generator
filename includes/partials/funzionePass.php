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


};
