<?php
    $name = "Carlos";

    function main(){
        $name = "Leodeymison";
        echo "Local 1 - $name <br />";
    }
    function main2(){
        $name = "Diego";
        echo "Local 2 - $name <br />";
    }

    echo "Global - $name <br />";
    main();
    main2();

    $name = "João";

    echo "Global - $name <br />";
    main();
    main2();
?>