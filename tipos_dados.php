<?php
    echo "\nExemplos de Booleanos: \n";
    var_dump(True);
    var_dump(false);

    echo "\nExemplos de números inteiros: \n";
    var_dump(1234); // decimal
    var_dump(-123); // negativo
    var_dump(0123); // octal (83 em decimal)
    var_dump(0x1A); // hexadecimal (26 em decimal)
    var_dump(0b11111111) // binário (255 decimal)
 ?>

 <?php
    echo "Declanrando variáveis: \n";
    $a = 1.66; // Declarando variável.
    var_dump($a);
    echo "\n\n";

    // Arrays (vetores)
    echo "Arrays: \n";
    $vetor = [1,32,"sax",65,2352];
    var_dump($vetor);
    var_dump($vetor[3]);

    // Array associativo, associa-se uma chave a um valor
    echo "\nArrays associativos: \n";
    $eu = [
    "nome" => "renan",
    "idade" => 19,
    ];
    var_dump($eu);
    var_dump($eu["nome"]);
    var_dump($eu["idade"]);
    echo "Meu nome é " . $eu["nome"] . " e eu tenho " . $eu["idade"] . " anos";
?>
