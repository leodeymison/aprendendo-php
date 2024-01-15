<?php
    include_once("./templates/header.php");

    $objectPost;

    if(isset($_GET['id'])){
        foreach($posts as $post){
            if($post['id'] == $_GET['id']){
                $objectPost = $post;
            }
        }
    } else {
        header("Location: $BASE_URL");
        exit;
    }

    if(!$objectPost){
        header("Location: $BASE_URL");
        exit;
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title">
            <?= $objectPost['title']; ?>
        </h1>
        <p id="post-description">
            <?= $objectPost['description']; ?>
        </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/images/<?= $objectPost['img']; ?>" alt="Imagem de <?= $objectPost['title']; ?>">
        </div>
        <p class="post-content">
            <?= $objectPost['content']; ?>
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($objectPost['tags'] as $tag): ?>
                <li>
                    <a href="#"><?= $tag; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li>
                    <a href="#"><?= $category; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>


<?php
    include_once("./templates/footer.php")
?>