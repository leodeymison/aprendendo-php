<?php
    include_once("config/connect.php");
    include_once("config/url.php");

    $getAll = $connect->prepare("SELECT * FROM contacts");
    $getAll->execute();
    $allContacts = $getAll->fetchAll();

    $connect = null;
?>