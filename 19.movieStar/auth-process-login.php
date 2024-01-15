<?php
    include_once("global.php");
    include_once("db.php");
    include_once("dao/UserDAO.php");
    include_once("models/Message.php");

    $message = new Message();

    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email && $password){
        $user_dao = new UserDAO($conn, $BASE_URL);
        $verifyLogin = $user_dao->login($email, $password);
        if($verifyLogin){
            $message->setMessage("Encontrou na sua conta!", "success", $BASE_URL . "index.php");
        } else {
            $message->setMessage("Login ou senha incorreta!", "error", $BASE_URL . "auth.php");
        }
    } else {
        $message->setMessage("Login ou senha incorreta!", "error", $BASE_URL . "auth.php");
    }
?>