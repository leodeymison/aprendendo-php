<?php
  include_once("templates/header.php");
  include_once("dao/CategoryDAO.php");

  $userDao->verifyToken(true);

  $ctg = new CategoryDAO($conn);
  $allCategories = $ctg->findAll();
?>
    <div id="main-container" class="container-fluid">
      <div class="offset-md-4 col-md-4 new-movie-container">
        <h1 class="page-title">Adicionar Filme</h1>
        <p class="page-description">Adicione sua crítica e compartilhe com o mundo!</p>
        <form id="add-movie-form" action="<?= $BASE_URL; ?>newmovie-process.php" method="POST" enctype="multipart/form-data">
          <input name="name" type="hidden" value="<?= $BASE_URL; ?>"/>  
          <div class="form-group">
              <label for="name">Título:</label>
              <input 
                type="text" 
                class="form-control" 
                id="name"
                name="title"
                placeholder="Digite o título do filme"
              >
          </div>
          <div class="form-group">
              <label for="image">Imagem:</label>
              <input 
                type="file" 
                name="image" 
                class="form-control-file"
                accept="image/*"
              />
          </div>
          <div class="form-group">
              <label for="length">Duração:</label>
              <input 
                type="text" 
                class="form-control" 
                id="length"
                name="length"
                placeholder="Digite a duração do filme"
              >
          </div>
          <div class="form-group">
              <label for="category">Categoria do filme:</label>
              <select class="form-control" name="category" id="category">
                <option value="">Selecione</option>
                <?php foreach($allCategories as $cat): ?>
                  <option value="<?= $cat['id']; ?>"><?= $cat['title']; ?></option>
                <?php endforeach; ?>
              </select>
          </div>
          <div class="form-group">
              <label for="trailer">Trailer:</label>
              <input 
                type="text" 
                class="form-control" 
                id="trailer"
                name="trailer"
                placeholder="Insira o link do trailer"
              >
          </div>
          <div class="form-group">
              <label for="description">Descrição:</label>
              <textarea 
                class="form-control" 
                name="description" 
                id="description" 
                rows="5"
              ></textarea>
          </div>
          <input type="submit" class="btn btn-primary w-100" value="Adicionar filme">
        </form>
      </div>
    </div>
<?php
    include_once("templates/footer.php");
?>