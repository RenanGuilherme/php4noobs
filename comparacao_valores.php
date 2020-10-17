<?php
// Comparação de valores

    // Igualdade ==
    // Compara 2 valores e retorna true, se forem iguais
    // e false se forem diferentes.

    echo (0 == false) . PHP_EOL;    // true
    echo ('123' == 123). PHP_EOL;   // true
    echo ('um' == 1) . PHP_EOL;     // false
    echo (123.0 == 123) . PHP_EOL;  // true

    // Diferença =!
    // Compara 2 valores e retorna false se forem iguais
    // e true se forem diferentes.
    // os valores em string são convertidos, por isso o
    // 2º resultado é true.

    echo (0 != false) . PHP_EOL;    // false
    echo ('123' != 123). PHP_EOL;   // false
    echo ('um' != 1) . PHP_EOL;     // true
    echo (123.0 != 123) . PHP_EOL;  // false

    // Idêntico ===
    // Testa se dois valores são iguais e do mesmo tipo.
    // Aqui os valores não são convertidos. por isso o
    // segundo resultado é false.

    echo (0 === false) . PHP_EOL; // false
    echo ('555' === 555) . PHP_EOL; // false
    echo ('zero' === 0) . PHP_EOL; // false
    echo (123.0 === 123) . PHP_EOL; // false
    echo (0 === ($num = 0)) . PHP_EOL; // true

    // Não idêntico !==
    // Verifica se dois valores são do tem difererentes
    // valores e não são do mesmo tipo.

    echo (0 !== false) . PHP_EOL; // true
    echo ('555' !== 555) . PHP_EOL; // true
    echo ('zero' !== 0) . PHP_EOL; // true
    echo (123.0 !== 123) . PHP_EOL; // true
    echo (0 !== ($num = 0)) . PHP_EOL; // false

    /**Maior e menor que 
     * < menor que;
     * > maior que;
     * <= menor ou igual a;
     * >= maior ou igual a; 
     * */ 

    echo (2 < 3) . PHP_EOL; //true
    echo (2 > 3) . PHP_EOL; //false
    echo (2 <= 3) . PHP_EOL; //true
    echo (2 >= 3) . PHP_EOL; //false
?>