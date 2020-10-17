<?php
//Operadores de arrays

    // União +
    $array1 = [0 => 'PHPBA',
    1 => 'PHPSP',
    2 => 'PHPSE'];
    $array2 = [3 => 'he4rtdevs'];

    print_r($array1 + $array2);

    // Igualdade ==
    $array1 = [0 => 1];
    $array2 = [0 => 1];
    
    echo PHP_EOL;
    echo $array1 == $array2;

    // Retorna 1, significa que os valores
    // dos arrays são iguais.

    //Não idêntico !==

    $array1 = [0 => 1];
    $array2 = [0 => '1'];

    echo $array1 !== $array2;
?>
