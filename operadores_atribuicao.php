<?php
// Operadores de atribuição

/** Operador básico de atribuição no php
 * é o =, não pense nele como "igual a",
 * mas sim como "recebe o valor de".
 */
    $resultado = 10;
    echo $resultado . PHP_EOL;  // 10

// Formas abreviadas de atribuição

    // Soma

    $resultado += 20;
    echo $resultado . PHP_EOL;  // 10 + 20 = 30

    // Sub
    
    $resultado -= 5; 
    echo $resultado . PHP_EOL;  // 30 - 5 = 25

    // Multp

    $resultado *= 2;
    echo $resultado . PHP_EOL;  // 25 * 2 = 50

    // Div

    $resultado /= 5;
    echo $resultado . PHP_EOL; // 50 / 5 = 10
    
    // Mod 
    
    $resultado %= 2;
    echo $resultado . PHP_EOL; // 10 % 2 = 0

    // Operador de incremento ++

    echo ++$resultado . PHP_EOL; // 0 + 1 = 1

    // Operador de decremento --

    echo --$resultado . PHP_EOL; // 1 - 0 = 0

/** Quando não precisar interpretar variáveis,
* use aspas simples '', isso poupa memoria.
*/
?>