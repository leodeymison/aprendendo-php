<?php
    $arr = [23, 24, 1, 100, 455, 900, 2, 4];

    sort($arr);

    echo "Crescente: <br />";
    var_dump($arr);
    echo "<br /><br />";

    rsort($arr);

    echo "Decrescente: <br />";
    var_dump($arr);
?>