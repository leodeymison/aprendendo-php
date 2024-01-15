<?php
    include_once("./templates/navbar.php");
    include_once("backend/getAll.php");

    session_start();

    if(isset($_SESSION['message'])){
        $message = $_SESSION['message'];
        $_SESSION['message'] = "";
    }
?>
    <div class="container">
        <?php if(isset($message) && $message != ''): ?>
            <p id="msg"><?= $message; ?></p>
        <?php endif; ?>
        <h1 id="main-title">Minha Agenda</h1>
        <?php if(count($allContacts) > 0): ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($allContacts as $key => $contact): ?>
                        <tr>
                            <td scope="row" class="col-id"><?= $key + 1; ?></td>
                            <td scope="row"><?= $contact['name'] ?></td>
                            <td scope="row"><?= $contact['phone'] ?></td>
                            <td class="actions">
                                <a href="<?= $BASE_URL ?>/view.php?id=<?= $contact['id'] ?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="<?= $BASE_URL ?>/edit.php?id=<?= $contact['id'] ?>"><i class="far fa-edit edit-icon"></i></a>
                                <form class="delete-form" action="<?php $BASE_URL ?>backend/delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                                    <button type="submit" class="delete-btn">
                                        <i class="fas fa-times delete-icon"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>/create.php">clique aqui para adicionar</a>.</p>
        <?php endif; ?>
    </div>
<?php
    include_once("./templates/footer.php");
?>