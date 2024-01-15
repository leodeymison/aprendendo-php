<?php
    session_start();

    include_once("../config/connect.php");
    include_once("../config/url.php");

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $observations = $_POST["observations"];
    $errors = [];
    if(strlen($name) == 0){
        $errors[] = "Preencha o nome para continuar";
    }
    if(strlen($phone) == 0){
        $errors[] = "Preencha o telefone para continuar";
    }
    if(strlen($observations) == 0){
        $errors[] = "Preencha a observação para continuar";
    }
    if(count($errors) == 0){
        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

        $stmt = $connect->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try{
            $stmt->execute();
            $_SESSION['message'] = "Contato criado com sucesso!";
            header("Location:" . $BASE_URL . "/../index.php");
        } catch(PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }

        $connect = null;
    }
?>