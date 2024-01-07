<?php
    $errors = [];
    $name = "";
    $email = "";
    $success = false;

    if(count($_POST) > 0){
        if(!$_POST['name']){
            $errors[] = 'Nome é obrigatório';
        } else {
            $name = $_POST['name'];
        }
        if(!$_POST['email']){
            $errors[] = 'E-mail é obrigatório';
        } else {
            $email = $_POST['email'];
        }
    }

    if(count($errors) == 0){
        $success = true; 
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Validação de formulário</title>
    <style>
        .prymary {
            width: 500px;
        }
    </style>
</head>
<body>
    <?php if(count($errors) > 0): ?>
        <ul>
            <?php foreach($errors as $err): ?>
                <li><?= $err; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <?php if($success === true): ?>
        <strong>Enviado com sucesso!</strong>
    <?php endif; ?>
    <div class="p-3 w-300 prymary">
        <form action="index.php" method="post">
            <div>
                <input value="<?= $name; ?>" class="form-control mb-2" type="text" name="name" placeholder="Digite seu nome" />
            </div>
            <div>
                <input value="<?= $email; ?>" class="form-control mb-2" type="text" name="email" placeholder="Digite seu E-mail" />
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>