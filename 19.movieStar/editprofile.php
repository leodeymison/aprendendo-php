<?php
  include_once("templates/header.php");

  $userDao->verifyToken(true);
?>
  <div id="main-container" class="container-fluid">
    <div class="col-md-12">
      <form action="<?= $BASE_URL; ?>auth-process-update.php" method="POST" enctype="multipart/form-data">
        <div class="row"> 
          <div class="col-md-4">
            <h1><?= $userData->name ?></h1>
            <p class="page-description">Altere seus dados no formulário abaixo:</p>
            <div class="form-group">
              <label for="name">Nome</label>
              <input 
                type="text" 
                class="form-control" 
                id="name" 
                name="name"
                placeholder="Digite seu nome" 
                required
                value="<?= $userData->name ?>"
              >
            </div>
            <div class="form-group">
              <label for="name">Sobrenome</label>
              <input 
                type="text" 
                class="form-control" 
                id="lastname" 
                name="lastname"
                placeholder="Digite seu sobrenome" 
                required
                value="<?= $userData->lastname ?>"
              >
            </div>
            <div class="form-group">
              <label for="email">E-mail:</label>
              <input 
                type="email" 
                class="form-control disabled" 
                id="email" 
                placeholder="Digite seu e-mail" 
                disabled 
                value="<?= $userData->email ?>"
              >
            </div>
            <input type="submit" class="btn btn-primary w-100" value="Alterar">
          </div>
          <div class="col-md-8">
            <div class="form-group d-flex justify-content-center">
              <img 
                class="img-fluid" 
                id="profile-image"
                src="<?= $userData->image ? "$BASE_IMAGE_USER/$userData->image" : "$BASE_IMAGE_USER/user.png" ?>"
                alt="<?= $userData->name ?>"
              />
            </div>
            <div class="form-group">
              <label for="image">Foto</label>
              <input type="file" name="image" class="form-control-file">
            </div>
            <div class="form-group">
              <label for="bio">Sobre você:</label>
              <textarea 
                class="form-control" 
                id="bio" 
                name="bio" 
                rows="5" 
                placeholder="Conte quem você é, o que faz, onde trabalha..."
              ><?= $userData->bio ?></textarea>
            </div>
          </div>    
        </div>   
      </form>
    </div>
  </div>

<?php
  include_once("templates/footer.php");
?>