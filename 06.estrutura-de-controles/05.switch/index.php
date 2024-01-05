<?php
    $age = 18;

    switch ($age) {
        case 0:
            echo "Não nasceu";
            break;
        case $age < 1:
            echo "Bebê";
            break;
        case $age >= 1 && $age < 10:
            echo "Criança";
            break;
        case $age >= 10 && $age < 16:
            echo "Adolescente";
            break;
        case $age >= 16 && $age < 26:
            echo "jovem";
            break;
        case $age >= 26 && $age < 60:
            echo "Adulto";
            break;
        case $age >= 60:
            echo "Velho";
            break;
        default:
            echo "Nehuma idade encontrada";
            break;
    }
?>