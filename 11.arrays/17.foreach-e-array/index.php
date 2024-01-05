<?php
    $car = [
        'marca' => 'Chevrolet',
        'modelo' => 'Gol',
        'color' => 'black'
    ];

    foreach($car as $key => $value){
        echo ucfirst($key).": $value <br />";
    }
?>