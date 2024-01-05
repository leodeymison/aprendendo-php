<?php
    // ? O escopo static mantem os valores anteriores da função

    function primary(){
        static $value = 0;
        $value++;
        echo $value;
        echo "<br />";
    }

    primary();
    primary();
    primary();
?>