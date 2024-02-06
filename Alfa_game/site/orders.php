<?php
require_once 'config/connect.php';

session_start(); /* Проверка сессии пользователя */
if (!$_SESSION['user']) {
	header('Location: autoris.php');
}

$id = $_SESSION['user']['id'];

$orders = mysqli_query($link, query:"SELECT *  FROM `orders` WHERE `client_id` = '$id'"); /* Выборка элементов из базы данных */


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha game</title>
	<link rel="stylesheet" href="css/ordersss.css">
</head>
<body>
	<div class="main_grid">
		<header>
			<a href="contacts.php">Контакты</a>
			<a href="pay.php">Оплата</a>
			<a href="delivery.php">Доставка</a>
			<a href="articles.php">Статьи</a>
			<a href="orders.php">История заказов</a>
		</header>

		<nav>
			<a href="main.php"><div class="img_logo"></div></a>
			<a href="basket.php"><div class="basket_img"></div></a>
			<a href="comps.php">игровые компьютеры</a>
			<a href="laptop.php">игровые ноутбуки</a>
			<a href="choose.php">аксессуары и периферия</a>
		</nav>

		<main>
			<h1>История заказов</h1>

			<?php

					if (mysqli_num_rows($orders) > 0) { /* Если заказ существует в таблице */
						$orders = mysqli_fetch_all($orders); /* выводятся все заказы */
						foreach ($orders as $orders) {
				?>
				<div class="gray_block" style="margin-bottom: 40px;">
					<div class="img" src="css/img_orders/<?= $orders[1] ?>.png"><h2><?= $orders[2] ?></h2><p>Конфигурация</p> 


					<p class="p" style="color: white;">Цена: <?= $orders[3] ?></p>
				</div>

				<?php
					}

				?>
			<?php
					}else {
						?>
						<h1>Нет заказов</h1>
					<?php
					}
			?>

		</main>
		<footer>
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




