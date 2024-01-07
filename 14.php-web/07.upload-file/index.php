<?php
    if(isset($_FILES)){
        print_r($_FILES);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Multiplos dados</title>
    <style>
        .prymary {
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="p-3 w-300 prymary">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <input class="form-control mb-2" type="file" name="image"/>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>