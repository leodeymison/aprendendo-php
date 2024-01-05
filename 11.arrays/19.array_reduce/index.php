<?php
    $arr = [12, 34, 6, 12, 76, 3, 7, 34, 8];

    function soma($a, $b) {
        return $a + $b;
    }

    $reduce = array_reduce($arr, 'soma');

    echo $reduce;
?>