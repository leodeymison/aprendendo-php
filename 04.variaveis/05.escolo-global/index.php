<?php
    $name = "Alfredo";
    function main(){
        global $name;
        echo $name;
        $name = "Pedro";
        echo "<br />";
        echo $name;
    }
    echo "Global - $name";
    echo "<br /><br />";
    main();
    echo "<br /><br />";
    echo "Global - $name";
?>