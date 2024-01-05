<?php
    function soma1($n1, $n2){
        print_r(func_get_args());
        echo func_num_args();

        return $n1 + $n2;
    }
    function soma2(...$values){
        print_r(func_get_args());
        echo func_num_args();

        $result = 0;
        foreach($values as $value){
            $result += $value;
        }
        return $result;
    }

    soma1(12, 14);
    echo "<br />";
    soma1(12, 14, 46, 13);
?>