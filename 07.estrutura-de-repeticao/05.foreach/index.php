<?php
    $my_list = array_fill(0, 10, "item");

    foreach($my_list as $index => $item){
        $number = $index + 1;
        echo "N° $number = $item <br />";
    }
?>