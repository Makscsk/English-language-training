<?php 
	session_start();	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Об организации - Acbolto</title>
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
                  <li><a href="#start">О нас</a></li>
                  <li><a href="news.php">Новости</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>

      <section class="about2">
        <div class="container">
            <div class="about__title">
              Об организации
            </div>
            <div class="about__text">
              Тут содержиться подробная информация об нашей организации Acbolto. 
              Acbolto - международная некоммерческая ассоциация, содействующая развитию переводческих услуг, языковых технологий и решений в области управления переводческой деятельностью.
               Членами ассоциации являются действующие в различных странах мира переводческие компании, поставщики локализационных услуг, консультанты по вопросам глобализации, специалисты в области интернационализации и разработчики технологий.
                Компании-члены Acbolto объединяет ориентация на высокое качество услуг и внедрение новейших технологий, обеспечивающих их клиентам выход на мировой рынок.
            </div>
        </div>
      </section>

      <section>
        <div style="margin-left: 150px;">
              <h2 style="color: black;">Цели Acbolto:</h2>
            <ul class="dbl-border" style="color: black; margin-bottom: 30px;">
              <li><a>Acbolto поддерживает своих членов путем создания условий, отвечающих стандартам для обмена знаниями и развития технологий</a></li>
              <li><a>Обеспечение кросс-каналов связи, ведущих к лучшему взаимопониманию</a></li>
              <li><a>Помощь членам организации в управлении бизнесом через целевые программы и мероприятия</a></li>
              <li><a>Проверять, определять и защищать возрастающие интересы своих клиентов</a></li>
              <li><a>Помощь в развитии "языка бизнеса"</a></li>
              <li><a>Поощрение и поддержка правительственных программ направленных на увеличение языкового разнообразия</a></li>
              <li><a>Улучшение рейтинга клиентов</a></li>
              <li><a>Помощь в обучение, посредством различных программ</a></li>
            </ul>
              <h2 style="color: black;">Преимущества вступления:</h2>
            <ul class="dbl-border" style="color: black; margin-bottom: 30px;">
              <li><a>Возможность развивать профессиональные отношения с переводческими компаниями многих европейских государств</a></li>
              <li><a>Возможность обсуждать актуальные мировые вопросы переводческого рынка</a></li>
              <li><a>Возможность делиться опытом и информацией для развития отрасли</a></li>
              <li><a>Возможность участия в международных форумах и конференциях под эгидой Acbolto</a></li>
              <li><a>Бесплатное использование логотипа Acbolto на веб-сайтах и других маркетинговых материалах</a></li>
              <li><a>Возможные скидки на закупку спец. техники</a></li>
            </ul>
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