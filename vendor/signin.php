<?php
    session_start();
    require_once 'connect.php';

    $email = $_POST['emailPerson'];
    $pass = md5($_POST['passPerson']);
    echo $email . "\n";
    echo $pass . "\n";

    $check_user = mysqli_query($connect, "SELECT * FROM Persons WHERE `email`='$email' AND `password` = '$pass'");
    // echo mysqli_num_rows($check_user);
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);
        
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ];

        header('Location: ../profile.php');
    } else {
         $_SESSION['message'] = "Неверный логин или пароль!";
         header("Location: ../index.php");
    }
?>  