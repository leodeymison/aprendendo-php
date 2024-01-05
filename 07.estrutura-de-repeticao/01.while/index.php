<?php
    $count = 0;

    while ($count < 15) {
        if($count === 2){
            echo "Pulou <br />";
            $count++;
            continue;
        }

        $number = $count + 1;
        echo "Número: $number <br />";
        $count++;

        if($count === 7) {
            break;
        }
    }
?>