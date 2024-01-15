<?php
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Leodeymison</title>
    <!-- STYLES -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/images/logo.svg" alt="logo do sistema">
        </a>
        <nav>
            <ul id="navbar">
                <li><a class="nav-link" href="<?= $BASE_URL ?>">Home</a></li>
                <li><a class="nav-link" href="#">Categoria</a></li>
                <li><a class="nav-link" href="#">Sobre</a></li>
                <li><a class="nav-link" href="<?= $BASE_URL ?>/contact.php">Contato</a></li>
            </ul>
        </nav>
    </header>