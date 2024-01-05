<?php
    $my_list = [12, true, "Leo", 344.56, 40, false, "Pedro", 3452.40];

    var_dump($my_list);
    echo "<br />";

    $slice = array_slice($my_list, 1, 5);

    var_dump($slice);
    echo "<br />";
?>