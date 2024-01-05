<?php
    $my_list = ["Leo", 12.3, true, 3244, false];

    $chunk = array_chunk($my_list, 2);

    var_dump($chunk);
?>