<?php 

    
    require_once 'connect.php';
    session_start();
    $id = $_SESSION['user']['id'];
   $photo = $_POST['photo'];
   $price = $_POST['price'];
   $product_name = $_POST['product_name'];
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $addres = $_POST['addres'];
   $status = $_POST['status'];

   

    if ($name == '') {
        $_SESSION['message'] = 'Введите свое имя!';
        header('Location: ../basket.php');
    } else if ($phone == '') {
        $_SESSION['message'] = 'Введите свой номер телефона!';
        header('Location: ../basket.php');
    } else if ($email == '') {
        $_SESSION['message'] = 'Заполните email!';
        header('Location: ../basket.php');
    } else if ($addres == '') {
        $_SESSION['message'] = 'Введите адрес доставки!';
        header('Location: ../basket.php');
    } else {
        mysqli_query($link, "INSERT INTO `orders` (`id`, `photo`, `name`, `price`, `client_name`, `phone`, `email`, `addres`, `status`, `client_id`) VALUES (NULL, '$photo', '$product_name', '$price', '$name', '$phone', '$email', '$addres', '$status', '$id')");
        header('Location: ../payment.php');
    }

   
