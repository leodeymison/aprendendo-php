<?php
    function calcularDesconto($value, $category){
        $desconto = 0;
        $catogories = [
            "eletrônicos" => 10,
            "vestuário" => 20,
            "alimentos" => 5,
        ];
        
        if(array_key_exists($category, $catogories)){
            $desconto = $catogories["$category"];
        }
        
        $descontoValue = ($value * $desconto) / 100;
        return $value - $descontoValue;
    }
    echo calcularDesconto(2000, "pesos");
