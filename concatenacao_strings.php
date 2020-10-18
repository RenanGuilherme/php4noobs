<?php
// Concatenação de Strings

    $nome = 'Vilma Morsheingfjsdkcx' . ', de qual cidade?';
    
    echo $nome;

    // Concatenação de forma abreviada .=
    echo PHP_EOL;
    $nome = 'Vilma Morsheingfjsdkcx';
    $nome .= ', de qua cidade?';
    
    echo $nome;

    // Concatenação de variáveis
    $nome = 'Vilma Morsheingfjsdkcx';
    $cidade = ' São Domingos';
    
    echo PHP_EOL;
    echo $nome . $cidade;
?>
