<?php
    // As variáveis estão no mesmo endereço de memória, se uma mudar a outra também muda

    $name = "Carlos";

    $name2 = &$name;

    echo "$name and $name2 <br />";

    $name = "Pedro";
    
    echo "$name and $name2 <br />";

    $name2 = "José";
    
    echo "$name and $name2 <br />";
?>