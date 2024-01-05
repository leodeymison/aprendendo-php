<?php
    // array_splice($arr, 2, 1) => A partir do índice 2, remove 1 elemento;

    $my_list = [21, 12, "Pedro", true, 10.2, 15, false];

    var_dump($my_list);
    echo "<br />";

    $new_list = array_splice($my_list, 2, 1);

    var_dump($new_list);
    echo "<br />";
?>