<?php
    $url = "https://www.google.com?tag=name&lang=ptbr";

    $my_url = parse_url($url);

    print_r($my_url);

    echo "<br />";
    echo "HOST: " . $my_url["host"];
    echo "<br />";
    echo "CAMINHO: " . $my_url["scheme"];
    echo "<br />";
    echo "PORTA: " . $my_url["port"];
    echo "<br />";
    echo "QUERY: " . $my_url["query"];
?>