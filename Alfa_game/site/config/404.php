<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha game</title>
	<link rel="stylesheet" href="404.css">
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
			<div class="basket_img"></div>
			<a href="">игровые компьютеры</a>
			<a href="">игровые ноутбуки</a>
			<a href="">аксессуары и периферия</a>
		</nav>

		<main>
			<h1 style="color: #9B0505;">404</h1>
			<h2>Страница не найдена :(</h2>
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
        <style>
            * {
	margin: 0px;
	padding: 0px;
}

.main_grid {
	display: grid;
	grid-template-columns: 1fr;
	grid-template-rows: 40px 65px 1184px 278px;
	grid-template-areas: 
		"header"
		"nav"
		"main"
		"footer";
}

.main_grid * {
	font-family: sans-serif;
	color: white;
}

header {
	padding-left: 36px;
	padding-top: 11px;
	padding-right: 43px;
	background: #626262;
	grid-area: header;
}

nav {
	grid-area: nav;
	background: #2D2D2D;
	padding-left: 36px;
	padding-top: 10px;
	padding-right: 43px;
	text-align: right;
}

main {
	background: black;
	grid-area: main;
	padding-left: 36px;
	padding-top: 37px;
	padding-right: 43px;
}

footer {
	background: #2D2D2D;
	grid-area: footer;
	padding-left: 24px;
	padding-right: 43px;
	padding-top: 31px;
}

header a {
	color: #FFF;
	font-family: sans-serif;
	font-size: 15px;
	font-style: normal;
	font-weight: 500;
	line-height: normal;
	text-decoration: none;
	margin-right: 34px;
	transition-duration: 0.3s;
}

header a:hover {
	transform: scale(2.0);
	color: red;
}

.phone_number {
	text-align: right;
	margin-left: 821px;
}



.img_logo {
	float: left;
	background-image: url("img_main/logo.png");
	width: 45px;
	height: 45px;

}

.basket_img {
	background-image: url("img_main/basket.png");
	width: 40px;
	height: 40px;
	float: right;
}

nav a {
	color: #FFF;
	font-family: sans-serif;
	font-size: 17px;
	font-style: normal;
	font-weight: 500;
	text-transform: uppercase;
	text-decoration: none;
	text-align: right;
	margin-right: 44px;
	line-height: 45px;
	transition-duration: 0.3s;
}

nav a:hover {
	transform: scale(2.0);
	color: red;
}

h2 {
	margin-top: 70px;
	color: #FFF;
	font-family: sans-serif;
	font-size: 27px;
	font-style: normal;
	font-weight: 700;
	text-align: center;
}




footer div {
	display: inline-block;
	margin-right: 54px;
	float: right;
}

footer h3 {
	color: #FFF;
	font-family: Inter;
	font-size: 20px;
	font-style: normal;
	font-weight: 700;
	line-height: normal;
	margin-bottom: 3px;
}

footer p {
	color: #FFF;
	font-family: Inter;
	font-size: 15px;
	font-style: normal;
	font-weight: 400;
	line-height: normal;
	margin-bottom: 2px;
}

footer .line {
	width: 1370px;
	height: 1px;
	background: white;
	margin-top: 76px;
}

footer .txt-link {
	color: #FFF;
	font-family: sans-serif;
	font-size: 15px;
	font-style: normal;
	font-weight: 700;
	line-height: normal;
	margin-left: 17px;
	text-decoration: none;
}

footer .link {
	margin-top: 40px;
}

footer a {
	text-decoration: none;
}

.block_gray h3:hover {
	color: red;
	cursor: pointer;
}

h1 {
	color: red;
	font-family: sans-serif;
	text-align: center;
	font-size: 200px;
	font-style: normal;
	font-weight: 700;
	line-height: normal;
	margin-top: 150px;
	margin-bottom: 20px;
}

h2 {
	color: #FFF;
	font-family: sans-serif;
	font-size: 80px;
	font-style: normal;
	font-weight: 700;
	line-height: normal;
	text-align: center;
}
        </style>
	</div>
</body>
</html>