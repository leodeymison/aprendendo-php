<?php
    session_start();

    include_once("../config/connect.php");
    include_once("../config/url.php");

    $id = $_POST["id"];
    if(isset($id)){
        $query = "DELETE FROM contacts WHERE id = :id";
        $deleteContact = $connect->prepare($query);
        $deleteContact->bindParam(':id', $id);

        try {
            $deleteContact->execute();
            $_SESSION['message'] = "Contato deletado com sucesso!";
            header("Location:" . $BASE_URL . "/..");
        } catch (PDOException $err){
            $error = $err->getMessage();
            echo "Error: " . $error;
        }
    } else {
        header("Location:" . $BASE_URL . "..");
        $_SESSION['message'] = "ID não encontrado!";
    }
?>