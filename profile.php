<?php
session_start();
if (!$_SESSION['user']) {
   header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
</head>
<body>
    
    <!-- Форма авторизации-->

    <form action="vendor/signin.php" method="post">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['name']?></h2>
        <a href="#"><?= $_SESSION['user']['email']?></a>
        <a href="./vendor/logout.php" class="logout">Выход</a>
    </form>
    
</body>
</html>