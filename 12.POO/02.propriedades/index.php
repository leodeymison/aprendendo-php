<?php
    class Car {
        public $rodas = 4;
        public $color = '#000000';
    }

    $car1 = new Car();

    echo $car1->rodas;
    $car1->rodas = 6;
    echo "<br />";
    echo $car1->rodas;
?>