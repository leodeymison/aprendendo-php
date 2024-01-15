<?php
    include_once("templates/header.php");
    include_once("dao/MovieDAO.php");

    $movie_d = new MovieDAO($conn, $BASE_URL);
    $all_data = $movie_d->getAllCategoriesWithMovies();
?>

<div id="main-container" class="container-fluid">
    <?php foreach($all_data as $key => $item): ?>
        <h2 class="section-title"><?= $key ?></h2>
            <div class="movies-container">
                <?php foreach($item as $mv): ?>
                <a href="<?= $BASE_URL; ?>movie.php?id=<?= $mv['mov_id']; ?>" class="card movie-card">
                    <img src="<?= $BASE_IMAGE_MOVIES; ?>/<?= $mv['mov_image']; ?>" class="card-img-top" alt="O Gambito da Rainha">
                </a>
                <?php endforeach; ?>
            </div>
    <?php endforeach; ?>
</div>

<?php
    include_once("templates/footer.php");
?>