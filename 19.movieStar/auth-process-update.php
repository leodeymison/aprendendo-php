<?php
    include_once("global.php");
    include_once("db.php");
    include_once("dao/UserDAO.php");
    include_once("models/Message.php");

    $message = new Message();

    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $bio = filter_input(INPUT_POST, "bio");

    if($name && $lastname){
        $user_dao = new UserDAO($conn, $BASE_URL);
        $user_data = $user_dao->verifyToken();

        $user_data->name = $name;
        $user_data->lastname = $lastname;
        $user_data->bio = $bio;
        if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])){
            $image = $_FILES['image'];

            $imageTypes = ["image/jpeg", "image/png", "image/jpg"];
            $imageJPEGSTypes = ["image/jpeg", "image/jpg"];

            if(in_array($image['type'], $imageTypes)){
                if(in_array($image['type'], $imageJPEGSTypes)){
                    $imageFile = imagecreatefromjpeg($image['tmp_name']);
                } else {
                    $imageFile = imagecreatefrompng($image['tmp_name']);
                }

                $imageName = $user_data->generateImageName();
                $uploadResponse = imagejpeg($imageFile, "./" . $BASE_IMAGE_USER . "/" . $imageName, 100);
                if($uploadResponse){
                    $user_data->image = $imageName;
                } else {
                    $message->setMessage("Erro ao salvar imagem", "error", $BASE_URL . "editprofile.php");
                }
            } else {
                $message->setMessage("Tipo de arquivo inválido", "error", $BASE_URL . "editprofile.php");
            }
        }

        $user_dao->update($user_data);
    } else {
        $message->setMessage("Preencha os campos obrigatórios para continuar", "error", $BASE_URL . "editprofile.php");
    }
    print_r($image);
?>