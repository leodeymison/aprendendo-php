<?php
    include_once("../01.mysqli-connection/index.php");

    $table = "peoples";

    $peoples = $connection->query("SELECT * FROM peoples");
    echo "<br />";
    foreach($peoples as $row){
        echo "ID: ".$row['id']."<br />";
        echo "NAME: ".$row['name']."<br />";
        echo "EMAIL: ".$row['email']."<br />";
        echo "IDADE: ".$row['age']."<br />";
        echo "<hr />";
    }
    echo "<br />";

    $name = 'Jerusa';
    $email = 'Jerusa@gmail.com';
    $age = 48;
    $createPeople = $connection->prepare("INSERT INTO $table (name, email, age) VALUES (?, ?, ?)");
    $createPeople->bind_param('ssi', $name, $email, $age); // s = string; i = integer; d = double
    $response = $createPeople->execute();
    echo "Executa: ".$response;
    if($response){
        echo "Dado criado com sucesso";
    } else {
        echo "Erro ao criar dados";
    }
    $connection->close();
?>