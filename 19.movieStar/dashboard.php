<?php
  include_once("templates/header.php");
  include_once("dao/MovieDAO.php");

  $user = $userDao->verifyToken(true);

  $mv_dao = new MovieDAO($conn, $BASE_URL);
  $all_data = $mv_dao->findAllById($user->id);
?>
    <div id="main-container" class="container-fluid">
        <h2 class="section-title">Dashboard</h2>
        <p class="section-description">Adicione ou atualize as informações dos filmes que enviou</p>
        <div class="col-md-12" id="add-movie-container">
            <a href="<?php $BASE_URL ?>newmovie.php" class="btn form-btn btn-primary"><i class="fas fa-plus"></i> Adicionar filme</a>
        </div>
        <div class="col-md-12" id="movies-dashboard">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col" class="actions-column">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($all_data as $item): ?>
                    <tr>
                      <td scope="row"><?= $item['id'] ?></th>
                      <td>
                        <a href="<?= $BASE_URL; ?>movie.php?id=<?= $item['id']; ?>" class="table-movie-title"><?= $item['title']; ?></a>
                      </td>
                      <td class="actions-column">
                        <form action="<?= $BASE_URL ?>dashboard-process.php" method="POST">
                          <input type="hidden" name="id" value="<?= $item['id']; ?>">
                          <button type="submit" class="delete-btn">
                            <i class="fas fa-times"></i> Deletar
                          </button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
        </div>
    </div>
<?php
    include_once("templates/footer.php");
?>