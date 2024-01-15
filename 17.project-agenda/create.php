<?php
    include_once("templates/navbar.php");
?>
  <div class="container">
    <h1 id="main-title">Criar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>/backend/create.php" method="POST">
      <div class="form-group mb-4">
        <label for="name">Nome do contato:</label>
        <input 
            type="text" 
            class="form-control" 
            id="name" 
            name="name" 
            placeholder="Digite o nome" 
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
        ></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>