<?php
    include_once("templates/navbar.php");
    include_once("backend/getOne.php");
?>
  <div class="container">
    <h1 id="main-title">Editar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>/backend/edit.php" method="POST">
      <input type="hidden" name="id" value="<?= $oneContact['id'] ?>">
      <div class="form-group mb-4">
        <label for="name">Nome do contato:</label>
        <input 
            type="text" 
            class="form-control" 
            id="name" 
            name="name" 
            placeholder="Digite o nome"
            value="<?= $oneContact['name'] ?>"
            required
        >
      </div>
      <div class="form-group mb-4">
        <label for="phone">Telefone do contato:</label>
        <input 
            type="text" 
            class="form-control" 
            id="phone" 
            name="phone" 
            placeholder="Digite o telefone"
            value="<?= $oneContact['phone'] ?>"
            required 
        >
      </div>
      <div class="form-group mb-4">
        <label for="observations">Observações:</label>
        <textarea 
            type="text" 
            class="form-control" 
            id="observations" 
            name="observations" 
            placeholder="Insira as observações" 
            rows="3"
            required
        ><?= $oneContact['observations'] ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>