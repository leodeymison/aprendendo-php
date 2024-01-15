<?php  
    $HOST = "localhost";
    $BDNAME = "movie_star";
    $USERNAME = "demo";
    $PASSWORD = "password";
    $conn = new PDO("mysql:host=$HOST;dbname=$BDNAME", $USERNAME, $PASSWORD);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>