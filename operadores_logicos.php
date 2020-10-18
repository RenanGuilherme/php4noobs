<?php
// Operadores lógicos

    // Os simbolos &&, || e ^ estão vem primeiro na ordem
    // de precedência do que as palavras reservadas and, or e
    // xor

    // AND &&
    // Retorna true se ambos os operandos forem verdadeiros.

    $a = true;
    $b = true;

    var_dump($a && $b); // Retorna true

    // OR ||
    // Retorna true se ao menos um dos operandos for
    // verdadeiros.

    $a = false;
    $b = true;

    var_dump($a || $b); // Retorna true

    // XOR ^
    // Retorna true se apenas um dos operandos for
    // verdadeiro.

    $a = false;
    $b = false;
    
    var_dump($a ^ $b); // Retorna false / int(0)

    // NOT !
    // Operador de negação

    $a = true;

    var_dump(!$a); // Retorna false
?>
