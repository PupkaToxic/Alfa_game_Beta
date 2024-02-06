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
	<link rel="stylesheet" href="css/article.css">
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
			<a href="choose.php">аксессуары и периферия</a>
		</nav>

		<main>
			<h1>Статьи</h1>

			<?php

				$articles = mysqli_query($link, query:"SELECT *  FROM `articles`"); /* Выборка элементов из базы данных */
				$articles = mysqli_fetch_all($articles);
				foreach ($articles as $articles) {
			?>
				<div class="gray_block">
					<img class="img" src="css/img_articles/<?= $articles[3] ?>.png" alt="">
					<h2>Компьютер для <?= $articles[1] ?></h2>
					<p>Системные требования и результаты тестирования</p>
					<div class="btn"><a href="articles_detail.php?id=<?= $articles[0] ?>">Читать далее</a></div>
					<p><?= $articles[2] ?></p>
				</div>

			<?php
			}

			?>
			
		</main>

		<footer>
			<div>
				<a href=""><h3>Социальные медиа</h3></a>
				<a href="https://www.whatsapp.com/"><p>Whatsapp</p></a>
				<a href="https://vk.com/"><p>VK</p></a>
				<a href="www.instagram.com"><p>Instagram</p></a>
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


			