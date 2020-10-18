<?php
// Estruturas de controles

    // Estruturas de controle remetem a 
    // decisões de um trecho de código
    // que deverá ser executado baseado
    // em um teste lógico.

    // Condição IF / ELSE

    // Exemplo 1

    $idade = 19;

    if ($idade >= 18) {
        echo "Você é maior de idade";
    } else {
        echo "Você é menor de idade";
    }
    echo PHP_EOL;
    
    // Exemplo 2

    $grupo = "SMD";

    if ($grupo == "He4rtDevs") {
        echo "Sim, este é o melhor grupo de devs do BR";
    } else {
        echo "Só tem sequelado nesse grupo hehexd";
    }
    echo PHP_EOL;

    // Exemplo 3

    $estouLogado = true;

    if ($estouLogado){
        echo "Continue jogando lolzinho";
    } else {
        echo "Redirecionando para o login";
    }
    echo PHP_EOL;

    // Exemplo 4

    $usuario = "renanzinho123";
    $senha = "p4ssw0rd";

    if ($usuario == "renanzinho123" && $senha == "p4ssw0rd"){
        echo "Login efetuado com sucesso";
    } else {
        echo "Errouuu";
    }
    echo PHP_EOL;

    // Condição IF / ELSE IF / ELSE

    $userRenan = "renanzinho123";
    $passRenan = "p4ssw0rd";

    $userUser = "user";
    $passUser = "pass";

    if ($userRenan == "renanzinho123" && $passRenan == "p4ssw0rd"){
        echo "Login efetuado";
    } else if ($userUser == "user" && $passUser == "pass") {
        echo "Login efetuado, usuário convidado";
    } else {
        echo "Errouuu";
    }
    echo PHP_EOL;

    // Condição switch-case

    // A declaração tem como base uma condição e N casos de
    // uso dependendo do valor inserido na condição, e é
    // finalizado após a palavra reservada break ser
    // acionada, que pode ser interpretado como o fim de um
    // bloco de código...

    // Caso não haja nenhuma opção elegível dentro dos casos
    // citados, você pode usar a opção default para retornar
    // um valor padrão.

    // Exemplo 1
    
    $comando = "!he4rt";

    switch($comando){
        case "!site":
            echo "Link: https:/heartdeves.com \n";
            echo "Esse é o site oficial";
        break;
        case "!he4rt":
            echo "Entre no discord https://discord.com/he4rt";
        break;
        case "!comandos":
            echo "Segue a lista de comandos: \n";
            echo "!he4rt    !site";
        break;
        default:
            echo "Comando inválido";
        break;
    }
    echo PHP_EOL;

    // Condição ternário
    
    // Ajuda na escrita de condições if/else diminuindo para
    // uma única linha. Ou seja, será usado quando tem uma
    // comparação fácil e um retorno simples.

    // Alguns símbolos são usados para substituir o uso dos
    // parênteses e chaves, sendo eles ? e :.

    // ? - sinaliza para o interpretador que tudo que for
    // escrito anteriormente será a condição a ser executada.

    // Após o sinal ? e entre o sinal de : é o que irá
    // retornar se a condiap for verdadeira e após o sinal
    // de : é o que irá retornar caso a condição for falsa.

    // Modelos de ternário
    // condition ? case true : case false;

    // Exemplo 1

    $nickname = 'renanzinho123';

    $who = $nickname == "gragol4ndia" ? "é o grongos" : "pai ta bem não";

    echo $who . PHP_EOL;

    // Exemplo 2

    $modoTeste = true;

    return $modoTeste  ? "MODO DESENVOLVIMENTO ATIVADO" : "MODO DESENVOLVIMENTO DESATIVADO";

    // Condição coalescência nula

    // Fornece uma forma conveniente de retornar o valor
    // antes do sinal de ??.

    $descricaoPorCodigo = array(
        1 => 'Este usuário já existe.',
        2 => 'Senha incorreta.',
        3 => 'Este usuário está bloqueado.',
    );
    
    // Exemplo utilizando operador ternário - Retorna 'Alguma coisa deu errado', pois a chave 5 não existe
    return isset($descricaoPorCodigo[5]) ? $descricaoPorCodigo[5] : 'Alguma coisa deu errado.';
    
    // A lógica acima pode ser simplicada utilizando o operador de coalescência nula
    return $descricaoPorCodigo[5] ?? 'Alguma coisa deu errado.';
?>
