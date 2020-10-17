<?php
/**Operadores aritméticos 
 * 3º- Adição +
 * 3º- Subtração -
 * 2º- Multiplicação
 * 2º- Divisão /
 * 2º- Módulo (resto da divisão) %
 * 1º- Exponencial **
 * 
 * Ordem de precedência: 1º **, 2º *|/|%, 3º + | -
*/
    // Adição
    $a = 10;
    $b = 5;
    $c = 5;
    $soma = $a + $b;
    echo "$a + $b = " . $soma . PHP_EOL;    // 15
    echo $a + $b . PHP_EOL;  // 10 + 5

    // Subtração
    $sub = $a - $c;
    echo "$a - $b = $sub" . PHP_EOL;  // 5

    // Multiplicação
    $mult = $b * $c;
    echo "$b * $c = " . $mult . PHP_EOL;           // 25
    echo "$a * ? = " . $a * ($d = 5) . PHP_EOL;   // 50

    // Divisão
    $div = $a / $b;
    echo "$a / $b = " . $div . PHP_EOL;        // 2

    // Modulo
    $resto = $a % $b;     //0
    echo "O resto de $a / $b = " . $resto . PHP_EOL;

    // Power
    echo "$a ** $b = " . $exponencial = $a ** $b . PHP_EOL;

    // *(-1)
    $x = 2;
    $y = 3;
    $z = -$x;
    $w = -$y;
    
    echo "$x * (-1) = $z e $y * (-1) = $w" . PHP_EOL;


?>