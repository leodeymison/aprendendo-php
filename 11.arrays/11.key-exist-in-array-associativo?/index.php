<?php
    $languages = [
        "ptbr" => "Português",
        "en" => "English",
        "fr" => "French",
    ];

    if(array_key_exists('en', $languages)){
        echo "English existe na lista";
    }  else {
        echo "English não existe na lista";
    }
?>