<?php
    $HOST = 'localhost';
    $DBNAME = 'cursophp';
    $USERNAME = "demo";
    $PASSWORD = "password";

    try {
        $connect = new PDO("mysql:host=$HOST;dbname=$DBNAME", $USERNAME, $PASSWORD);

        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
    }
?>