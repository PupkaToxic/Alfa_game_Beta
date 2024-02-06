<?php
session_start();
require_once 'config/connect.php';



ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

if (!$_SESSION['user']) {
	header('Location: autoris.php');
	
}

$id = $_SESSION['user']['id']; /* Вытягивание айди пользователя из его массива */

$client = mysqli_query($link, query:"SELECT *  FROM `clients` WHERE `id` = '$id'");

$order = mysqli_query($link, query:"SELECT *  FROM `orders` WHERE `client_id` = '$id'");

$client = mysqli_fetch_assoc($client);

$order = mysqli_fetch_assoc($order);




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile-order.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="contacts.php">Контакты</a>
        <a href="pay.php">Оплата</a>
        <a href="delivery.php">Доставка</a>
        <a href="articles.php">Статьи</a>
        <a href="orders.php">История заказов</a>
        <a href="profile.php">Профиль</a>
    </header>

    <nav>
        <div class="img_logo"></div>
        <a href="basket.php"><div class="basket_img"></div></a>
        <a href="comps.php">игровые компьютеры</a>
        <a href="laptop.php">игровые ноутбуки</a>
        <a href="choose.php">аксессуары и периферия</a>
    </nav>
    <div class="content">
        <div class="aside">
            <div class="aside-content">
                <p class="img-container"><img src="user.png" class="image-el"></p>
                <p class="fio"><?= $client["name"] ?></p>
                <a class="aside-link" href="info.php"><p class="aside-el personal-info">Личная Информация</p></a>
                <a class="aside-link" href="basket.php"><p class="aside-el my-bucket">Моя корзина</p></a>
                <a class="aside-link" href="profile-order.php"><p class="aside-el order-history">История заказов</p></a>
                <a class="aside-link" href="config/logout.php"><p class="aside-el leave-account">Выйти из аккаунта</p></a>
            </div>
        </div>
    
        <div class="main">
            <p class="my-orders">Мои заказы</p>
            <div class="order-info">
                <div class="continf">
                    <div class="info-block">
                        
                        <h1 class="text order-number">Заказ № 0003 983 978 7388 </h1> 
                        <h2 class="pay-info">Оплачено: <?= $order["price"] ?>P</h2>
                        
                    </div>
                    <div class="info-block">
                        <div class="info-block-2">
                            <u class="text"><h4 class="text">Доставка</h4></u>
                            <h3 class="text-2"><?= $order["addres"] ?></h3>
                            <p class="otst"><u class="text"><h4 class="text">Получатель</h4></u></p>
                            <h3 class="text-2"><?= $client["name"] ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div>
            <a href=""><h3>Социальные медиа</h3></a>
            <a href=""><p>Whatsapp</p></a>
            <a href=""><p>VK</p></a>
            <a href=""><p>Instagram</p></a>
        </div>
        <div>
            <a href=""><h3>Поддержка</h3></a>
            <a href=""><p>Форум</p><a href=""></a>
            <a href=""><p>Помощь</p></a>
            <a href=""><p>Отзывы</p></a>
        </div>
        <div>
            <a href=""><h3>Компания</h3></a>
            <a href=""><p>О нас</p></a>
            <a href=""><p>Контакты</p></a>
            <a href=""><p>Пресса</p></a>
        </div>

        <div class="line"></div>

        <div class="link">
            <a href="" class="txt-link">Авторские права</a>
            <a href="" class="txt-link">Условия использования</a>
            <a href="" class="txt-link">Конфиденциальность</a>
        </div>
    </footer>
</div>
</body>
</html>