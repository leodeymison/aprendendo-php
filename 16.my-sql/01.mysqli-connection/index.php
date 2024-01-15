<?php
    $host = 'localhost';
    $user = 'demo';
    $password = 'password';
    $db_name = 'cursophp';
    $connection = new mysqli($host, $user, $password, $db_name);

    if($connection->connect_errno){
        echo "ERRO na CONEXÃO! <br />";
        echo "ERROR: ".$connection->connect_error;
    }
?>