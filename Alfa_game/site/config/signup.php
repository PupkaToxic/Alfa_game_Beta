<?php

    session_start();
    require_once 'connect.php';
   

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];

    if ($password != $confirm_pass) {
        $_SESSION['message'] = 'Пароли не совпадают!';
        header('Location: ../register.php');
    } else if ($full_name == '') {
        $_SESSION['message'] = 'Заполните все поля!';
        header('Location: ../register.php');
    } else if ($email == '') {
        $_SESSION['message'] = 'Заполните email!';
        header('Location: ../register.php');
    } else if ($password == '') {
        $_SESSION['message'] = 'Заполните паролЬ!';
        header('Location: ../register.php');
    } else if ($confirm_pass == '') {
        $_SESSION['message'] = 'Заполните подтверждение пароля!';
        header('Location: ../register.php');
    } else {
        mysqli_query($link, "INSERT INTO `clients` (`id`, `name`, `mail`, `password`) VALUES (NULL, '$full_name', '$email', '$password')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../autoris.php');
    }











