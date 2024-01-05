<?php
    $my_list = [12, 2, 23, "pedro", 12.56, true];
    define("my_list2", [12, 2, 23, "pedro", 12.56, true, "Beautiful"]);

    echo "Lista com var. quant: ".count($my_list);
    echo "<br />";
    echo "List com const. quant: ".count(my_list2);
?>