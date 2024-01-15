<?php
    include_once("db.php");
    include_once("global.php");
    include_once("dao/UserDAO.php");
    $userDao = new UserDAO($conn, $BASE_URL);
    $userDao->destroyToken();
?>