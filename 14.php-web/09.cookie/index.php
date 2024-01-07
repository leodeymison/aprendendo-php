<?php
    setcookie('token', 'adasfvdvever12f2f434f', time() + 3600);

    if(isset($_COOKIE['token'])){
        $token = $_COOKIE['token'];

        echo $token;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <p>Página web com cookie</p>
</body>
</html>