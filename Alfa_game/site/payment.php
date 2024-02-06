<?php
	session_start(); /* Проверка сессии пользователя */
	require_once 'config/connect.php';

	$id = $_SESSION['user']['id']; /* Нахождение пользователя по ID*/
	unset($counts);
	$count = mysqli_query($link, query:"SELECT sum(price)  FROM `orders` WHERE `client_id` = '$id'"); /* Посчитать сумму всех товаров из таблицы orders (для Арины ДОРАБОТАТЬ!!!! Запрос неверный!) */
	$count = mysqli_fetch_assoc($count); /* выбор товара*/

	$counts = implode('', $count); /* Преобразование массива count в строку */
	$orders = mysqli_query($link, query:"SELECT *  FROM `orders` WHERE `client_id` = '$id'"); /* выборка заказов */
	$orders = mysqli_fetch_all($orders);
	
	ini_set('display_errors', 0); /* скрытие ошибок */
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha game</title>
	<link rel="stylesheet" href="css/paymentss.css">
</head>
<body>
	<div class="main_grid">
		<header>
			<a href="contacts.php">Контакты</a>
			<a href="pay.php">Оплата</a>
			<a href="delivery.php">Доставка</a>
			<a href="articles.php">Статьи</a>
			<a href="profile.php">Профиль</a>
		</header>

		<nav>
			<a href="main.php"><div class="img_logo"></div></a>
			<a href="basket.php"><div class="basket_img"></div></a>
			<a href="">игровые компьютеры</a>
			<a href="laptop.php">игровые ноутбуки</a>
			<a href="choose.php">аксессуары и периферия</a>
		</nav>

		<main>
			<div class="main_block">
				<h1>Оплата заказа:</h1>

				<?php
					foreach ($orders as $orders) {
				?>
				 
							
				<?php
				}
				?>
				<p>К оплате:  <?= $counts ?>P</p>
				<?php
						
					 ?>

				<form method="post" action="config/payment_controller.php"  onsubmit="return CheckForm(this)">
					<label for="input_1">Введите номер карты</label>
					<input type="text" name="number" id="CardNumber" class="input_1">

					<input type="hidden" name="count" id="input_1" class="input_1" value="<?= $count ?>">
				

					<label for="input_2">ММ/ГГ</label>
					<input type="date" name="mm" id="dateOfCard" min="2023-11-30" max="2030-12-30" class="input">

					<label for="input_3" class="label">CVV</label>
					<input type="number" name="CVV" id="CVV" onkeypress="this.value=this.value.substring(0,2);" class="input i3">
					<input type="hidden" name="owner" id="Email" value="gkjrgkj">

					<button>Оплатить</button>
				</form>

				<p id="error" class="error">
					<?php
						if ($_SESSION['message']){
							echo $_SESSION['message'];
						}
						unset($_SESSION['message']);
					 ?>
				</p>
			</div>
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
		<script src="JS/payment.js"></script>
	</div>
</body>
</html>