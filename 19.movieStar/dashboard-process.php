<?php
    include_once("global.php");
    include_once("db.php");
    include_once("models/Message.php");
    include_once("dao/MovieDAO.php");
    $message = new Message();

    $id = filter_input(INPUT_POST, "id");

    if($id){
        $mv_dao = new MovieDAO($conn, $BASE_URL);
        $mv_dao->delete($id);
        $message->setMessage("Deletado com sucesso!", "success", "back");
    } else {
        $message->setMessage("ID não encontrada!", "error", "back");
    }
?>