<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Сервисный центр i-mogilev</title>
	<!-- Material Design fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap Material Design -->
	<link href="css/material-design.css" rel="stylesheet">
	<link href="css/ripples.min.css" rel="stylesheet">
	<!-- Custome Styles -->
	<link href="css/style.css" rel="stylesheet" type="text/css"> 
	
</head>
<body> 
 <!--Header_section-->
<header id="header_wrapper">
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="javascript:void(0)">i-mogilev</a>
			</div>
			<div id="main-nav" class="navbar-collapse collapse navbar-responsive-collapse navStyle">
				<ul class="nav navbar-nav" id="mainNav">
					<li class="active"><a href="#hero_section" class="scroll-link">Главная</a></li>
					<li><a href="#aboutUs" class="scroll-link">О нас</a></li>
					<li><a href="#service" class="scroll-link">Услуги</a></li>
					<li><a href="#Portfolio" class="scroll-link">Устройства</a></li>
					<li><a href="#clients" class="scroll-link">Партнеры</a></li>
					<li><a href="#team" class="scroll-link">Команда</a></li>
					<li><a href="#contact" class="scroll-link">Контакты</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
 <!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
	<div class="hero_wrapper">
		<div class="container">
			<div class="hero_section">
				<div class="row">
					<div class="col-lg-5 col-sm-7">
						<div class="top_left_cont zoomIn wow animated"> 
							<h2><strong>Сломался гаджет -</strong>
							<span style="font-size:28px;">теперь наша проблема!</span></h2>
							<p>i-mogilev поможет вам</p>
							<a href="#contact" class="btn btn-raised btn-lg scroll-link">Заказать ремонт</a> </div>
					</div>
					<div class="col-lg-7 col-sm-5">
			<img src="img/main_device_image.png" class="zoomIn wow animated" alt="" />
			</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Hero_Section-->	
<section id="aboutUs" class="companyInfo">
<div class="company-ever">
	<div class="container"> 
		<div class="row company-bg">
			<div class="col-md-6">
				<div class="company-thumb">
					<img src="img/img-1.png" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="content">
					<h2>Акция</h2>
						<p>Закажите ремонт сейчас,и в подарок Вам мы проведём бесплатную диагностику вашего девайса.</p>
					<div class="compayt-button">
						<a href="#contact" class="scroll-link btn btn-effect scroll-link">Заказать<i class="icon-envelope"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- .container -->
</div>
 
<div class="inner_wrapper">
	<div class="container">
		<div class="inner_section">
			<div class="row">
				<div class=" col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right"><img src="img/about-img.jpg" class="withripple delay-03s animated wow " alt=""></div>
				<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
					<div class=" delay-01s animated fadeInDown wow animated">
						<h3>Мы поможем вам починить ваш мобильный телефон фотоаппарат, навигатор, ноутбук , планшет , видеокамеру</h3><br/> 
						<p>Решение любой проблемы, связанной с ремонтом мобильных телефонов, фотоаппаратов, навигаторов, ноутбуков, планшетов, видеокамер. Кратчайшие сроки ремонта, гарантия до 4 месяцев.</p> 

                    </div>
                    <div>
<?php
   function search($words){
	$words=htmlspecialchars($words);
	if($words==="") return false;
	$query_search.='imei='.$words;
	$query ="SELECT * FROM remont WHERE $query_search";
	$mysqli =new mysqli("localhost","root","","base_tech");
	$result_set =$mysqli->query($query);
	$i=0;
	while($row = $result_set->fetch_assoc()) {
		$results[$i]=$row;
		$i++;
	}	
	return $results;
}

  if(isset($_POST['bsearch'])) {
	$words=$_POST['words'];
	$results=search($words);
}
?>
<form  name="search" action="index.php" method="POST">
<input type="text" id="bsearch_text" name="words"  maxlength="15" placeholder="Введите imei номер"/>
<input  type="submit"  id="bsearch" value="Проверить готовность" class="btn btn-raised btn-lg scroll-link" name="bsearch" /> 
</form>
<?php 
if(isset($_POST['bsearch'])) {
	
	if ($results===false) 
		echo "Введите в поле номер заказа";
	if(count($results)==0) echo "Ничего не найдено";
	else 
		for ($i=0;$i<count($results);$i++){
			echo "Модель : ".$results[$i]["model"]."<br />";
			echo "Статус : ".$results[$i]["status"]."<br />";
			echo "Цена работ : ".$results[$i]["cost"]."<br />";
		}
}

?>
                        </div>
		 		</div>
                </div>

			</div>
		</div>
	</div>

<!--Aboutus--> 

<!--Service-->
<section	id="service">
	<div class="container">
		<h2>Почему мы?</h2>
		<div class="service_wrapper">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="service_block withripple">
						<div class="service_icon delay-03s animated wow	zoomIn"> <span><i class="fa fa-lg fa-check-circle"></i></span> </div>
						<h3 class="animated fadeInUp wow">Профессионализм</h3>
						<p class="animated fadeInDown wow">Мы производим ремонт различных уровней сложности. У нас работают квалифицированные и опытные мастера. Поэтому, Вы, скорее всего, получите отремонтированный гаджет обратно уже до конца дня.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">			
					<div class="service_block withripple">
						<div class="service_icon icon2	delay-03s animated wow zoomIn"> <span><i class="fa fa-lg fa-map-marker"></i></span> </div>
						<h3 class="animated fadeInUp wow">Расположение</h3>
						<p class="animated fadeInDown wow">Мы находимся в в самом центре города. Мы находимся на виду. Именно поэтому нам удаётся обслуживать такое количесвто людей ежендевно.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="service_block withripple">
						<div class="service_icon icon3	delay-03s animated wow zoomIn"> <span><i class="fa fa-lg fa-thumbs-up"></i></span> </div>
						<h3 class="animated fadeInUp wow">Качество</h3>
						<p class="animated fadeInDown wow">Нашей мастерской более 10 лет. Опыт работы каждого из мастеров не менее 5 лет. Мы делаем все виды механического и программного ремонта любой сложности.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="service_block withripple">
						<div class="service_icon delay-03s animated wow	zoomIn"> <span><i class="fa fa-lg fa-usd"></i></span> </div>
						<h3 class="animated fadeInUp wow">Стоимость</h3>
						<p class="animated fadeInDown wow">Мы поддерживаем доступный уровень цен потому что ориентируемся не на разовое сотрудничество, а хотим стать мастерской, к которой вы будете обращаться за ремонтом и в последующем.</p>
					</div>
				</div>
			</div>
            		
		</div>
	</div>
</section>
<!--Service-->
    
    
 
 
 
 
<!-- Portfolio -->
<section id="Portfolio" class="content"> 
	<!-- Container -->
	<div class="container portfolio_title"> 
		<!-- Title -->
		<div class="section-title">
			<h2>Устройства	</h2>
		</div>
		<!--/Title --> 
	</div>
	<!-- Container -->
	<div class="portfolio-top"></div>
	<!-- Portfolio Filters -->
	<div class="portfolio"> 
		<div id="filters" class="sixteen columns">
			<ul class="clearfix">
				<li><a id="all" href="#" data-filter="*" class="withripple active">
					<h5>Все</h5>
					</a></li>
				<li><a class="withripple" href="#" data-filter=".web">
					<h5>Телефон</h5>
					</a></li>
				<li><a class="withripple" href="#" data-filter=".design">
					<h5>Ноутбук</h5>
					</a></li>
				<li><a class="withripple" href="#" data-filter=".android">
					<h5>Фотоаппарат</h5>
					</a></li>
				<li><a class="withripple" href="#" data-filter=".appleIOS">
					<h5>другое</h5>
					</a></li> 
			</ul>
		</div>
		<!--/Portfolio Filters --> 
		<!-- Portfolio Wrapper -->
		<div class="isotope fadeInLeft animated wow grid" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">	
			<!-- Portfolio Item -->
			<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four	 appleIOS isotope-item effect-oscar">
				<div class="portfolio_img"> 
		<img src="img/portfolio_pic1.jpg"	alt="Portfolio 1"> </div> 
			<figcaption>		
				<div>
					<a style="text-decoration:none;" href="#myModal1" data-toggle="modal">
					<h2>Навигаторы</h2>
							<p>Подробнее...</p>
					</a>
				</div>
			</figcaption>
				</figure>
			<!--/Portfolio Item --> 
			
			<!-- Portfolio Item-->
			<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four	 appleIOS isotope-item effect-oscar">
				<div class="portfolio_img"> <img src="img/htc-one-mini-size.jpg" alt="Portfolio 1"> </div>
					<figcaption>		
				<div>
					<a style="text-decoration:none;" href="#myModal2" data-toggle="modal">
					<h2>android</h2>
							<p>Подробнее...</p>
					</a>
				</div>
			</figcaption>
				</figure>
			<!--/Portfolio Item --> 
			
			<!-- Portfolio Item-->
			<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four	web isotope-item effect-oscar">
				<div class="portfolio_img"> <img src="img/portfolio_pic2.jpg" alt="Portfolio 1"> </div>
					<figcaption>		
				<div>
					<a style="text-decoration:none;" href="#myModal4" data-toggle="modal">
					<h2>iPhone 5s/5/5c/5se</h2>
							<p>Подробнее...</p>
					</a>
				</div>
			</figcaption>
				</figure>
			<!--/Portfolio Item --> 
			
			<!-- Portfolio Item-->
			<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four	design isotope-item effect-oscar">
				<div class="portfolio_img"> <img src="img/blok_pitania.jpg" alt="Portfolio 1"> </div>
					<figcaption>		
				<div>
					<a style="text-decoration:none;" href="#myModal11" data-toggle="modal">
					<h2>Доп. компоненты </h2>
							<p>Подробнее...</p>
					</a>
				</div>
			</figcaption>
				</figure>
			<!--/Portfolio Item --> 
			
			<!-- Portfolio Item -->
			<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four	design	isotope-item effect-oscar">
				<div class="portfolio_img"> <img src="img/portfolio_pic3.jpg" alt="Portfolio 1"> </div>
			 <figcaption>		
				<div>
					<a style="text-decoration:none;" href="#myModal7" data-toggle="modal">
					<h2>Ноутбуки</h2>
							<p>Подробнее...</p>
					</a>
				</div>
			</figcaption>
				</figure>
			<!--/Portfolio Item--> 
			
			<!-- Portfolio Item-->
			<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four	web	prototype web isotope-item effect-oscar">
				<div class="portfolio_img"> <img src="img/portfolio_pic4.jpg" alt="Portfolio 1"> </div>
				 <figcaption>		
				<div>
					<a style="text-decoration:none;" href="#myModal10" data-toggle="modal">
					<h2>Iphone <span>7</span></h2>
							<p>Подробнее...</p>
					</a>
				</div>
			</figcaption>
			</figure>
			<!-- Portfolio Item --> 
			
			<!-- Portfolio Item -->
			<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four	appleIOS isotope-item effect-oscar">
				<div class="portfolio_img"> <img src="img/portfolio_pic5.jpg" alt="Portfolio 1"> </div>
			 <figcaption>		
				<div>
					<a style="text-decoration:none;" href="#myModal8" data-toggle="modal">
					<h2>Обновление по</h2>
							<p>Подробнее...</p>
					</a>
				</div>
			</figcaption>
			</figure>
			<!--/Portfolio Item --> 

			<!-- Portfolio Item -->
			<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four	android isotope-item effect-oscar">
				<div class="portfolio_img"> <img src="img/portfolio_pic6.jpg" alt="Portfolio 1"> </div>
			 <figcaption>
				<div>
					<a style="text-decoration:none;" href="#myModal5" data-toggle="modal">
					<h2>Камеры ДО 8Mpx</h2>
							<p>Подробнее...</p>
					</a>
				</div>
			</figcaption>
			</figure>
			<!--/Portfolio Item --> 
			
			<!-- Portfolio Item	-->
			<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four	android  isotope-item effect-oscar">
				<div class="portfolio_img"> <img src="img/portfolio_pic7.jpg" alt="Portfolio 1"> </div>			 
			 <figcaption>		
				<div>
					<a style="text-decoration:none;" href="#myModal3" data-toggle="modal">
					<h2>Камеры ОТ 8Mpx</h2>
							<p>Подробнее...</p>
					</a>
				</div>
			</figcaption>
            </figure>
			<!--/Portfolio Item --> 
			
			<!-- Portfolio Item -->
			<figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four	web  isotope-item effect-oscar">
				<div class="portfolio_img"> <img src="img/portfolio_pic8.jpg" alt="Portfolio 1"> </div>			 
			<figcaption>		
				<div>
					<a style="text-decoration:none;" href="#myModal" data-toggle="modal">
					<h2>iPhone <span>6s/6s plus</span></h2>
							<p>Подробнее...</p>
					</a>
				</div>
			</figcaption>
				</figure>
			<!--/Portfolio Item --> 
		</div>
		<!--/Portfolio Wrapper --> 
	</div>
	<!--/Portfolio Filters -->
	<div class="portfolio_btm"></div>
	<div id="project_container">
		<div class="clear"></div>
		<div id="project_data"></div>
	</div>
</section>
<!--/Portfolio --> 
<section class="page_section" id="clients"><!--page_section-->
	<h2>Партнеры</h2>
<!--page_section-->
<div class="client_logos"><!--logos-->
	<div class="container">
		<ul class="fadeInRight animated wow">
			<li><a href="javascript:void(0)"><img src="img/client_logo1.png" alt=""></a></li>
			<li><a href="javascript:void(0)"><img src="img/client_logo2.png" alt=""></a></li>
			<li><a href="javascript:void(0)"><img src="img/client_logo3.png" alt=""></a></li>
			<li><a href="javascript:void(0)"><img src="img/client_logo5.png" alt=""></a></li>
		</ul>
	</div>
</div>
</section>
<!--logos--> 
<section class="page_section team" id="team"><!--main-section team-start-->
	<div class="container">
		<h2>Команда</h2>
		<h6>Чем сможем, тем и поможем</h6>
		<div class="team_section clearfix">
			<div class="team_area">
				<div class="team_box wow fadeInDown delay-03s">
					<img src="img/team_pic1.jpg" alt="">
				</div>
				<h3 class="wow fadeInDown delay-03s">Главный редактор сайта</h3>
				<span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
				<p class="wow fadeInDown delay-03s"> Наполнение контентом (копирайт, рерайт, наполнение товарами, 
                    наполнение графическими материалами, 
                    а также редактирование всей информации),
                    отслеживание актуальности контента.</p>
			</div>
			<div class="team_area">
				<div class="team_box	wow fadeInDown delay-06s">
					<img src="img/team_pic2.jpg" alt="">
				</div>
				<h3 class="wow fadeInDown delay-06s">Вице-президент</h3>
				<span class="wow fadeInDown delay-06s">Vice President</span>
				<p class="wow fadeInDown delay-06s"> Полное ведение сайта компании,
                    разработка дизайна и интерфейса web-сайта,
                   продвижение и поддержка работы сайта.</p>
			</div>
			<div class="team_area">
				<div class="team_box wow fadeInDown delay-09s">
					<img src="img/img-3.jpg" alt="">
				</div>
				<h3 class="wow fadeInDown delay-09s">Менеджер</h3>
				<span class="wow fadeInDown delay-09s">Senior Manager</span>
				<p class="wow fadeInDown delay-09s">Наполнение сайтов грамотным и качественным контентом, 
                    SEO оптимизированным текстом.
                    Работа с изображением, видео.
                    Размещение информации в социальных сетях.</p>
			</div>
		</div>
	</div>
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
	<div class="container">
		<section class="page_section contact">
			<div class="contact_section">
				<h2>Контакты</h2>
				<div class="row">
					<div class="col-lg-4">
						
					</div>
					<div class="col-lg-4">
					 
					</div>
					<div class="col-lg-4">
					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 wow fadeInLeft">	
					<div class="contact_info">
						<div class="detail">
							<h4>Телефон и адрес</h4>
							<p><strong>+375(44) 749 99 94</strong><br>(Velcom) "ТЦ ДНЕПР"</p>
							<p><strong>+375(29) 125 45 67</strong><br>(Velcom) "ТЦ АРМАДА</p>
							<p><strong>+375(29) 849 19 59</strong><br>(MTS) ПАРК СИТИ</p>
						</div>
						<div class="detail">
							<h4>Email</h4>
							<p>support@smursa.com</p>
						</div>
					</div>
					<ul class="social_links">
						<li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
						<li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
						<li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-vk"></i></a></li>
						<li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
					</ul>
                </div>
				<div class="col-lg-8 wow fadeInLeft delay-06s">
					<div class="form">
						<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
						<form method= "POST"  novalidate> 
							<div class="form-group label-floating">
								<div class="input-group">
									<label class="control-label">Имя</label>
									<input type="text" class="form-control" name= "name" required
									data-validation-required-message="Please enter your name" />
									<p class="help-block"></p>
								</div>
							</div> 	
							<div class="form-group label-floating">
								<div class="input-group">
									<label class="control-label">Email</label>
									<input type="email" class="form-control" name= "email" required
									data-validation-required-message="Please enter your email" />
								</div>
							</div> 	

							<div class="form-group label-floating">
								<div class="input-group">
								<label class="control-label">Поломка</label>
								<textarea rows="10" cols="100" class="form-control" name="message" required
								data-validation-required-message="Please enter your message" minlength="5" 
								data-validation-minlength-message="Min 5 characters" 
								maxlength="999" style="resize:none"></textarea>
								</div>
							</div> 		 
							<div id="success"> </div> 
							<button type="submit" value= "Отправить" class="btn btn-block btn-lg btn-raised btn-info pull-right">Отправить</button><br />
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</footer>
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
	      <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<!--<h4 class="modal-title">Заголовок модального окна</h4>-->
              
		  </div>
<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				<h4 >Iphone 6/6+</h4>
				<ul>
					<li>Разбилось стекло - <strong class="text-success">от 105 руб.</strong></li>
					<li>Попала вода - <strong class="text-success">от 35 руб.</strong></li>
					<li>Проблемы с сетью - <strong class="text-success">от 40 руб.</strong></li>
					<li>Не включается - <strong class="text-success">от 30 руб.</strong></li>
					<li>Плохо работают кнопки -<strong class="text-success"> от 25 руб.</strong></li>
					<li>Не заряжается - <strong class="text-success">от 35 руб</strong></li>
					<li>Не работает камера - <strong class="text-success">от 30 руб.</strong></li> 
					<li>Проблема с прошивкой - <strong class="text-success">от 25 руб.</strong></li>
					<li>Не работает динамик- <strong class="text-success">от 25 руб.</strong></li>
					<li>Проблема с корпусом - <strong class="text-success">от 90 руб.</strong></li>
					<li>Не работает вибрация - <strong class="text-success">от 25 руб.</strong></li>
				</ul>
			</div>
<!-- Футер модального окна -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div> 
    
<div id="myModal1" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
	      <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<!--<h4 class="modal-title">Заголовок модального окна</h4> -->
		  </div>
<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				<h4 >Навигаторы</h4>
				<ul>
					<li>Ремонт сенсорного экрана - <strong class="text-success">Цену уточняйте</strong></li>
					<li>Заменя дисплея - <strong class="text-success">Цену уточняйте</strong></li>
					<li>Отсутствие связи со спутником - <strong class="text-success">Цену уточняйте</strong></li>
					<li>Обновление ПО - <strong class="text-success">Цену уточняйте</strong></li>
                    <li>* В стоимость услуг не включена стоимость запчастей </li>
                    <li>* В стоимость услуг не включена стоимость запчастей </li>
                </ul>
<!-- Футер модального окна -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
    </div> 
    </div>
    <div id="myModal2" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
	      <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<!--<h4 class="modal-title">Заголовок модального окна</h4>-->
              
		  </div>
<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				<h4 >android</h4>
				<ul>
					<li>Разбилось стекло - <strong class="text-success">от 65 руб.</strong></li>
					<li>Попала вода - <strong class="text-success">от 30 руб.</strong></li>
					<li>Проблемы с сетью - <strong class="text-success">от 40 руб.</strong></li>
					<li>Не включается - <strong class="text-success">от 30 руб.</strong></li>
					<li>Плохо работают кнопки -<strong class="text-success"> от 25 руб.</strong></li>
					<li>Не заряжается - <strong class="text-success">от 30 руб.</strong></li>
					<li>Не работает камера - <strong class="text-success">от 20 руб.</strong></li> 
					<li>Проблема с прошивкой - <strong class="text-success">от 25 руб.</strong></li>
					<li>Не работает динамик- <strong class="text-success">от 20 руб.</strong></li>
					<li>Проблема с корпусом - <strong class="text-success">от 95 руб.</strong></li>
					<li>Не работает вибрация - <strong class="text-success">от 25 руб.</strong></li>
                    <li>* В стоимость услуг не включена стоимость запчастей </li>
				</ul>
			</div>
<!-- Футер модального окна -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
    </div>
<div id="myModal3" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
	      <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<!--<h4 class="modal-title">Заголовок модального окна</h4>-->
              
		  </div>
<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				<h4 >Камеры ОТ 8Mpx</h4>
				<ul>
					<li>Ремонт объектива фотоаппарата - <strong class="text-success">от 35-70 руб.</strong></li>
					<li>Замена объектива фотоаппарата- <strong class="text-success">от 25 руб.</strong></li>
					<li>Замена дисплея фотоаппарата- <strong class="text-success">от 25 руб.</strong></li>
					<li>Замена матрицы фотоаппарата -<strong class="text-success"> от 27 руб.</strong></li>
					<li>Ремонт вспышки- <strong class="text-success">от 35 руб.</strong></li>
                    <li>Ремонт платы электроники фотоаппарата- <strong class="text-success">от 25 руб.</strong></li>
					<li>Ремонт декоративной пластмассовой части- <strong class="text-success">от 13 руб.</strong></li>
					<li>Ремонт блока питания(адаптера) -<strong class="text-success"> от 27 руб.</strong></li>
					<li>Ремонт видеокарты- <strong class="text-success">от 35 руб.</strong></li>
                    <li>* В стоимость услуг не включена стоимость запчастей </li>
				
				</ul>
			</div>
<!-- Футер модального окна -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>

    </div>
<div id="myModal5" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
	      <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<!--<h4 class="modal-title">Заголовок модального окна</h4>-->
              
		  </div>
<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				<h4 >Камеры ДО 8Mpx</h4>
				<ul>
					<li>Ремонт объектива фотоаппарата - <strong class="text-success">от 30 руб.</strong></li>
					<li>Замена объектива фотоаппарата- <strong class="text-success">от 25 руб.</strong></li>
					<li>Замена дисплея фотоаппарата- <strong class="text-success">от 25 руб.</strong></li>
					<li>Замена матрицы фотоаппарата -<strong class="text-success"> от 27 руб</strong></li>
					<li>Ремонт вспышки- <strong class="text-success">от 35 руб.</strong></li>
                    <li>Ремонт платы электроники фотоаппарата- <strong class="text-success">от 25 руб.</strong></li>
					<li>Ремонт декоративной пластмассовой части- <strong class="text-success">от 13 руб.</strong></li>
					<li>Ремонт блока питания(адаптера) -<strong class="text-success"> от 28 руб.</strong></li>
					<li>Ремонт видеокарты- <strong class="text-success">от 35 руб.</strong></li>
                    <li>Диагностика видеокамеры- <strong class="text-success">от 5 руб.</strong></li>
                    <li>* В стоимость услуг не включена стоимость запчастей </li>
				
				</ul>
			</div>
            
<!-- Футер модального окна -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>

    </div>
    
    <div id="myModal4" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
	      <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<!--<h4 class="modal-title">Заголовок модального окна</h4>-->
              
		  </div>
<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				<h4 >iPhone 5s/5/5c/5se</h4>
				<ul>
					<li>Разбилось стекло - <strong class="text-success">от 70 руб.</strong></li>
					<li>Попала вода - <strong class="text-success">от 35 руб.</strong></li>
					<li>Проблемы с сетью - <strong class="text-success">от 25 руб.</strong></li>
					<li>Не включается - <strong class="text-success">от 30 руб.</strong></li>
					<li>Плохо работают кнопки -<strong class="text-success"> от 25 руб.</strong></li>
					<li>Не заряжается - <strong class="text-success">от 35 руб.</strong></li>
					<li>Не работает камера - <strong class="text-success">от 30 руб.</strong></li> 
					<li>Проблема с прошивкой - <strong class="text-success">от 25 руб.</strong></li>
					<li>Не работает динамик- <strong class="text-success">от 25 руб.</strong></li>
					<li>Проблема с корпусом - <strong class="text-success">от 90 руб.</strong></li>
					<li>Не работает вибрация - <strong class="text-success">от 25 руб.</strong></li>
				</ul>
			</div>
<!-- Футер модального окна -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div> 
        
    
    <div id="myModal7" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
	      <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<!--<h4 class="modal-title">Заголовок модального окна</h4>-->
              
		  </div>
<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				<h4 >Ноутбуки</h4>
				<ul>
					<li>Замена шлейфа матрицы - <strong class="text-success">от 40 руб.</strong></li>
					<li>Замена термопасты - <strong class="text-success">от 25 руб.</strong></li>
					<li>замена матрицы - <strong class="text-success">от 100 руб.</strong></li>
					<li>Замена аккумулятора - <strong class="text-success">от 40 руб.</strong></li>
					<li>Восстановление корпуса -<strong class="text-success"> от 25 руб.</strong></li>
					<li>Замена кулера - <strong class="text-success">от 35 руб.</strong></li>
					<li>Замена клавиатуры - <strong class="text-success">от 30 руб.</strong></li> 
					<li>Установка программного обеспечения - <strong class="text-success">от 10 руб.</strong></li>
				</ul>
			</div>
<!-- Футер модального окна -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div> 
    
        <div id="myModal8" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
	      <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<!--<h4 class="modal-title">Заголовок модального окна</h4>-->
              
		  </div>
<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				<h4 >Обновление ПО</h4>
				<ul>
					<li>Установка ОП - <strong class="text-success">от 20 руб.</strong></li>
					<li> - <strong class="text-success">от 35 руб.</strong></li>
					<li>Проблемы с сетью - <strong class="text-success">от 40 руб.</strong></li>
					<li>Восстановление или обновление ПО смартфона или планшета - <strong class="text-success">от 40 руб.</strong></li>
					<li>Восстановление или обновление ПО на ноутбуке -<strong class="text-success"> от 45 руб.</strong></li>
				</ul>
			</div>
<!-- Футер модального окна -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div> 
        <div id="myModal10" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
	      <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<!--<h4 class="modal-title">Заголовок модального окна</h4>-->
              
		  </div>
<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				<h4 >iPhone 7</h4>
				<ul>
					<li>Разбилось стекло - <strong class="text-success">от 300 руб.</strong></li>
					<li>Попала вода - <strong class="text-success">от 65 руб.</strong></li>
					<li>Проблемы с сетью - <strong class="text-success">от 50 руб.</strong></li>
					<li>Не включается - <strong class="text-success">от 60 руб.</strong></li>
					<li>Плохо работают кнопки -<strong class="text-success"> от 25 руб.</strong></li>
					<li>Не заряжается - <strong class="text-success">от 35 руб.</strong></li>
					<li>Не работает камера - <strong class="text-success">от 30 руб.</strong></li> 
					<li>Проблема с прошивкой - <strong class="text-success">от 25 руб.</strong></li>
					<li>Не работает динамик- <strong class="text-success">цены уточняйте</strong></li>
					<li>Проблема с корпусом - <strong class="text-success">цены уточняйте</strong></li>
					<li>Не работает вибрация - <strong class="text-success">цены уточняйте</strong></li>
                    <li>*цены уточняйте по телефону,возможны изменения</li>

				</ul>
			</div>
<!-- Футер модального окна -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div> 
    
    <div id="myModal11" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
	      <!-- Заголовок модального окна -->
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<!--<h4 class="modal-title">Заголовок модального окна</h4>-->
              
		  </div>
<!-- Основное содержимое модального окна -->
			<div class="modal-body">
				<h4 >Дополнительные компоненты ноутбука</h4>
				<ul>
					<li>Ремонт блока зарядного устройства - <strong class="text-success">от 15 руб.</strong></li>
					<li>Попала вода - <strong class="text-success">от 35 руб.</strong></li>
					<li>Замена провода зарядного устройства- <strong class="text-success">от 30 руб.</strong></li>
                    <li>*цены уточняйте по телефону,возможны изменения</li>
				</ul>
			</div>
<!-- Футер модального окна -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div> 
    
<div id="map">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aeae13ba7a3769de7e9be742d012c19677d36b995b1535e9e6de6cd528242bae0&amp;width=100%25&amp;height=700&amp;lang=ru_RU&amp;scroll=false"></script>
</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 
<script src="js/ripples.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/wow.min.js"></script>

<!-- Script Files -->
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script src="fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/custom.js"></script>


<script>
	$(function () {
		$.material.init(); 
	});
</script>
<script>
	new WOW().init();
</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'o0KDbaO5fS';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
    <footer>
 <font size="2">
 <p align="center">
 И.П. Нестеренко Е.А. УНП 791041642 от 28.04.2016 выдано Администрацией Октябрьского района г.Могилёва
 </p>

<p align="center">  
i-m.by	© 2017
  </p>
  </font>
 
  </footer>
</body>
</html>
