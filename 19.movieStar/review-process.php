<?php
    include_once("global.php");
    include_once("db.php");
    include_once("models/Message.php");
    include_once("models/Review.php");
    include_once("dao/ReviewDAO.php");
    include_once("dao/UserDAO.php");

    $userDao = new UserDAO($conn, $BASE_URL);
    $user = $userDao->verifyToken(false);

    $message = new Message();

    $review_rate = filter_input(INPUT_POST, "rate");
    $body = filter_input(INPUT_POST, "body");
    $movie_id = filter_input(INPUT_POST, "movie_id");

    if(!$user->id){
        $message->setMessage("Faço login para enviar avaliações", "error", $BASE_URL."auth.php");
    }

    if($review_rate && $body && $movie_id){
        $rv_review = new ReviewDAO($conn, $BASE_URL);
        $rv = new Review();
        $rv->review = $review_rate;
        $rv->body = $body;
        $rv->user_id = $user->id;
        $rv->movie_id = $movie_id;
        
        $rv_review->create($rv);
        $message->setMessage("Avaliação feita com sucesso!", "success", "back");
    } else {
        $message->setMessage("Preencha todos os campos para fazer a avaliação", "error", "back");
    }
?>