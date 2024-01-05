<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>
</head>
<body>
    <?php
        include_once "./navbar.php";
    ?>
    
    <article>
        Conteudo 
        <strong>
            <?php 
                echo $msg; 
            ?>
        </strong>
    </article>

    <?php
        require_once "./footer.php";
    ?>
</body>
</html>