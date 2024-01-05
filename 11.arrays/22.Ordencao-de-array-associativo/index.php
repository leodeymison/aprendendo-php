<?php
    $peoples = [
        'José' => 50,
        'Angela' => 21,
        'Jofel' => 10,
        'Carla' => 24,
        'Tomé' => 18
    ];
    echo "ORIGINAL: <br />";
    var_dump($peoples);

    echo "<br /><br />";

    echo "DECRESCENTE: <br />";
    asort($peoples);
    var_dump($peoples);

    echo "<br /><br />";

    echo "CRESCENTE: <br />";
    arsort($peoples);
    var_dump($peoples);
?>