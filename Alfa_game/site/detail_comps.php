<?php
session_start();
require_once 'config/connect.php';


$product_id = $_GET['id'];
$products = mysqli_query($link, query:"SELECT *  FROM `products` WHERE `id` = '$product_id'");
$products = mysqli_fetch_assoc($products);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha game</title>
	<link rel="stylesheet" href="css/detail_comps.css">
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
			<img class="img-1" src="css/img_detail_comps/<?= $products['photo'] ?>.png" alt="">

			<div class="div_txt">
				<h1><?= $products['name'] ?></h1>
				<h2>Игровой компьютер на <?= $products['graphics'] ?></h2>
				<p><?= $products['description'] ?></p>

				<div class="gray"><h2>Конфигурация</h2></div>
				<div class="block">
					<h3>Видеокарта</h3>
					<p><?= $products['graphics'] ?></p>

					<h3>Процессор</h3>
					<p><?= $products['processor'] ?></p>

					<h3>Оперативная память</h3>
					<p><?= $products['ram'] ?></p>

					<h3>накопитель</h3>
					<p><?= $products['ssd'] ?></p>

					<h3>Блок питания</h3>
					<p>deepcool</p>

					<h3>Клавиатура</h3>
					<p>Мембранная</p>

					<h3>Wi-fi адаптер</h3>
					<p>Не поставляется</p>
				</div>
			</div>
			<form method="post" action="config/basket_controller.php">
				<input type="hidden" name="name" value="<?= $products['name'] ?>">
				<input type="hidden" name="price" value="<?= $products['price'] ?>">
				<input type="hidden" name="img" value="<?= $products['photo'] ?>">
				<button type="submit" onclick="ClickButton()">В корзину</button>
			</form>

			<a href="delivery.php" class="new_a">Доставка</a>
			<a href="contacts.php" class="new_a">Контакты</a>
			<a href="pay.php" class="new_a">Оплата</a>
			<a href="guarantee.php" class="new_a">Гарантии</a>

			<div class="house"></div>

			<div class="txt_block">
				<h3>Самовывоз</h3>
				<h4>Москва, ТД  “Атлант”,  F13-5565</h4>
			</div>

			<h1 class="compl">Комплектующие</h1>

			<div class="gray_bl">
				<div class="config img-2"></div>

				<div class="for_txt">
					<h3>Видеокарта</h3>
					<p><?= $products['graphics'] ?></p>
				</div>
			</div>
			<div class="gray_bl">
				<div class="config img-3"></div>
				

				<div class="for_txt">
					<h3>Процессор</h3>
					<p><?= $products['processor'] ?></p>
				</div>
			</div>
				
			<div class="gray_bl">
				<div class="config img-5"></div>
				
				<div class="for_txt">
					<h3>Оперативная память</h3>
					<p><?= $products['ram'] ?></p>
				</div>
			</div>
			<div class="gray_bl">
				<div class="config img-6"></div>
				
				<div class="for_txt">
					<h3>SSD</h3>
					<p><?= $products['ssd'] ?></p>
				</div>
			</div>

			<h2 class="h2_h">Ищете что-то иное?</h2>

			<div class="parent-2">
				<div class="img-12"></div>
				<div class="img-13"></div>
				<div class="img-14"></div>

				<div class="block_m">
					<a href="comps.php"><h3>Компактные<br>Игровые компьютеры</h3></a>
					<p>Серия компактных, но мощных<br> игровых компьютеров </p>
				</div>
				<div class="block_m">
					<a href="comps.php"><h3>Профессиональные<br> игровые компьютеры</h3></a>
					<p>Серия профессиональных компьютеров для<br> представителей творческих профессий</p>
				</div>
				<div class="block_m">
					<a href="comps.php"><h3>Игровые компьютеры<br> Poweres by MSI</h3></a>
					<p>Серия игровых компьютеров на<br> комплектующих от MSI</p>
				</div>
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
	</div>
	<script type="text/javascript" src="js/alert.js"></script>
</body>
</html>