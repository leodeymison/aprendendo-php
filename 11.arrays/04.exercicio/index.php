<?php
    define("value_max", 30);
    define("value_base", 6);
    $my_list = range(10, 45);

    foreach($my_list as $item){
        $soma = $item + value_base;

        if($soma > value_max) {
            echo "O valor $soma é muito grande";
        } else {
            echo "Valor final: $soma";
        }
        echo "<br />";
    }
?>