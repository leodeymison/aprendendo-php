<?php
    $car = [
        'color' => 'black',
        'marca' => 'Chevrolet',
        'modelo' => 'Gol'
    ];
    extract($car);

    echo "Cor: $color <br />";
    echo "Marca: $marca <br />";
    echo "Modelo: $modelo <br />";
?>