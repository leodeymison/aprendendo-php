<?php
    $DBNAME = "cursophp";
    $HOST = "localhost";
    $USERNAME = "demo";
    $PASSWORD = "password";

    $conn = new PDO("mysql:host=$HOST;dbname=$DBNAME", $USERNAME, $PASSWORD);
?>