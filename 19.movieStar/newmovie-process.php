<?php
    include_once("dao/UserDAO.php");
    include_once("dao/MovieDAO.php");
    include_once("global.php");
    include_once("db.php");
    include_once("models/Message.php");

    $user_dao = new UserDAO($conn, $BASE_URL);
    $message = new Message();

    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image'];
    $category_id = $_POST['category'];
    $length = $_POST['length'];
    $trailer = $_POST['trailer'];
    $user = $user_dao->verifyToken();
    if($user->id){
        if($title && $description && $category_id){
            $movie_dao = new MovieDAO($conn, $BASE_URL);
            $movie = new Movie();
            $movie->title = $title;
            $movie->description = $description;
            $movie->category_id = $category_id;
            $movie->user_id = $user->id;
            $movie->length = $length;
            $movie->trailer = $trailer;

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
    
                    $imageName = $movie->generateImageName();
                    $uploadResponse = imagejpeg($imageFile, "./$BASE_IMAGE_MOVIES/" . $imageName, 100);
                    if($uploadResponse){
                        $movie->image = $imageName;
                    } else {
                        $message->setMessage("Erro ao salvar imagem", "error", $BASE_URL . "newmovie.php");
                    }
                } else {
                    $message->setMessage("Tipo de arquivo inválido", "error", $BASE_URL . "newmovie.php");
                }
            } else {
                $message->setMessage("Imagem é obrigatório", "error", $BASE_URL . "newmovie.php");
            }

            $movie_dao->create($movie);
        } else {
            $message->setMessage("Preencha os dados obrigatórios", "error", $BASE_URL . "newmovie.php");
        }
    } else {
        $message->setMessage("Faço login para adicinar um filme", "error", $BASE_URL . "auth.php");
    }
?>