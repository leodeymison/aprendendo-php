<?php
    session_start();
    $BASE_URL = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['REQUEST_URI']."?") . "/";
    $BASE_IMAGE_USER = "assets/img/users";
    $BASE_IMAGE_MOVIES = "assets/img/movies";
?>