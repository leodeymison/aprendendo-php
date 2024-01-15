<?php
    $connect = new PDO("mysql:host=localhost;dbname=cursophp", "demo", "password");

    $updatePeople = $connect->prepare("UPDATE peoples SET name = :name, age = :age WHERE id = :id");

    $id = 2;
    $name = "Carlinhos brow";
    $age = 67;

    $updatePeople->bindParam(':id', $id);
    $updatePeople->bindParam(':name', $name);
    $updatePeople->bindParam(':age', $age);

    $updatePeople->execute();

?>