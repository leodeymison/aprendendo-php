<?php
    function countVowels($text){
        $quant = 0;
        $vogais = ["a", "e", "i", "o", "u"];
        
        for($i = 0; $i < strlen($text); $i++){
            $letra = $text[$i];
            if(in_array($letra, $vogais)){
                $quant++;
            }
        }
        
        return $quant;
    }

    echo countVowels("pedro");
