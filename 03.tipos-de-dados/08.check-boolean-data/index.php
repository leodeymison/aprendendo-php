<?php
    $exist = false;

    echo is_bool($exist) ? "Existe" : "Não existe";
    echo is_bool(0) ? "É boolean" : "Não é boolean";
    echo is_bool(0.0) ? "É boolean" : "Não é boolean";
    echo "<br /><br />";
    echo (0 == false) ? "0 é falso!" : "0 não é falso!", "<br />";
    echo (0.0 == false) ? "0.0 é falso!" : "0.0 não é falso!", "<br />";
    echo ("0" == false) ? "'0' é falso!" : "'0' não é falso!", "<br />";
    echo ([] == false) ? "[] é falso!" : "[] não é falso!", "<br />";
    echo (null == false) ? "null é falso!" : "null não é falso!", "<br />";
?>