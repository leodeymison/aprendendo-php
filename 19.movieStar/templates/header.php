<?php
    include_once("global.php");
    include_once("db.php");
    include_once("models/Message.php");
    include_once("dao/UserDAO.php");

    $message = new Message();
    $get_message = $message->getMessage();
    $message->clearMessage();

    $userDao = new UserDAO($conn, $BASE_URL);
    $userData = $userDao->verifyToken();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStar</title>
    <link rel="shortcut icon" href="<?= $BASE_URL ?>assets/img/logo.svg" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- MovieStar CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/styles.css" />
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
        <a href="<?= $BASE_URL ?>" class="navbar-brand">
            <img src="<?= $BASE_URL ?>assets/img/logo.svg" alt="MovieStar" id="logo">
            <span id="moviestar-title">MovieStar</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <form action="<?= $BASE_URL ?>search.php" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
            <input type="text" name="s" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
            <button class="btn my-2 my-sm-0" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav  d-flex .d-inline-flex">
                <?php if($userData): ?>
                    <li class="nav-item">
                        <a href="<?= $BASE_URL ?>dashboard.php" class="nav-link btn btn-primary">Meus Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $BASE_URL ?>editprofile.php" class="nav-link px-2 py-0" >
                            <img 
                                title="<?= $userData->name ?>"
                                height="40"
                                width="40"
                                id="image-profile"
                                class="rounded-circle"
                                src="<?= $userData->image ? "$BASE_IMAGE_USER/$userData->image" : $BASE_IMAGE_ . "/user.png" 
                            ?>" alt="<?= $userData->name ?>">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $BASE_URL ?>logout.php" class="nav-link text-danger">
                            SAIR
                        </a>
                    </li>
                <?php else: ?>
                <li class="nav-item">
                    <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                </li>
            <?php endif; ?>
            </ul>
        </div>
        </nav>
    </header>

    <?php if(!empty($get_message["msg"])): ?>
        <div class="msg-container">
            <p class="msg <?= $get_message["type"] ?>">
                <?= $get_message["msg"] ?>
            </p>
        </div>
    <?php endif; ?>