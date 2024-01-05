<?php
    // strpos  = Encontra a primeira string que encontrar
    // strrpos = Encontra a última string que encontrar
    // strstr  = Encontra o resto da string

    $text = "Estou a procura de tal coisa para fazer tal coisa.";

    $encontrado = strpos($text, "tal"); // > return index
    $last = strrpos($text, "tal"); // > return index
    $resto = strstr($text, "tal");

    echo $encontrado;
    echo "<br />";
    echo $last;
    echo "<br />";
    echo $resto;
?>