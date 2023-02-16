<?php
    $nome = "Pedro Gabriel";
    $sobrenome = "Martins de Carvalho";
    const PAIS = "Brasil";

    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
    var_dump($nome); //Despejo de variável, traz informações sobre a variável como tipo primitivo, valores e tamanhos

    $num = 3e2; // 3 x 10(2)
    var_dump($num); // O valor será float mesmo o resultado sendo inteiro (300)

    //Coerção
    $num = (integer) 3e2; // O valor da variável será forçado a ser inteiro
    var_dump($num);

    $num = (int) "950";
    var_dump($num);

    $num = (float) 10;
    var_dump($num)
?>