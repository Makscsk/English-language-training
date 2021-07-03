<?php 
	session_start();	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости - Acbolto</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery.formstyler.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./img/Icon.ico" type="image/x-icon">
</head>
<body>

<header class="header" id="start">
  <div class="header__top">
    <div class="container">
      <div class="header__contacts">
        <a class="header__phone" href="https://zadarma.com/ru/">+375 (33) 123 45 67</a>
        <a class="header__email" href="https://mail.yandex.by">westudytogether@yandex.ru</a>
        <? 	if($_SESSION['ID_User'] !== null)
          echo('<a class="header__btn" onclick="window.location.href=`Account.php`">Личный кабинет</a>');
          else echo('<a class="header__btn" onclick="window.location.href=`login.php`">Вход</a>');
		    ?>
      </div>
    </div>
  </div>
  <div class="header__content">
    <div class="container">
      <div class="header__content-inner">
        <div class="header__logo">
          <a href="index.php">
            <img src="./img/logo.png" width="200px">
          </a>
        </div>
        <nav class="menu">
          <div class="header__btn-menu">
            <span class="icon-bars"></span>
          </div>
          <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="services.php">Услуги</a></li>
            <li><a href="about.php">О нас</a></li>
            <li><a href="#start">Новости</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>

<section>
  <div>
    <div style="display: flex; flex-direction: row;">
      <a href="https://mail.yandex.by">
        <div class="YYY" style="margin-left: 100px; margin-right: 100px; margin-top: 20px; margin-bottom: 20px; outline: 2px solid #e6e6e6;">
          <img src="./img/news-1.jpg" style="width: 360px; height: 150px;">
          <div class="services__item-title">
            Открылись новые курсы
          </div>
          <div class="services__item-text">
            Основы обучения для понимания углубленного иностранного языка. Формирование трудных слов и предложений.
        </div>
      </a>
    </div>
    <div class="YYY" style="margin-top: 20px; margin-right: 100px; margin-bottom: 20px;  outline: 2px solid #e6e6e6;">
      <a href="https://mail.yandex.by">
        <img src="./img/news-2.jpg" style="width: 360px; height: 150px;">
        <div class="services__item-title">
          Дистанционное обучение
        </div>
        <div class="services__item-text">
          Использование современных технологий для лучшей работы с людьми. Своевременные ответы на поставленные вопросы.
        </div>
      </a>
    </div>
    <div class="YYY" style="margin-top: 20px; margin-bottom: 20px; outline: 2px solid #e6e6e6;">
        <a href="https://mail.yandex.by">
          <img src="./img/news-3.jpg" style="width: 360px; height: 150px;">
          <div class="services__item-title">
            Новый онлайн переводчик
          </div>
          <div class="services__item-text">
            Компания создала новый инновационный онлайн переводчик. Его полный релиз наступит в конец этого года.
          </div>
        </a>
    </div>
  </div>
  <div>
    <div style="display: flex; flex-direction: row;">
      <a href="https://mail.yandex.by">
        <div class="YYY" style="margin-left: 100px; margin-right: 100px; margin-top: 20px; margin-bottom: 20px; outline: 2px solid #e6e6e6;">
          <img src="./img/news-4.jpg" style="width: 360px; height: 150px;">
          <div class="services__item-title">
            Огромные скидки
          </div>
          <div class="services__item-text">
            Огромные скидки надвегаются на наш сайт, успейте заказать наши услуги, пока не истекло это время.
        </div>
      </a>
    </div>
    <div class="YYY" style="margin-top: 20px; margin-right: 100px; margin-bottom: 20px;  outline: 2px solid #e6e6e6;">
      <a href="https://mail.yandex.by">
        <img src="./img/news-5.jpg" style="width: 360px; height: 150px;">
        <div class="services__item-title">
          Новые языки для обучения
        </div>
        <div class="services__item-text">
          Были добавлены новые иностранные языки для обучения желающих. Начните обучение прямо сейчас, зарегистрировавшись на нашем сайте.
        </div>
      </a>
    </div>
    <div class="YYY" style="margin-top: 20px; margin-right: 100px; margin-bottom: 20px;  outline: 2px solid #e6e6e6;">
      <a href="https://mail.yandex.by">
        <img src="./img/news-6.jpg" style="width: 360px; height: 150px;">
        <div class="services__item-title">
          Появились новые спонсоры компании
        </div>
        <div class="services__item-text">
          Новые спонсоры нашей компании согласились на огроммную поддержку в сфере изучения новых иностранных языков.
        </div>
      </a>
    </div>
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

<div id="modal">
  <form>
    <input type="text" placeholder="Ваше имя">
    <input type="text" placeholder="Ваш телефон">
    <input type="submit" value="Отправить">
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.formstyler.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>