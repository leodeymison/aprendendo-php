<?php
    include_once "./back.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My WebSite</title>
</head>
<body>
    <div>Nome: <?= $name; ?></div>
    <div>
        <p>Produtos:</p> 
        <ul>
            <?php foreach ($products as $product): ?>
                <li><?= $product; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>