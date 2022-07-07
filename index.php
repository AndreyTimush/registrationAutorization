<?php
session_start();
if ($_SESSION['user']) {
   header('Location: profile.php');
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
        <label>Почта</label>
        <input type="text" name="emailPerson" placeholder="Почта">
        <label>Пароль</label>
        <input type="password" name="passPerson" placeholder="Пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php"> Зарегистрируйтесь </a>
        </p>
        <?php 
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>'; 
            }
           unset($_SESSION['message']); 
        ?>
    </form>
    
</body>
</html>