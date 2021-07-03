<?php 
	session_start();	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги - Acbolto</title>
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
                  <li><a href="#start">Услуги</a></li>
                  <li><a href="about.php">О нас</a></li>
                  <li><a href="news.php">Новости</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>

      <section class="services">
        <div class="container" style="display: flex; flex-direction: row;">
            <div style="margin-right: 120px;">   
                <div class="services__top">
                    <div class="services__title-box">
                      <div class="services__title">
                        Заказать репетитора на дом
                      </div>
                      <div class="services__text">
                        Бесплатный подбор репетиторов. Помогут разобраться в твоём вопросе ·
                         Поиск по вашим критериям. Настоящие отзывы. Занятия лично и онлайн <br>
                         <div><a href="https://yandex.by/"><u>Подробнее...</u></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="services__top">
                    <div class="services__title-box">
                      <div class="services__title">
                        Платные курсы
                      </div>
                      <div class="services__text">
                        Более 150 000 онлайн-курсов от экспертов. Получите персональные рекомендации! · 
                        Гарантия возврата 30 дней. Пожизненный доступ.
                        <div><a href="https://yandex.by/"><u>Подробнее...</u></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="services__top">
                    <div class="services__title-box">
                      <div class="services__title">
                        Бесплатные услуги
                      </div>
                      <div class="services__text">
                        Бесплатные услуги в Минске. 36 исполнителей — выбирайте лучших специалистов и организации по ценам, рейтингам и отзывам.
                        <div><a href="https://yandex.by/"><u>Подробнее...</u></a></div>
                      </div>
                    </div>
                  </div>  
                  <div class="services__top">
                    <div class="services__title-box">
                      <div class="services__title">
                        Онлайн переводчик
                      </div>
                      <div class="services__text">
                        Онлайн-переводчик текстов и онлайн-словарь с поиском для английского, немецкого и других языков. 
                         Грамматика, произношение, транскрипция и примеры.
                         <div><a href="https://yandex.by/"><u>Подробнее...</u></a></div>
                      </div>
                    </div>
                </div>                
            </div>
            <div >                
                <div class="services__top">
                <div class="services__title-box">
                    <div class="services__title">
                    Консультации по выбору языка
                    </div>
                    <div class="services__text">
                    Выбор языка. Главная. Блог. Прочие статьи. Выбор языка. 
                    Если Вы когда-либо задавались вопросом, какой язык представляет...
                     <div><a href="https://yandex.by/"><u>Подробнее...</u></a></div>
                    </div>
                </div>
                </div>
                <div class="services__top">
                    <div class="services__title-box">
                      <div class="services__title">
                        Услуги покупки книг по языкам
                      </div>
                      <div class="services__text">
                        Книги на иностранных языках. Разделены по уровням владения иностранным языком. 
                        Для новичков выпускаются грамматически...
                        <div><a href="https://yandex.by/"><u>Подробнее...</u></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="services__top">
                    <div class="services__title-box">
                      <div class="services__title">
                        Услуги переводчика
                      </div>
                      <div class="services__text">
                        Агентство переводов с/на более 40 языков. Опыт работы 13 лет. 
                        Онлайн оплата. Звоните! · Грамотные специалисты. Точно в срок. Большой опыт.
                        <div><a href="https://yandex.by/"><u>Подробнее...</u></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="services__top">
                    <div class="services__title-box">
                      <div class="services__title">
                        Обучение детей
                      </div>
                      <div class="services__text">
                        1.5 месяца обучения в подарок до 31 мая! Курсы для детей от 8 до 17 лет. Звоните! · 
                         Бонусы. Бесплатный урок. Занятия с носителем. Кембриджская методика
                         Для детей 6-9 лет...
                         <div><a href="https://yandex.by/"><u>Подробнее...</u></a></div>
                      </div>
                    </div>
                  </div>
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