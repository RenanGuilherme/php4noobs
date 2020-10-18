<?php
// Estruturas de controle: Loops

    // Repetição FOR

    // Primeiro parâmetro: índice inicial no qual você
    // quer trabalhar.
    // Segundo parâmetro: condição para que o laço seja
    // finalizado.
    // Terceiro parâmetro: incrementador/decrementador.

    // Exemplo 1

    $contador = 10;

    echo "Script para contar até " . $contador . PHP_EOL;
    for($i = 1; $i <= $contador; $i++) {
        echo $i . "...";
    }
    echo PHP_EOL . "Script finalizado!";
    echo PHP_EOL;

    // Exemplo 2

    $multiplicador = 7;

    echo "Tabuada do " . $multiplicador . PHP_EOL;
    for($i = 1; $i <= 10; $i++){
        echo "$multiplicador x $i = " . ($multiplicador * $i) . PHP_EOL;
    }
    echo "Fim!" . PHP_EOL;

    // Condição WHILE

    // Leva um condição booleana no começo que é executada
    // eternamente enquanto o valor passado for verdadeiro.

    // Ele só tem uma condição a ser lida e vai ficar em
    // execução até que essa condição seja declarada como
    // falsa.

    // Exemplo 1

    $continuaLoop = true;
    $i = 1;
    echo "Script para contar até 10" . PHP_EOL;
    while($continuaLoop){
        echo $i . "...";
        if ($i == 10){
            $continuaLoop = false;
        }
        $i++;
    }
    echo PHP_EOL;

    // É possivel usar while($i++ < $contador).

    // Condição FOREACH

    // É usado para iterar arrays ou objetos. O foreach
    // funciona passando por cada elemento do array e
    // atribuindo à ele variáveis do escopo da estrutura,
    // para uma melhor manipulação dos elementos.

    // O foreach acontece enquanto houver iteráveis dentro
    // do array e pode parar com a condição break, caso não,
    // ele continua até o final do array.

    // Exemplo 1

    $names = ["Mylon", "Kami", "brtt", "sirT", "dioud"];
    // Iteração sem indíce.
    foreach($names as $name){
        echo $name . " ";
    }
    echo PHP_EOL;

    // Iteração com indíce
    foreach($names as $key => $name){
        echo $key . "." . $name , " ";
    }