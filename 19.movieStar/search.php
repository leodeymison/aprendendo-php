<?php
    include_once("global.php");
    include_once("db.php");
    include_once("templates/header.php");
    include_once("dao/MovieDAO.php");

    $mv_dao = new MovieDAO($conn, $BASE_URL);
    $search_query = $_GET['s'];
    $movies_data = [];
    if($search_query){
        $movies_data = $mv_dao->findByTitle($search_query);
    }
?>
    <div id="main-container" class="container-fluid">
        <h2 class="section-title" id="search-title">Você está buscando por: <span id="search-result"><?= $search_query; ?></span></h2>
        <p class="section-description">Resultados retornados baseados em sua busca.</p>
            <?php if(count($movies_data) === 0): ?>
                <p class="empty-list">Não há filmes para esta busca, <a href="<?= $BASE_URL ?>" class="back-link">voltar</a>.</p>
            <?php else: ?>
                <div class="movies-container">
                    <?php foreach($movies_data as $movItem): ?>
                        <div class="card movie-card">
                            <img 
                                src="<?= $BASE_IMAGE_MOVIES; ?>/<?= $movItem['image']; ?>" 
                                class="card-img-top" 
                                alt="<?= $movItem['title']; ?>"
                            >
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
    </div>
<?php
    include_once("templates/footer.php");
?>