<?php
    $connect = new PDO("mysql:host=localhost;dbname=cursophp", "demo", "password");

    $preparePeople = $connect->prepare("INSERT INTO peoples (name, email, age) VALUES (:name, :email, :age)");
    $name = "Leandro";
    $email = "leandro@gmail.com";
    $age = 16;
    $preparePeople->bindParam(":name", $name);
    $preparePeople->bindParam(":email", $email);
    $preparePeople->bindParam(":age", $age);
    $preparePeople->execute();
?>