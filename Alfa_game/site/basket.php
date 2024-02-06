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

$staffs = mysqli_query($link, query:"SELECT *  FROM `basket` WHERE `client_id` = '$id'");




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha game</title>
	<link rel="stylesheet" href="css/basketsss.css">
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
			<div class="img_logo"></div>
			<div class="basket_img"></div>
			<a href="comps.php">игровые компьютеры</a>
			<a href="laptop.php">игровые ноутбуки</a>
			<a href="choose.php">аксессуары и периферия</a>
		</nav>

		<main>
			<h1>Корзина</h1>

			<div class="parent">

			<?php
					if (mysqli_num_rows($staffs) > 0) { /* Если корзина не пуста, то вызыввается цикл с выводом товаров */
						$staffs = mysqli_fetch_all($staffs);
						foreach ($staffs as $staffs) {
						?>
								<div class="div">
									<img class="img" src="css/img_basket/<?= $staffs[2] ?>.png">
									<p><?= $staffs[1] ?></p>
									<h4>Конфигурация</h4>
									<div class="hr"></div>
									<p class="it"><?= $staffs[3] ?> P</p>
									<div class="cross"></div>
									<a href="config/delete.php?id=<?= $staffs[0] ?>" onclick="OnclickLink()">Удалить товар</a>
								</div>
						<?php
							}
							?>
						

		
			
			<div class="d2">
					<p>Получатель</p>
					<form method="post" action="config/rem_controller.php" onsubmit="return CheckForm(this)"> 
						<input type="hidden" name="photo"  value="<?= $staffs[2] ?>">
						<input type="hidden" name="price"  value="<?= $staffs[3] ?>">
						<input type="hidden" name="product_name"  value="<?= $staffs[1] ?>">
						<input type="hidden" name="status"  value="Не оплачен">

						<input type="" name="name" placeholder="Имя*" class="nickname" id="nick">
						<input type="email" name="email" placeholder="Email*" class="email" id="Email">
						<input type="" name="phone" placeholder="Телефон*"  class="password" id="password">
						<textarea placeholder="Введите адрес доставки" name="addres" class="conf_pass" id="conf_password"></textarea>

						<button class="button" type="submit">Оформить заказ</button>
					</form>
					<?php
					} else {
						?>
						<h1>Корзина пуста</h1>
					<?php
					}
					?>

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
		<script type="text/javascript" src="js/basket_remove.js"></script>
		<script type="text/javascript" src="js/basket.js"></script>
	</div>
</body>
</html>