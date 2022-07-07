<?php
     session_start();
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

    <form action="" method="">
        <label>Логин</label>
        <input type="text" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" placeholder="Введите пароль">
        <button>Войти</button>
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