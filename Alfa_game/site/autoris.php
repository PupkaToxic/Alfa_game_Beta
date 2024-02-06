<?php 

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

session_start();
if ($_SESSION['user']) {
	header('Location: main.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha game</title>
	<link rel="stylesheet" href="css/autoriss.css">
</head>
<body>
	<div class="main_grid">
		<header>
			<a href="">Контакты</a>
			<a href="">Отзывы</a>
			<a href="">Оплата</a>
			<a href="">Доставка</a>
			<a href="">Статьи</a>
		</header>

		<nav>
			<div class="img_logo"></div>
			<a href="">игровые компьютеры</a>
			<a href="">игровые ноутбуки</a>
			<a href="">аксессуары и периферия</a>
		</nav>

		<main>
			<h1>Авторизация</h1>
			<div class="gray_block">
				<form method="post" onsubmit="return CheckForm(this)" action="config/signin.php">
					<label for="name">Имя пользователя</label>
					<input type="text" name="name" class="nickname" id="name">

					<label for="pass">Пароль</label>
					<input type="password" name="password" class="password" id="pass"> 

					<button type="submit">Авторизоваться</button>
				</form>
				<p id="error">
					<?php
						if ($_SESSION['message']){
							echo $_SESSION['message'];
						}
						unset($_SESSION['message']);
					?>
				</p>
				<a href="register.php">Нет аккаунта? Зарегистрируйтесь!</a>
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
		<script src="JS/autoris.js"></script>

	</div>
</body>
</html>