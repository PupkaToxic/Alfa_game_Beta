<?php 

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $password = $_POST['password'];

    $check_user = mysqli_query($link, "SELECT * FROM `clients` WHERE `name` = '$name' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) { // если пользователь найден
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ];

        header('location: ../main.php');
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../autoris.php');
    }