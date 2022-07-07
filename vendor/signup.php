<?php
    session_start();
    require_once 'connect.php';
    $name = $_POST['namePerson'];
    $email = $_POST['emailPerson'];
    $pass = $_POST['passPerson'];
    $confPass = $_POST['confirmPassPerson'];
    $check_email = mysqli_query($connect, "SELECT * FROM Persons WHERE `email`='$email'");

    if (mysqli_num_rows($check_email) == 0) {
        if ($pass === $confPass) {
            $pass = md5($pass);
            mysqli_query($connect, "INSERT INTO Persons(`name`, `email`, `password`) VALUES('$name', '$email', '$pass')");
            $_SESSION['message'] = 'Регистрация прошла успешно';
            header('Location: ../index.php');
        } else {
            $_SESSION['message'] = 'Пароли не совпадают';
            header('Location: ../register.php');
        }
    } else {
        $_SESSION['message'] = 'Пользователь с такой почтой уже существует!';
        header('Location: ../register.php');
    }
?>  