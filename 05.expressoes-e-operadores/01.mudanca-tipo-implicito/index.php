<?php
    $result = 5 / 2;

    if(is_float($result)){
        echo "$result é um float";
    }

    echo "<br/>";

    $result = 2 . 3;
    if(is_string($result)){
        echo "'$result' é uma string";
    }

    echo "<br/>";

    $name = "Leodeymison";
    $sobrenome = "Alcantara";

    echo $name . " " . $sobrenome;

    echo "<br/>";
    
    $result = "5" * 12;

    echo $result;
    echo "<br/>";
    echo gettype($result);
    echo "<br/>";
    if(gettype($result) == "integer"){
        echo "Valor é inteiro!";
    }
?>