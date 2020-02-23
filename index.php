<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Сварочные аппараты Ресанта</title>
	<meta name="description" content="Сварочные аппараты Ресанта в магазине 220 вольт">
	<meta name="keywords" content="аппарат для сварки,сварочное оборудование Ресанта, сварка, электроинструмент">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/style/normalize.css" rel="stylesheet">
	<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap-theme.min.css">
	<link href="/style/style.min.css" rel="stylesheet">
	<script src="/node_modules/jquery/dist/jquery.min.js"></script>
	<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/scripts_v1.js"></script>
	<script>
		window.onload = function() {
			var deadline="October 30 2019 00:00:00 GMT+0300"; //for Ukraine
			initializeClock('countdown', deadline);
			initializeClock('countdown2', deadline);
		}
	</script>
</head>
<body>
<header class="header-bg">
	<div class="header container">
			<div class="logo">
				<img src="/img/logo.png" alt="магазин 220 Вольт" class="logo-img" width="125" height="103">
			</div>
			<div class="name">
				<h2>Магазин электроинструмента «220 Вольт»</h2>
				<h1>Сварочные аппараты «Ресанта» в Киеве<h1>
			</div>
			<div class="header-contacts">
				<div class="tel">
					<a href="tel:+380447707070">
						+38 044 770-70-70
					</a>
				</div>
				<div class="zakaz">
					<button class="button" data-toggle="modal" data-target="#exampleModal">Закажите звонок</button>
				</div>
			</div>
	</div>
</header>
<main class="main">
	<div class="stock-all">
		<div class="stock-menu container">
			<div class="stock">
				<div class="stock-text1">
					<span class="stock-text-red">самые низкие цены</span> на аппараты «Ресанта»<br>
					<span class="stock-text-upper">Только 3 дня (с 10 по 13 сентября)</span>
				</div>
				<div class="stock-text3">
					Оставьте заявку сейчас и вы сможете купить оборудование<br>
					со скидкой еще в течение 5-ти дней
				</div>
				<div class="stock-time countdown" id="countdown">
					<div class="stock-text">
						До конца акции:
					</div>
					<div class="stock-time-block">
						<div class="stock-number countdown-number days countdown-time">
						</div>
						<div class="stock-text2">
							:
						</div>
						<div class="stock-number countdown-number hours countdown-time">
						</div>
						<div class="stock-text2">
							:
						</div>
						<div class="stock-number countdown-number minutes">
						</div>
						<div class="stock-text2">
							:
						</div>
						<div class="stock-number countdown-number seconds">
						</div>
					</div>
				</div>
			</div>
			<div class="request">
				<div class="request-text">
					Отправьте заявку на покупку
					оборудования со скидкой
				</div>
				<form action="" method="post" enctype="text/plain" id="form">
					<input type="text" id="name2" name="name2" placeholder="Ваше имя*" class="request-input form-control">
					<div id="err3"></div>
					<input type="text" id="tel2" name="tel2" placeholder="Ваш телефон*" class="request-input form-control">
					<div id="err4"></div>
					<div class="button2-margin">
						<input type="button" id="input2" name="input2" class="button2" value="Заказать оборудование" onclick="check2()">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="main-text container">
		Сварочные аппараты по акции
	</div>
	<div class="product-all container">
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="product">
					<img src="/img/160_small.jpg" alt="ресанта саи 160" width="220" height="200" data-toggle="modal" data-target="#exampleModal3" class="product-img">
					<div class="product-text">
						Сварочный аппарат РЕСАНТА САИ 160
						инверторный
					</div>
					<div class="product-price">
						<span class="old-price">4865</span>
						<span class="new-price">4524 грн.</span>
					</div>
					<div class="zakaz">
						<button class="button3" data-toggle="modal" data-target="#exampleModal">КУПИТЬ ОБОРУДОВАНИЕ</button>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="product">
					<img src="/img/190_small.jpg" alt="ресанта саи 190"  width="200" height="200" data-toggle="modal" data-target="#exampleModal4" class="product-img">
					<div class="product-text">
						Сварочный аппарат РЕСАНТА 190
						инверторный
					</div>
					<div class="product-price">
						<span class="old-price">6023</span>
						<span class="new-price">5601 грн.</span>
					</div>
					<div class="zakaz">
						<button class="button3" data-toggle="modal" data-target="#exampleModal">КУПИТЬ ОБОРУДОВАНИЕ</button>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="product">
					<img src="/img/220_small.jpg" alt="ресанта саи 220" width="260" height="200" data-toggle="modal" data-target="#exampleModal5" class="product-img">
					<div class="product-text">
						Сварочный аппарат РЕСАНТА САИ 220
						инверторный
					</div>
					<div class="product-price">
						<span class="old-price">6950</span>
						<span class="new-price">6463 грн.</span>
					</div>
					<div class="zakaz">
						<button class="button3" data-toggle="modal" data-target="#exampleModal">КУПИТЬ ОБОРУДОВАНИЕ</button>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="product">
					<img src="/img/160пн_small.jpg" alt="ресанта саи 160пг" width="240" height="200" data-toggle="modal" data-target="#exampleModal6" class="product-img">
					<div class="product-text">
						Сварочный аппарат РЕСАНТА САИ 160НП
						инверторный
					</div>
					<div class="product-price">
						<span class="old-price">6811</span>
						<span class="new-price">6335 грн.</span>
					</div>
					<div class="zakaz">
						<button class="button3" data-toggle="modal" data-target="#exampleModal">КУПИТЬ ОБОРУДОВАНИЕ</button>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="product">
					<img src="/img/190пн_small.jpg" alt="ресанта саи 190пн"  width="240" height="200" data-toggle="modal" data-target="#exampleModal7" class="product-img">
					<div class="product-text">
						Сварочный аппарат РЕСАНТА САИ 190ПН
						инверторный
					</div>
					<div class="product-price">
						<span class="old-price">8062</span>
						<span class="new-price">7498 грн.</span>
					</div>
					<div class="zakaz">
						<button class="button3" data-toggle="modal" data-target="#exampleModal">КУПИТЬ ОБОРУДОВАНИЕ</button>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="product">
					<img src="/img/220пн_small.jpg" alt="ресанта саи 220пн" width="240" height="200" data-toggle="modal" data-target="#exampleModal8" class="product-img">
					<div class="product-text">
						Сварочный аппарат РЕСАНТА САИ 220НП
						инверторный
					</div>
					<div class="product-price">
						<span class="old-price">8572</span>
						<span class="new-price">7971 грн.</span>
					</div>
					<div class="zakaz">
						<button class="button3" data-toggle="modal" data-target="#exampleModal">КУПИТЬ ОБОРУДОВАНИЕ</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-text container">
		В чем достоинства аппаратов «Ресанта»?
	</div>
	<ul class="container">
		<li>
			<div class="li-text">
				<h3>Сварочные аппараты Ресанта — компактные и легкие сварочные аппараты для мобильного использования.</h3>
				Применяются для ручной дуговой сварки, изготовления и ремонта металлоконструкций, трубопроводов, контейнеров и других
				элементов. Аппараты сконструированы на IGBT транзисторах. Стабильно работают при входном напряжении от 160 до 240 В. Для
				более точного результата и получения более ровных швов предусмотрен удобный регулятор тока. Реализованы функции «Anti Stick»
				(антизалипание) и «Hot Start» (горячий старт).
			</div>
		</li>
		<li>
			<div class="li-text">
				<h3>Инверторные сварочные аппараты Ресанта работают в широком диапазоне температур: от -10 до +40°C.</h3>
				Надежность обеспечена высокопрочным металлическим корпусом и системой принудительного туннельного охлаждения. Имеется
				функция отключения при перегреве. На переднюю панель вынесены 2 светодиодных индикатора: перегрева и подключения к сети.
				Класс защиты корпуса аппарата - IP21.1.
			</div>
		</li>
		<li>
			<div class="li-text">
				<h3>Со сварочными аппаратами удобно обращаться, особого технического обслуживания не требуется.</h3>
				Для простой транспортировки прибор снабжен практичным ремнем. Также в комплекте поставки сетевой шнур на 220В, кабель
				держателя электрода (2 м) и кабель с клеммой заземления (1,5 м).
			</div>
		</li>
	</ul>
	<div class="how-buy">
		<div class="how container">
			Как купить?
			<div class="how-all">
				<div class="how-block">
					<div class="how-foto-text">
						<img src="/img/img1.jpg" alt="call-to-us" class="img-border">
						<div class="how-text">
							Звоните или оставляете<br>
							заявку на сайте
						</div>
					</div>
					<div class="strelka">
					</div>
				</div>
				<div class="how-block">
					<div class="how-foto-text">
						<img src="/img/img2.jpg" alt="call_from-us" class="img-border">
						<div class="how-text">
							Мы перезваниваем вам<br>
							и уточняем заказ
						</div>
					</div>
					<div class="strelka">
					</div>
				</div>
				<div class="how-block">
					<div class="how-foto-text">
						<img src="/img/img3.jpg" alt="сварочный аппарат" class="img-border">
						<div class="how-text">
							Приезжаете в магазин или<br>
							доставляем вам заказ
						</div>
					</div>
					<div class="strelka">
					</div>
				</div>
				<div class="how-block">
					<div class="how-foto-text">
						<img src="/img/img4.jpg" alt="сварка" class="img-border">
						<div class="how-text">
							С удовольствием<br>
							используете оборудование
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-text container">
		Почему выбирают нас?
	</div>
	<ul class="container">
		<li>
			<div class="li-text">
				<span class="choise-span">Мы ценим ваше время,</span> поэтому важнейший принцип нашей работы – оперативность. Мы гарантируем быструю отгрузку и доставку Вашего заказа
			</div>
		</li>
		<li>
			<div class="li-text">
				<span class="choise-span">Даже самые требовательные клиенты оценят простоту и удобство заказа в нашем магазине.</span> Наши опытные менеджеры проконсультируют, ответят на любые вопросы, помогут с выбором и моментально оформят Ваш заказ.
			</div>
		</li>
		<li>
			<div class="li-text">
				<span class="choise-span">Наш магазин предлагает широчайший ассортимент электроинструмента, строительной и силовой техники и оборудования</span> от ведущих мировых производителей по самым низким ценам. Hitachi, Bosch, Makita, Metabo, Hammer, Mtd, Echo, Husqvarna, Skil, Black & Decker, Partner, Dremel – у нас Вы всегда найдете низкие цены на высокое качество.
			</div>
		</li>
	</ul>
	
	<div class="stock-all">
		<div class="stock-menu container">
			<div class="stock">
				<div class="stock-text1">
					<span class="stock-text-red">самые низкие цены</span> на аппараты «Ресанта»<br>
					<span class="stock-text-upper">Только 3 дня (с 10 по 13 сентября)</span>
				</div>
				<div class="stock-text3">
					Оставьте заявку сейчас и вы сможете купить оборудование<br>
					со скидкой еще в течение 5-ти дней
				</div>
				<div class="stock-time countdown" id="countdown2">
					<div class="stock-text">
						До конца акции:
					</div>
					<div class="stock-time-block">
						<div class="stock-number countdown-number days countdown-time">
						</div>
						<div class="stock-text2">
							:
						</div>
						<div class="stock-number countdown-number hours countdown-time">
						</div>
						<div class="stock-text2">
							:
						</div>
						<div class="stock-number countdown-number minutes">
						</div>
						<div class="stock-text2">
							:
						</div>
						<div class="stock-number countdown-number seconds">
						</div>
					</div>
				</div>
			</div>
			<div class="request">
				<div class="request-text">
					Отправьте заявку на покупку
					оборудования со скидкой
				</div>
				<form action="" method="post" enctype="text/plain" id="form">
					<input type="text" id="name3" name="name2" placeholder="Ваше имя*" class="request-input form-control">
					<div id="err5"></div>
					<input type="text" id="tel3" name="tel2" placeholder="Ваш телефон*" class="request-input form-control">
					<div id="err6"></div>
					<div class="button2-margin">
						<input type="button" id="input3" name="input2" class="button2" value="Заказать оборудование" onclick="check3()">
					</div>
				</form>
			</div>
		</div>
	</div>
</main>


<footer>
	<div class="container">
		<div class="footer-text1">
			Остались вопросы? Задайте их менеджеру
			<a href="tel:+380447707070">
				+38 044 770-70-70
			</a>
		</div>
		<div class="footer-text2">
			Или
			<a href="#" data-toggle="modal" data-target="#exampleModal">закажите обратный звонок</a>
		</div>
		<div class="copyright">
			© best-instrument40.ua
		</div>
		<address class="address">
			г.Киев, ул.Сикорского, д.52, оф.1
		</address>
	</div>
</footer>
</body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content request-modal" id="modal-zakaz" style="display:block;">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<br>
			<div class="request-text-modal">
				Отправьте заявку и мы свяжемся с Вами в ближайшее время
			</div>
			<form action="" method="post" enctype="text/plain" id="form">
				<span class="form-text">Ваше имя*</span>
				<input type="text" id="name" name="name" size="30" class="request-input-modal">
				<div id="err1"></div>
				<span class="form-text">Ваш телефон*</span>
				<input type="text" id="tel" name="tel" size="30" class="request-input-modal">
				<div id="err2"></div>
				<div class="button2-margin">
					<input type="button" id="input" name="zakaz" onclick="check()" class="button2"  value="ОСТАВИТЬ ЗАЯВКУ">
				</div>
			</form>
		</div>
		<div class="modal-content request-modal" id="modal-thank-you">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<br>
			<div class="request-text-modal2">
				Спасибо за заявку!
			</div>
			<div class="request-text-modal3">
				Наш менеджер перезвонит вам в ближайшее время.
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content request-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<br>
			<div class="request-text-modal2">
				Спасибо за заявку!
			</div>
			<div class="request-text-modal3">
				Наш менеджер перезвонит вам в ближайшее время.
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	<div class="modal-dialog2 modal-width-img" role="document">
		<div class="modal-content request-modal2">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<br>
			<img src="/img/160.jpg" alt="ресанта саи 160 big">
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	<div class="modal-dialog2 modal-width-img" role="document">
		<div class="modal-content request-modal2">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<br>
			<img src="/img/190.jpg" alt="ресанта саи 190 big">
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	<div class="modal-dialog2 modal-width-img" role="document">
		<div class="modal-content request-modal2">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<br>
			<img src="/img/220.jpg" alt="ресанта саи 220 big">
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	<div class="modal-dialog2 modal-width-img" role="document">
		<div class="modal-content request-modal2">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<br>
			<img src="/img/160пн.jpg" alt="ресанта саи 160пн big">
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	<div class="modal-dialog2 modal-width-img" role="document">
		<div class="modal-content request-modal2">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<br>
			<img src="/img/190пн.jpg" alt="ресанта саи 190пн big">
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	<div class="modal-dialog2 modal-width-img" role="document">
		<div class="modal-content request-modal2">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<br>
			<img src="/img/220пн.jpg" alt="ресанта саи 220пн big">
		</div>
	</div>
</div>


</html>
