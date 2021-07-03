<?php 
	session_start();	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Уровень - Acbolto</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/jquery.formstyler.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../img/Icon.ico" type="image/x-icon">
</head>
<body>
<header class="header" id="start">
    <div class="header__top">
        <div class="container">
        <div class="header__contacts">
            <a class="header__phone" href="https://zadarma.com/ru/">+375 (33) 123 45 67</a>
            <a class="header__email" href="https://mail.yandex.by">westudytogether@yandex.ru</a>
            <? 	if($_SESSION['ID_User'] !== null)
            echo('<a class="header__btn" onclick="window.location.href=`../Account.php`">Личный кабинет</a>');
            else echo('<a class="header__btn" onclick="window.location.href=`../login.php`">Вход</a>');
		      ?>
        </div>
        </div>
    </div>
    <div class="header__content">
      <div class="container">
        <div class="header__content-inner">
            <div class="header__logo">
              <a href="../index.php">
                  <img src="../img/logo.png" width="200px">
              </a>
            </div>
            <nav class="menu">
              <div class="header__btn-menu">
                  <span class="icon-bars"></span>
              </div>
              <ul>
                  <li><a href="../index.php">Главная</a></li>
                  <li><a href="../services.php">Услуги</a></li>
                  <li><a href="../about.php">О нас</a></li>
                  <li><a href="../news.php">Новости</a></li>
              </ul>
            </nav>
        </div>
      </div>
   </div>
</header>

<section class="services"  style="outline: 3px solid #e6e6e6;">
  <div style="display: flex; flex-direction: row;">
    <div style="position: relative; margin-left: 500px;">
      <head>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="true"/>
        <link rel="stylesheet" type="text/css" href="../qwertyuiop/JS-quizes-master/styles/site.css">
      </head>
      <body>
        <div class="wrapper">
          <iframe src="../qwertyuiop/JS-quizes-master/quiz4.php" width="480" height="500 " class="quiz-frame"></iframe>
        </div>
      </body>
    </div>  
</section>

<footer class="footer">
    <div class="footer__content_1">
      <div class="container" style="display: flex; flex-direction: row;">
              <div class="footer__list" style="margin-right: 270px;">
                <li><a class="footer__phone" href="https://zadarma.com/ru/">+375 (33) 123 45 67</a></li>
              </div>
              <div class="footer__list" style="margin-right: 200px;">
                <li><a href="https://mail.yandex.by">westudytogether@yandex.ru</a></li>
              </div>
              <div class="footer__list">
                <li><a class="footer__adress" href="https://www.google.by/maps/place/улица+Гагарина+41А,+Витебск/@55.2122296,30.2278915,17z/data=!3m1!4b1!4m5!3m4!1s0x46c5741c887955d3:0xd1785fe821cb83e5!8m2!3d55.2122296!4d30.2300802">Витебск, ул.Гагарина, 41а</a></li>
              </div>
      </div>
    </div>
</footer>
  
<div class="footer__copy">
  <div class="container">
      <div class="copy__text">
      © 2021 Template by Sinitskiy Maksim. Все права защищены.
      </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/jquery.formstyler.min.js"></script>
<script src="/js/main.js"></script>
  
</body>
</html>