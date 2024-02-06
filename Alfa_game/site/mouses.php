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
	<link rel="stylesheet" href="css/mouses.css">
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

			<h2>Игровые мыши</h2>

			<div class="parent">
				<?php

					$products = mysqli_query($link, query:"SELECT *  FROM `products` WHERE `category_id` = '4'"); /* Выборка элементов из базы данных */
					$products = mysqli_fetch_all($products);
					foreach ($products as $products) { /* вывод всех данных через цикл */
				?>
				<div class="div">
					<p>Игровая мышь</p>
					<img class="img" src="css/img_mouses/<?= $products[8] ?>.png" alt="">

					<h2><?= $products[1] ?></h2>
					<p class="p"><?= $products[2] ?></p>
					<p class="price">От <?= $products[3] ?> Р</p>
					<button><a href="detail_mouses.php?id=<?= $products[0] ?>">Подробнее</a></button>
				</div>

				<?php
					}

				?>
			</div>

			<h2 class="h">Часто задаваемые вопросы</h2>

			<button class="red_line">Куда осуществляется доставка?</button>
			<div class="content">Мы доставляем игровые компьютеры по всей России транспортными компаниями "Деловые линии" и "ПЭК". Срок доставки зависит
				 от вашего города и обычно занимает от 4 дней. Отправляемый груз страхуется на полную стоимость и надежно упаковывается. Рассчитать примерный срок 
				 и стоимость доставки можно в Калькуляторе или обратившись к нам по любому удобному контакту.</div>
				 
			<button class="red_line">Как можно оплатить заказ?</button>
			<div class="content">Вы можете оплатить заказ одним из следующих способов:

			– наличными при самовывозе или курьерской доставке – банковской картой онлайн – оплатить по счету для юридических лиц – в кредит онлайн или нашем магазине</div>

			<button class="red_line">Сколько длится гарантия на игровой компьютер?</button>
			<div class="content">
			Мы даем гарантию на все наши компьютеры в 1 год. В течение этого срока в случае гарантийной неисправности мы заменим вышедший
			 из строя компонент на новый или аналогичный. У отдельных комплектующих гарантийный срок превышает 1 год, например гарантия на видеокарту
			 может быть 3 года, а на оперативную память и вовсе 10 лет. В таком случае гарантия на эту комплектующую не заканчивается
			 через 12 месяцев, вместе с гарантией на компьютер, а продолжается до конца ее личного гарантийного срока.
			</div>

			<button class="red_line">Сколько времени займет сборка моего компьютера?</button>
			<div class="content">Все компьютеры собираются под заказ, таким образом вы можете быть уверены, что к вам придет полностью новый компьютер. Сроки сборки зависят от сложности заказа / редкости комплектующих. В среднем это занимает 3-5 дней. Срок может быть меньше в случае начального игрового компьютера или больше в случае
				 флагманского компьютера с, например, редким корпусом. Мы рассчитываем сроки сборки
				  после поступления заказа и обговариваем с вами.</div>

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
	<script>
		let coll = document.getElementsByClassName('red_line');
		for(let i = 0; i < coll.length; i++) {
			coll[i].addEventListener('click', function (){
				this.classList.toggle('active');
				let content = this.nextElementSibling;
				if (content.style.maxHeight) {
					content.style.maxHeight = null;
				} else {
					content.style.maxHeight =content.scrollHeight + 'px'
				}
			})
		}
	</script>
</body>
</html>