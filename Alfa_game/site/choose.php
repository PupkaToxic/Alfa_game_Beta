<?php
require_once 'config/connect.php';

session_start(); /* Проверка сессии пользователя */


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha game</title>
	<link rel="stylesheet" href="css/chooses.css">
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
			<a href="comps.php">игровые компьютеры</a>
			<a href="laptop.php">игровые ноутбуки</a>
			<a href="mouses.php">аксессуары и периферия</a>
		</nav>

		<main>
			<h2>Аксессуары и периферия</h2>

			<div class="block_gray">
				<div class="img-1"></div>
				<h3><a href="monitors.php">Игровые мониторы</a></h3>
			</div>
			<div class="block_gray">
				<div class="img-2"></div>
				<h3><a href="keyboards.php">Игровые клавиатуры</a></h3>
			</div>
			<div class="block_gray end">
				<div class="img-3"></div>
				<h3><a href="mouses.php">Игровые мыши</a></h3>
			</div>

			<h2 class="h2">Наши партнеры</h2>

			<div class="parent-3">
				<div class="mini_block">NVIDIA</div>
				<div class="mini_block">ASUS</div>
				<div class="mini_block">MSI</div>

				<div class="big_block">
					<div class="img-9"></div>
				</div>
				<div class="big_block">
					<div class="img-10"></div>
				</div>
				<div class="big_block">
					<div class="img-11"></div>
				</div>
			</div>

			<h2 class="h">Часто задаваемые вопросы</h2>

			<div class="red_line"><p>Куда осуществляется доставка?</p></div>
			<div class="red_line"><p>Как можно оплатить заказ?</p></div>
			<div class="red_line"><p>Сколько длится гарантия на игровой компьютер</p></div>
			<div class="red_line"><p>Сколько времени займет сборка моего компьютера</p></div>

			<h2>Ищете что-то иное?</h2>

			<div class="parent-2">
				<div class="img-12"></div>
				<div class="img-13"></div>
				<div class="img-14"></div>

				<div class="block">
					<a href="comps.php"><h3>Компактные<br>Игровые компьютеры</h3></a>
					<p>Серия компактных, но мощных<br> игровых компьютеров </p>
				</div>
				<div class="block">
					<a href="comps.php"><h3>Профессиональные<br> игровые компьютеры</h3></a>
					<p>Серия профессиональных компьютеров для<br> представителей творческих профессий</p>
				</div>
				<div class="block">
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
</body>
</html>