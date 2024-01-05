<?php
    function createPeople($name, $age, $color, $flag){
        return [
            'name' => $name, 
            'age' => $age, 
            'color' => $color, 
            'flag' => $flag
        ];
    }

    $people1 = createPeople("Leodeymison", 20, "white", "Brazil");
    echo $people1["name"];
?>