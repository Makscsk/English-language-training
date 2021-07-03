<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery.formstyler.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./img/Icon.ico" type="image/x-icon">
    <title>Вход в систему</title>
</head>
<body>
<div class="conteiner" id="start">
    <header class="header">
    <div class="header__content">
        <div class="container">
            <div class="header__content-inner">
                <div class="header__logo">
                <a href="#start">
                    <img src="./img/logo.png" width="200px">
                </a>
                </div>
                <nav class="menu">
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="services.php">Услуги</a></li>
                    <li><a href="about.php">О нас</a></li>
                    <li><a href="news.php">Новости</a></li>
                </ul>
                </nav>
            </div>
        </div>
    </div>
	</header>

    <div style="margin-left: 540px; margin-top: 130px; max-width: 360px; padding: 30px 0px 80px; position: relative; height: 300px;
    background-color: #f9f9f9; box-shadow: 0px 7px 24.3px 2.7px rgba(91, 89, 89, 0.14);">
        <h2 class="services__title" style="text-align: center; color: #FFD200; text-shadow: 1px 1px 1px #000;">Вход</h2>
        <form action="check_login.php" method="post" class="met">
        <div> 
            <a style=" margin-top: 25px;">
                <label style="margin-right: 17px; margin-left: 55px;">Логин</label>
                <input name="Login" type="text" maxlength="10" placeholder="Введите логин" required>
            </a>
            <a style=" margin-top: 10px;">
                <label style="margin-right: 10px; margin-left: 55px;">Пароль</label>
                <input type="password" name="Password" id="Password" placeholder="Введите пароль" required>
            </a>
            <div><a style="margin-left: 55px; margin-right: 20px; margin-top: 10px;">Нет аккаунта?</a><a href="Registration.php">Регистрация</a></div>
            <div style="text-align: center; margin-top: 35px;">
            <button style="color: #373636; line-height: 24px; letter-spacing: 0.25px; padding: 5px 38px; border: 3px solid #e6e6e6;" type="submit" name="submit" id="smbBtn">Войти</button>
        </div>
    </div>
</div>

<footer class="footer" style="margin-top: 146px;">
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

</form>
</body>
</html>