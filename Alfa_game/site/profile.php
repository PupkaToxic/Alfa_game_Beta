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

$orders = mysqli_query($link, query:"SELECT *  FROM `orders` WHERE `client_id` = '$id'");
$client = mysqli_query($link, query:"SELECT *  FROM `clients` WHERE `id` = '$id'");
$client = mysqli_fetch_assoc($client);




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="contacts.php">Контакты</a>
        <a href="pay.php">Оплата</a>
        <a href="delivery.php">Доставка</a>
        <a href="articles.php">Статьи</a>
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
                <p class="img-container"><img src="css/img_profile/user.png" class="image-el"></p>
                <p class="fio"><?= $client["name"] ?></p>
                <a class="aside-link" href="info.php"><p class="aside-el personal-info">Личная Информация</p></a>
                <a class="aside-link" href="basket.php"><p class="aside-el my-bucket">Моя корзина</p></a>
                <a class="aside-link" href="profile-order.php"><p class="aside-el order-history">История заказов</p></a>
                <a class="aside-link" href="config/logout.php"><p class="aside-el leave-account">Выйти из аккаунта</p></a>
            </div>
        </div>
        <div class="orders-block">
            <div class="orders-history">
                <h2 class="order-history-text">История заказов</h2>
            </div>

            <?php 
                if(mysqli_num_rows($orders) > 0) {
                    $orders = mysqli_fetch_all($orders);
                    foreach($orders as $orders) {
                    ?>
                        <table>
                                <tr>
                                    <td rowspan="2"><img src="css/img_comps/<?= $orders[1] ?>.png" class="t_img" alt=""></td>
                                    <td rowspan="2" class="img_name"><?= $orders[2] ?><br><p class="configuration">Конфигурация</p></td>
                                    <td>Имя клиента: <?= $orders[4] ?></td>
                                    <td><p class="status">Статус: <?= $orders[8] ?></p></td>
                                </tr>
                                <tr>
                                    <td>4698386939</td>
                                    <td>27.03.23</td>
                                </tr>
                        </table>
                    <?php
                         }
                    } else if(mysqli_num_rows($orders) == 0) {
                        $orders = mysqli_fetch_all($orders);
						?>
						<h1>Заказов нет</h1>
					<?php
					}
					?>
        </div>
    </div>
</body>
</html>


