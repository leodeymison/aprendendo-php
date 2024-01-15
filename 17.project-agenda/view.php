<?php
    include_once("templates/navbar.php");
    include_once("backend/getOne.php");
?>

<div class="container" id="view-contact-container"> 
    <a class="btn btn-danger mt-4" href="<?= $BASE_URL ?>">
        <i class="fa-solid fa-arrow-left text-white"></i> Voltar
    </a>
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $oneContact["name"] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?= $oneContact["phone"] ?></p>
    <p class="bold">Observações:</p>
    <p><?= $oneContact["observations"] ?></p>
</div>

<?php
    include_once("templates/footer.php");
?>