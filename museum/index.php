<?php


session_start();
$isLoggedIn = isset($_SESSION["loggedin"]) && $_SESSION["loggedin"];
// // Logout functionality
// $db = mysqli_connect('localhost','root', '', 'Museum' );
// if (isset($_POST['logout'])) {
//     // Удаляем все переменные сессии
//     $_SESSION = array();

//     // Уничтожаем сессию
//     session_destroy();

//     // Перенаправляем на главную страницу или другую
//     header('Location: http://localhost:8000/index.php');
//     exit;
// }
// ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link href="style/style.css" rel="stylesheet">
		<link href="style/owl.carousel.css" rel="stylesheet">
		<link href="font/fonts.css" rel="stylesheet">
		<link href="style/magnific-popup.css" rel="stylesheet">
		<link href="style/jquery-ui-timepicker-addon.min.css" rel="stylesheet">
		<script src="https://www.google.com/recaptcha/enterprise.js?render=6LcoKwAqAAAAADM04kEKuOKyJEpLaasAg2FOWCUM"></script>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-3.7.1.js" type="text/javascript" defer></script>
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" defer></script>
		<script src="js/main.js" type="text/javascript" defer></script>
		<script src="js/jquery.ui.datepicker-ru.js" type="text/javascript" defer></script>
		<script src="js/owl.carousel.js" type="text/javascript" defer></script>
		<script src="js/jquery.magnific-popup.min.js" type="text/javascript" defer></script>
		<script src="js/jquery-ui-timepicker-addon.min.js" type="text/javascript" defer></script>
		<script src="js/script.js" defer></script>
		<link href="style/style.css" rel="stylesheet">
    <link href="style/magnific-popup.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    </script>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="main_inner dflex">
					<div class="main_logo">
						<a href="/"><img src="img/logo.png"></a>
					</div>
					<div class="main_menu">
						<ul class="dflex">
							<li><a href="buy.html">Купить билет</a></li>
							<li><a href="afisha.html">Афиша</a></li>
							<li><a href="ekcponatu.html">Экспонаты</a></li>
							<li><a href="about.html">О музее</a></li>
						</ul>
					</div>
					<div class="header_profile">
						<a href="#login-form" style="display: <?php echo $isLoggedIn ? 'none' : 'block'; ?>;" class="login">Войти / Зарегистрироваться</a>
					</div>
				</div>
			</div>

			<div class="burger-content">
				<nav role="navigation">
				  <div id="menuToggle">
					<input type="checkbox" />
					  <span></span>
					  <span></span>
					  <span></span>
				  <ul id="menu">
					<li><a href="buy.html">Купить билет</a></li>
					<li><a href="afisha.html">Афиша</a></li>
					<li><a href="ekcponatu.html">Экспонаты</a></li>
					<li><a href="about.html">О музее</a></li>
				  </ul>
				 </div>
				</nav>
			  </div>
			  
		</header>
		<div class="main_content">
			<div class="container">
				<div class="main_block_info">
					<div class="main_block_title">CREEPY</div>
					<div class="main_block_subtitle">PAINTINGS</div>
					<div class="main_block_txt">Полотна, которые пугают, ужасают и вызывают отвращение.</div>
					<div class="link_block">
						<a href="profile.html">Купить билет</a>
					</div>
				</div>
			</div>
		</div>
		<div class="anons_block">
			<div class="container">
				<div class="block_title">Новые выставки</div>
				<div class="anons_items dflex">
					<div class="anons_item">
						<div class="anons_count">01</div>
						<div class="anons_inner dflex">
							<div class="anons_info dflex">
								<div class="anons_info_inner">
									<div class="anons_title">Драконы, черти и гpифоны. Фантастические существа в Creepy Paintings</div>
									<div class="anons_txt">Выставка посвящена фантастическим существам славянской мифологии</div>
								</div>	
								<div class="anons_date">01 июня - 31 августа</div>
							</div>
							<div class="anons_img"><img src="img/Vistavka.png"></div>
						</div>
					</div>
					<div class="anons_item">
						<div class="anons_count">02</div>
						<div class="anons_inner dflex">
							<div class="anons_info dflex">
								<div class="anons_info_inner">
									<div class="anons_title">7 смертных грехов в олицетворении людей</div>
									<div class="anons_txt">Выставка посвящена 7 смертным грехам людей: гордыня, жадность, гнев, зависть, похоть, чревоугодие и уныние</div>
								</div>	
								<div class="anons_date">01 июня - 31 августа</div>
							</div>
							<div class="anons_img"><img src="img/Vistavka2.png"></div>
						</div>
					</div>
					<div class="anons_item">
						<div class="anons_count">03</div>
						<div class="anons_inner dflex">
							<div class="anons_info dflex">
								<div class="anons_info_inner">
									<div class="anons_title">Мертвый экспонат</div>
									<div class="anons_txt">Это то, о чем вы подумали... Картины, написанные в момент смерти людей</div>
								</div>	
								<div class="anons_date">01 июня - 31 августа</div>
							</div>
							<div class="anons_img"><img src="img/teodor-zheriko-golova-utoplennika 1Vistavka3.png"></div>
						</div>
					</div>
					<div class="anons_item">
						<div class="anons_count">04</div>
						<div class="anons_inner dflex">
							<div class="anons_info dflex">
								<div class="anons_info_inner">
									<div class="anons_title">Печальная реальность</div>
									<div class="anons_txt">Выставка посвящена картинам, которые основаны на реальных событиях</div>
								</div>	
								<div class="anons_date">01 июня - 31 августа</div>
							</div>
							<div class="anons_img"><img src="img/Vistavka4.png"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="buy_block">
			<div class="container">
				<div class="block_title">Купить билет</div>
				<div class="ticket_items dflex">
					<div class="ticket_item">
						<div class="ticket_img"><img src="img/BIlet1.png"></div>
						<div class="ticket_date dflex">
							<p class="day">01</p>
							<p class="month">06<span>2024</span></p>
						</div>
						<div class="ticket_name dflex">ДЕТСКИЙ ><span>билет</span></div>
						<div class="ticket_price_block dflex">
							<div class="ticket_price">700руб.</div>
							<div class="ticket_qr"><img src="img/qr.png"></div>
						</div>
					</div>
					<div class="ticket_item">
						<div class="ticket_img"><img src="img/BIlet2.png"></div>
						<div class="ticket_date dflex">
							<p class="day">01</p>
							<p class="month">06<span>2024</span></p>
						</div>
						<div class="ticket_name dflex">ВЗРОСЛЫЙ ><span>билет</span></div>
						<div class="ticket_price_block dflex">
							<div class="ticket_price">900руб.</div>
							<div class="ticket_qr"><img src="img/qr.png"></div>
						</div>
					</div>
					<div class="ticket_item">
						<div class="ticket_img"><img src="img/BIlet3.png"></div>
						<div class="ticket_date dflex">
							<p class="day">01</p>
							<p class="month">06<span>2024</span></p>
						</div>
						<div class="ticket_name dflex">ЛЬГОТНЫЙ ><span>билет</span></div>
						<div class="ticket_price_block dflex">
							<div class="ticket_price">400руб.</div>
							<div class="ticket_qr"><img src="img/qr.png"></div>
						</div>
					</div>
				</div>
				<div class="link_block link_item">
					<a href="">Купить</a>
				</div>
			</div>
		</div>
		<div class="popular_block">
			<div class="container">
				<div class="block_title">Популярные экспонаты музея</div>
				<div class="popular_items owl-carousel">
					<div class="popular_item">
						<img src="img/image 6Slider1.png">
						<div class="popular_item_info">
							<div class="popular_title">Могильные товары</div>
							<div class="popular_subtitle">Джефф Кристенсен</div>
						</div>
					</div>
					<div class="popular_item">
						<img src="img/image 4slider2.png">
						<div class="popular_item_info">
							<div class="popular_title">Марионетка</div>
							<div class="popular_subtitle">Сантьяго Карузо</div>
						</div>
					</div>
					<div class="popular_item">
						<img src="img/image 5Slider 3.png">
						<div class="popular_item_info">
							<div class="popular_title">Ночное пресмыкающееся</div>
							<div class="popular_subtitle">Здислав Бексиньский</div>
						</div>
					</div>
					<div class="popular_item">
						<img src="img/image 4slider2.png">
						<div class="popular_item_info">
							<div class="popular_title">Марионетка</div>
							<div class="popular_subtitle">Сантьяго Карузо</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about_block">
			<div class="container">
				<div class="block_title">О музее</div>
				<div class="about_block_info">
					<p>Добро пожаловать в <span>Музей Creepy Paintigs</span>, где красота встречается с жутью, а реальность переплетается с кошмаром.</p> <p>Музей <span>Creepy Paintigs</span> - не для тех, кто боится темноты и неизвестного. Это место для ценителей жуткого и мистического, для тех, кто ищет внезапные и неожиданные эмоции.</p>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="main_inner dflex">
					<div class="main_logo">
						<a href="/"><img src="img/logo.png"></a>
					</div>
					<div class="main_menu">
						<ul class="dflex">
							<li><a href="">Купить билет</a></li>
							<li><a href="">Афиша</a></li>
							<li><a href="">Экспонаты</a></li>
							<li><a href="">О музее</a></li>
						</ul>
					</div>
					<div class="main_menu_social">
						<ul class="dflex">
							<li><a href=""><img src="img/SocialMedia/VK comsocilamedia.png"></a></li>
							<li><a href=""><img src="img/SocialMedia/Facebooksocilamedia.png"></a></a></li>
							<li><a href=""><img src="img/SocialMedia/Telegram Appsocilamedia.png"></a></a></li>
							<li><a href=""><img src="img/SocialMedia/Instagramsocilamedia.png"></a></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<div id="login-form" class="login-form mfp-hide">
			<div class="tabs-wrapper">
				<div class="tabs">
					<span class="tab">Войти</span> / 
					<span class="tab">Регистрация</span>
				</div>
				<div class="tabs-content">
					<div class="tab-item">
						<form class="form" action="./php/auth.php" method="post">
							<div class="container-form">
								<div class="input-form">
									<label for="loginPassword">Пароль</label>
									<input name="loginPassword" class="input" type="password">
								</div>
								<div class="input-form">
									<label for="loginEmail">E-mail</label>
									<input name="loginEmail"class="input" type="email">
								</div>
								<div class="btn-form">
									<button class="btn" type="submit">Войти</button>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-item">
						<form class="form" action="./php/reg.php" method="post">// registration
							<div class="container-form">
								<div class="input-form">
									<label for="reg-name">Имя</label>
									<input class="input" name="reg-name" type="text">
								</div>
								<div class="input-form">
									<label for="reg-phone">Телефон</label>
									<input name="reg-phone" class="input" type="tel">
								</div>
								<div class="input-form">
									<label for="reg-email">E-mail</label>
									<input name="reg-email"class="input" type="email">
								</div>
								<div class="dflex password-block">
									<div class="input-form">
										<label for="reg-password">Пароль</label>
										<input name="reg-password" class="input" type="password">
									</div>
									<div class="input-form">
										<label for="reg-password-again">Повторите пароль</label>
										<input name="reg-password-again" class="input" type="password">
									</div>
								</div>
								<label class="check_form">Согласен с условиями конфедициальности
								  <input type="checkbox" class="checkbox" />
								  <span class="checkmark"></span>
								</label>
								<div class="btn-form">
									<button class="btn" type="submit" >Регистрация</button>
								</div>
							</div>
							<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6LcoKwAqAAAAADM04kEKuOKyJEpLaasAg2FOWCUM', {action: 'LOGIN'});
    });
  }
</script>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="profile-form" class="profile-form mfp-hide">
			<div class="profile_block dflex">
				<div class="profile_img"><img src="img/profile.png"></div>
				<div class="profile_name_block">
					<div class="profile_name">Алексей Осипов<a href="/"><img src="img/Settings.png"></a></div>
					<div class="profile_city">Г. Москва</div>
				</div>
			</div>
			<div class="profile_info dflex">
				Информация не заполнена
			</div>
		</div>
	</body>
</html>