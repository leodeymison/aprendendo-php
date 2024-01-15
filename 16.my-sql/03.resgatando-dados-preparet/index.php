<?php
    // fetch_row = Apenas um dado, no formato indexado
    // fetch_assoc = Apenas um dado, no formato chave e valor
    // fetch_all   = Vários
    include_once("../01.mysqli-connection/index.php");

    $id = 3;

    $prepared = $connection->prepare("SELECT * FROM peoples WHERE id = ?");
    $prepared->bind_param("i", $id);
    $response = $prepared->execute();

    if($response){
        $result = $prepared->get_result();
        $data = $result->fetch_assoc();
        print_r($data);
        echo "<hr />";
        echo "ID: ".$data['id']."<br />";
        echo "NAME: ".$data['name']."<br />";
        echo "EMAIL: ".$data['email']."<br />";
        echo "IDADE: ".$data['age']."<br />";
        echo "<hr />";
    } else {
        echo "Erro ao buscar dados";
    }

    $connection->close();
?>