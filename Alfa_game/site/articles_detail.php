<?php
require_once 'config/connect.php';

session_start(); /* Проверка сессии пользователя */


$article_id = $_GET['id'];
$articles = mysqli_query($link, query:"SELECT *  FROM `articles` WHERE `id` = '$article_id'");
$articles = mysqli_fetch_assoc($articles);
if (!$_SESSION['user']) {
	header('Location: autoris.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha game</title>
	<link rel="stylesheet" href="css/articles_details.css">
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
			<h1>Компьютер для <?= $articles['title'] ?></h1>

			<img class="img-1" src="css/img_articles_detail/<?= $articles['detail_photo'] ?>.png" alt="">
			<div class="block_small">
				<p>Дата выпуска: <?= $articles['date'] ?></p>
				<p>Жанр: <?= $articles['genre'] ?></p>
				<p>Разработчик: <?= $articles['developer'] ?></p>
				<p>Издательство: <?= $articles['publisher'] ?></p>
				<p class="big_txt"><?= $articles['detail_text'] ?></p>
			</div>
			<div class="block_big">
				<h1>Системные требования <?= $articles['title'] ?></h1>
				<p>Минимальные системные требования</p>
				<ul>
					<li>Процессор: <?= $articles['proccessor'] ?></li>
					<li>Видеокарта: <?= $articles['graphics'] ?></li>
					<li>Оперативная память: <?= $articles['ram'] ?></li>
					<li>Место на диске: <?= $articles['ssd'] ?></li>
				</ul>
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