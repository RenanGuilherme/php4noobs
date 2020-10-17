<?php
// Operadores Bitwise (bit a bit)

// Operador AND &

    echo 9 & 7; //      00001001 = 9
                //      00000111 = 7
                //  AND --------
                //      00000001 = 1
    
// Operador OR |
    echo PHP_EOL;
    echo 9 | 7; //      00001001 = 9
                //      00000111 = 7
                //   OR --------
                //      00001111 = 15

// Operador XOR ^

    echo PHP_EOL;
    echo 9 ^ 7; //      00001001 = 9
                //      00000111 = 7
                //   OR --------
                //      00001110 = 14

// Operador NOT ~

    $a = -9;
    $a = ~$a;
            
    echo PHP_EOL;
    echo $a;
                
    // diferente dos outros exemplos aqui representamos o
    // valor com 20 bits
    // -9 em binário é:                 11111111111111110111
    // após a operação o é resultado:   00000000000000001000
    // Retorna: "8" que é o binário     00000000000000001000

// Operador Deslocar à esquerda <<

    $a = 9;
    $b = 7;
    PHP_EOL;
    echo $a << $b;

    // Retorna: "1152" que é o resultado de 9*2*2*2*2*2*2*2

// Operador Deslocar à esquerda <<

    $a = 9;
    $b = 7;
    echo $a >> $b;

    // Retorna: "0" que é o resultado de 9/2/2/2/2/2/2/2
    // Se você fizer a operação acima na calculadora o
    // resultado vai ser igual a 0.0703125
    // o PHP retorna o valor inteiro nesta operação