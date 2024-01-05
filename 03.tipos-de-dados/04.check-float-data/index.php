<?php
    $value1 = 122.23;
    $value2 = 12.0;
    $value3 = 10;
    $value4 = "tetst";

    echo is_float($value1) ? "1° número $value1 é um float" : "1° número $value1 não é um float", "<br />";
    echo is_float($value2) ? "2° número $value2 é um float" : "2° número $value2 não é um float", "<br />";
    echo is_float($value3) ? "3° número $value3 é um float" : "3° número $value3 não é um float", "<br />";
    echo is_float($value4) ? "4° número $value4 é um float" : "4° número $value4 não é um float", "<br />";
?>