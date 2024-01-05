<?php
    function soma(...$values){
        $result = 0;

        foreach($values as $value){
            $result += $value;
        }
        
        return $result;
    }

    echo soma(12, 23, 45, 10, 100, 200);
?>