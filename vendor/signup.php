<?php
    session_start();
    require_once 'connect.php';
    $name = $_POST['namePerson'];
    $email = $_POST['emailPerson'];
    $pass = $_POST['passPerson'];
    $confPass = $_POST['confirmPassPerson'];

    if ($pass === $confPass) {
        // $db->exec("INSERT INTO Persons (id, email, password, name) VALUES (NULL, $email, $pass, $name)");
        // $_SESSION['message'] = 'Регистрация прошла успешно';
        $pass = md5($pass);
        mysqli_query($connect, "INSERT INTO Persons(`name`, `email`, `password`) VALUES('$name', '$email', '$pass')");
        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }
?>  