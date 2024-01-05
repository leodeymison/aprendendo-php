<?php
    $value1 = 10;
    $value2 = -5;
    $value3 = "Leodeymion";

    echo is_int($value1) ? "1° valor é um número" : "1° valor não é um número";
    echo "<br /><br />";

    echo is_int($value2) ? "2° valor é um número" : "2° valor não é um número";
    echo "<br /><br />";
    
    if(is_int($value3)){
        echo "3° valor é um número";
    } else {
        echo "3° valor não é um número";
    }
?>