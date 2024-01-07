<?php
    $acrescimo = strtotime("+01 days");

    $new_date = date('d - m - y', $acrescimo); // + 1 dia

    echo $new_date;
?>