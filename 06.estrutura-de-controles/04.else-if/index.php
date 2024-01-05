<?php
    $age = 60;
    if($age < 1){
        echo "É criança";
    } else if ($age >= 1 && $age < 10){
        echo "Criança";
    } else if ($age >= 10 && $age < 16) {
        echo "Adolescente";
    } else if ($age >= 16 && $age < 25) {
        echo "Jovem";
    } else if ($age >= 25 && $age < 60) {
        echo "Adulto";
    } else if ($age >= 60) {
        echo "Velho";
    } else {
        echo "Idade indefinida!";
    }
?>