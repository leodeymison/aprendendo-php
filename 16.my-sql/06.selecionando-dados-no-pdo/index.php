<?php
    $connect = new PDO("mysql:host=localhost;dbname=cursophp", "demo", "password");
    $id = 1;
    $response = $connect->prepare("SELECT * FROM peoples WHERE id = :id");
    $response->bindParam(":id", $id);
    $response->execute();
    $data = $response->fetch();

    print_r($data);
?>