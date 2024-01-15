<?php
  include_once("global.php");
  include_once("templates/header.php");
  include_once("dao/MovieDAO.php");
  include_once("dao/ReviewDAO.php");

  $user = $userDao->verifyToken(false);

  // Dados do filme
  $mv_dao = new MovieDAO($conn, $BASE_URL);
  if($_GET['id']){
    $data = $mv_dao->findOneById($_GET['id']);
  } else {
    $message->setMessage("Filme não encontrado", "error", $BASE_URL);
  }

  // Avaliações
  $rv_dao = new ReviewDAO($conn, $BASE_URL);
  $all_revies = $rv_dao->findAll($_GET['id']);
  $hate = 0;
  foreach($all_revies as $item){
    $hate+= $item['rv_note'];
  }
  if($hate > 0){
    $hate = $hate / count($all_revies);
  }
?>
<div id="main-container" class="container-fluid">
      <div class="row">
        <div class="offset-md-1 col-md-6 movie-container">
          <h1 class="page-title"><?= $data['title'] ?></h1>
          <p class="movie-details">
              Duração: 
              <?= $data['length']; ?>
                <span class="pipe"></span> 
              <?= $data["cat_title"]; ?> 
              <span class="pipe"></span> 
              <i class="fas fa-star"></i> 
              <?= $hate === 0 ? "Nenhuma avaliação" : $hate; ?>
          </p>
          <?php if($data['trailer']): ?>
            <iframe 
              width="560" 
              height="315" 
              src="<?= $data['trailer'] ?>" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen
            ></iframe>
          <?php endif; ?>
          <p><?= $data['description'] ?></p>
        </div>
        <div class="col-md-4">
          <img src="<?= $BASE_IMAGE_MOVIES; ?>/<?= $data['image'] ?>" alt="<?= $data['title'] ?>">
        </div>
        <div class="offset-md-1 col-md-10" id="reviews-container">
          <h3 id="reviews-title">Avaliações:</h3>
          <?php if($user): ?>
            <div class="col-md-12" id="review-form-container">
              <h4>Envie sua avaliação</h4>
              <p class="page-description">Preencha o formulário com a nota e comentário sobre o filme</p>
              <form action="<?= $BASE_URL ?>review-process.php" method="POST">
                <input type="hidden" name="movie_id" value="<?= $_GET['id']; ?>" />
                <div class="form-group">
                  <label for="rate">Nota do filme:</label>
                  <select class="form-control" name="rate" id="rate">
                      <option value="">Selecione</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="comment">Seu comentário:</label>
                  <textarea 
                    class="form-control" 
                    id="comment" 
                    name="body" 
                    rows="3" 
                    placeholder="O que você achou do filme?"
                  ></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
          <?php endif; ?>
          <br>
          <?php foreach($all_revies as $review): ?>
            <div class="col-md-12 review mt-2">
              <div class="row">
                <div class="col-md-1">
                  <img id="image-profiles" src="<?= $BASE_IMAGE_USER; ?>/<?= $review['usr_image'] ? $review['usr_image'] : "user.png"; ?>" class="img-fluid" alt="<?= $review['usr_name']; ?>">
                </div>
                <div class="col-md-9 d-flex">
                  <h4 class="author-name"><?= $review['usr_name']; ?></h4>
                  <p class="ml-2 mt-0"><i class="fas fa-star"></i> <?= $review['rv_note']; ?></p>
                </div>
                <div class="col-md-12  mt-3">
                  <p><?= $review['rv_body']; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
<?php
    include_once("templates/footer.php");
?>