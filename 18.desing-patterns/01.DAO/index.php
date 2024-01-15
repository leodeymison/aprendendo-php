<?php
    include_once("db.php");
    include_once("dao/contactDAO.php");

    $contactsClassDAO = new ContactDAO($conn);
    $allContacts = $contactsClassDAO->findAll();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST DAO</title>
</head>
<body>
    <h1>INSIRA UM CONTATO</h1>
    <form action="process.php" method="POST">
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
    <ul>
        <?php foreach($allContacts as $item): ?>
            <li><?= $item->getId(); ?> - <?= $item->getName(); ?> - <?= $item->getPhone(); ?> - <?= $item->getObservations(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>