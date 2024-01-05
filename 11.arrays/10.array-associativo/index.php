<?php
    $car = [
        'marca' => "Chevolet",
        'modelo' => "Gol",
        'cor' => "Prata",
        'ano' => 2024
    ];
    var_dump($car);
    echo "<br />";
    echo "keys:<br />";
    var_dump(array_keys($car));
    echo "values:<br />";
    var_dump(array_values($car));


    echo "<br /><br />";
    foreach($car as $index => $item){
        echo ucfirst($index) . ': ' . $item . "<br />";
    }
?>