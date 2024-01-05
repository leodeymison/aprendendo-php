<?php
    echo soma(12.10, 23.10), "<br />";   // 35.10   ? Converte automaticamente para integer
    echo soma("12", 23.10), "<br />";    // 35.10   ? Converte automaticamente para integer
    echo soma("12.20", 23.10), "<br />"; // 35.10   ? Converte automaticamente para integer

    // Independete se a função esteja antes ou depois, ele executa
    function soma(int $v1, float $v2){
        return $v1 + $v2;
    }
?>