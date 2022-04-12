<?php
session_start();
require_once 'constants/constants.php';
if (!isset($_SESSION['basket'])) $_SESSION['basket']=array();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Электронные сигареты JOY - SWEET FANTASIES</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name = "description" content = "Вейп с мировым признанием - горячая новинка на Украинском рынке! 
	Усовершенствованная литая конструкция - компактная, легкая и простая в эксплуатации. 
	Не требует никакого ухода и обслуживания!" />
  <meta name = "keywords" content = "электронная сигарета, вейп" /> 
		<meta property="og:title" content="Электронные сигареты JOY - SWEET FANTASIES">
		<meta property="og:site_name" content="JOY - SWEET FANTASIES">
		<meta property="og:description" content="Вейп с мировым признанием - горячая новинка на Украинском рынке! 
	Усовершенствованная литая конструкция - компактная, легкая и простая в эксплуатации. 
	Не требует никакого ухода и обслуживания!">
		<meta property="og:image" content="images/joyPod2-2.jpg">
  <meta name="document-state" content="dynamic"/>
  <meta name="robots" content="index,follow"/>
  <meta name="copyright" content=""/>
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/favicon.png" type="image/png"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
<div id="headMenu">
	<p><a href="#infoGoods">Описание</a></p>
	<p><a href="#cardGoods">Товар</a></p>
	<p><a href="#bottom">Контакты</a></p>
	<img id="sbasket" class="cursor" src="images/basket.png"/>
</div>
<div id="slider">
<img id="slajderFoto" src="images/mango1.jpg"/>
	<div id="slajderFoto1" class="headSlider"><img src="images/mango1.jpg"/></div>
	<div id="slajderFoto2" class="headSlider"><img src="images/bluberry1.jpg"/></div>
	<div id="slajderFoto3" class="headSlider"><img src="images/lushace1.jpg"/></div>
	<div id="slajderFoto4" class="headSlider"><img src="images/mint1.jpg"/></div>
	<div id="slajderFoto5" class="headSlider"><img src="images/peach1.jpg"/></div>
</div>
<div id="greyty" class=""><img src="images/greyty.jpg"/></div>
<div id="cardGoods">
	<h1>Электронные сигареты JOY - SWEET FANTASIES</h1>
<?php
foreach ($goodsArray as $key => $value) {
	echo "
	<div id=\"".$key."Card\" class=\"goods\" style=\"background-image: url('images/".$value['foto']."'); background-size: contain;\">
		<div class=\"goodsInfo\">
				<p>JOY</p>
				<p>".$value['name']."</p>
				<p>".$value['characteristic1']."</p>
				<p>".$value['characteristic2']."</p>
				<p>".$value['price']." грн</p>
				<p><button name=\"".$key."\" class=\"putInBasket\">КУПИТЬ</button></p>
		</div>
	</div>";
}
?>
</div>
<div id="infoGoods">
	<p>Вейп с мировым признанием - горячая новинка на Украинском рынке! 
	Усовершенствованная литая конструкция - компактная, легкая и простая в эксплуатации. 
	Не требует никакого ухода и обслуживания!</p>
	<p>Одноразовый электронный девайс не требует заправки, зарядки или включения!
	Компактный и легкий - он всегда готов к использованию!</p>
	<p>Благодаря специально подобранным компонентам Joy имеет насыщенный вкус и сводит к минимуму вред для здоровья</p>
	<p>Пар не вредит окружающим, включая детей, и не имеет неприятного запаха!</p>
	<p>Жидкость содержит в себе 1,3 мл солевого никотина и 5% крепости. Особенность солевого никотина в том, что его кислотность аналогична рН организма человека. Никаких канцерогенных смол и тяжелых металлов!</p>
	<p>Вкус у одноразовых электронных устройств JOY очень легкий и приятный!</p>
	<p>Ты можешь выбрать любой на свое усмотрение или заказать все сразу! В наличии:</p>
	<p>Tsunami mint (ментол);</p>
	<p>Paradise mango (манго);</p>
	<p>Frisky blueberry not joyful (черника);</p>
	<p>Summer peach (персик);</p>
	<p>Lush ice (арбузный лимонад).</p>
	<p>В электронной сигарете JOY целых 360 затяжек! Этого хватает на 3 дня очень активного курения. При умеренном использовании - хватит на неделю. 
	Все это время тебе не придется заряжать или заправлять устройство жидкостью. 
	JOY готов к использованию в любой момент!</p>
	<p>Достаешь и пользуешься. Что может быть проще? Закажи и убедись в этом лично.</p>	
	<p>Для того, чтобы оформить заказ, достаточно просто заполнить форму на нашем сайте! Наши менеджеры свяжутся с тобой в течение часа и ответят на все твои вопросы.</p>
	<p>Ты можешь оплатить заказ любым удобным для себя способом:</p>
	<p>Наложенным платежом при получении в почтовом отделении</p>
	<p>Непосредственно на банковскую карту</p>
	<p>Доставка осуществляется Новой Почтой по всей Украине в течение нескольких дней!</p>
</div>
<div id="bottom">
	<div class="bottomInfo">
		<p>Телефон: +380667790283</p>
		<p>e-mail: joy@richsales.com.ua</p>
</div>
<div id="basketInfo">
	<div id="basketInfo2">
		<img class="close cursor" id="closeBasket" src="images/close.png"/>	
		<div id="show">
		</div>
	</div>
</div>
	<div class="bottomInfo">
		<a href="https://www.instagram.com/oblakodymok/"><img src="images/inst.png"/></a>
		<a href="https://www.facebook.com/joy1Cloud"><img src="images/fb.png"/></a>
	</div>
	<p>&nbsp;</p>
	<p>Copyright &copy; 2020 RichSales</p>
	<p>&nbsp;</p>
</div>

<div id="top" class="cursor"><p><button>НАВЕРХ</button></p></div>
</body>
</html>