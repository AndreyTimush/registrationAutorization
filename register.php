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
    
    <!-- Форма регистрации-->

    <form action="vendor/signup.php" method="post">
        <label>Имя</label>
        <input type="text" name="namePerson" placeholder="Введите имя">
        <label>Почта</label>
        <input type="email" name="emailPerson" placeholder="Введите почту">
        <label>Пароль</label>
        <input type="password" name="passPerson" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="confirmPassPerson" placeholder="Подтвердите пароль">
        <button type="submit">Регистрация</button>
        <p>
            У вас уже есть аккаунт? - <a href="/"> Авторизируйтесь </a>
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