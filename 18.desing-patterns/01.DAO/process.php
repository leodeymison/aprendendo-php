<?php
    include_once("db.php");
    include_once("dao/contactDAO.php");

    $contact = new ContactDAO($conn);
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $observations = $_POST['observations'];

    $newContact = new Contact();
    $newContact->setName($name);
    $newContact->setPhone($phone);
    $newContact->setObservations($observations);

    $contact->create($newContact);

    header("Location: index.php");
?>