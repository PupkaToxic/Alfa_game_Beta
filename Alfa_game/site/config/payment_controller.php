<?php 
    
    require_once 'connect.php';

    session_start();

    $id = $_SESSION['user']['id'];

    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);


   $card_number = $_POST['number'];
   $validation = $_POST['mm'];
   $CVV = $_POST['CVV'];

   $status_true = 'Оплачен';

   $card_number = str_replace(" ", '', $card_number);
   $validation = str_replace("/", '', $validation);

   if (strlen($card_number) < 16 || strlen($card_number) > 16){
       $_SESSION['message'] = 'Введите корректные данные карты';
       header('Location: ../payment.php');
   } else if (!preg_match('/^\d+$/', $card_number)) {
       $_SESSION['message'] = 'Номер карты может содержать только цифры';
       header('Location: ../payment.php');
   } else if (strlen($validation) < 3){
       $_SESSION['message'] = 'Введите корректный срок действия карты';
       header('Location: ../payment.php');
   } else if (strlen($CVV) < 3) {
       $_SESSION['message'] = 'Введите корректный CVV код';
       header('Location: ../payment.php');
   } else if (!preg_match('/^\d+$/', $CVV)) {
       $_SESSION['message'] = 'CVV код может содержать только цифры';
       header('Location: ../payment.php');
   } else {
       $CVV = md5($CVV);
       mysqli_query($link, "INSERT INTO `payment` (`id`, `card`, `validation`, `CVV`, `client_id`) VALUES (NULL, '$card_number', '$validation', '$CVV', '$id')");
       mysqli_query($link, "UPDATE `orders` SET `status` = '$status_true'");
       header('Location: ../thanks.php');
   }

 