<?php

    $alimentos = ["batata", "maçã", "pera", "feijão", "arroz"];

    var_dump($alimentos);

    echo "<br />";

    
    $alimentos = removeElementForName($alimentos, 'pera');
    $alimentos = removeElementForName($alimentos, 'feijão');


    var_dump($alimentos);

    function removeElementForName($itens, $name){
        $index = array_search($name, $itens);
        array_splice($itens, $index, 1); // Retorna o elemento que tirou e tira do array original
        return $itens;
    }
?>