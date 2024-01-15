<?php
    include_once("config/connect.php");

    $oneContact;
    if(isset($_GET['id'])){
        $getOne = $connect->prepare("SELECT * FROM contacts WHERE id = :id");
        $getOne->bindParam(":id", $_GET['id']);
        $getOne->execute();
        $oneContact = $getOne->fetch();
        $connect = null;
    }
?>