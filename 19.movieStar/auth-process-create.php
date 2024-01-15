<?php
    include_once("global.php");
    include_once("db.php");
    include_once("dao/UserDAO.php");
    include_once("models/Message.php");
    include_once("global.php");

    $message = new Message();

    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    if($name && $lastname && $email && $password){
        if($password === $confirmpassword){
            $user = new UserDAO($conn, $BASE_URL);
            $verifyUser = $user->findByEmail($email);
            if($verifyUser == false){

                $userModel = new User();
                $userModel->name = $name;
                $userModel->lastname = $lastname;
                $userModel->email = $email;
                $userModel->password = password_hash($password, PASSWORD_DEFAULT);
                $userModel->token = $userModel->generateToken();
                $auth = true;
            
                $user->create($userModel, $auth);
            } else {
                $message->setMessage("E-mail já existe", "error", "back");
            }
        } else {
            $message->setMessage("Confirmação da senha incorreta", "error", "back");
        }
    } else {
        $message->setMessage("Por favor, preencha todos os campos", "error", "back");
    }
?>