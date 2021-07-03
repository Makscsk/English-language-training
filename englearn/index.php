<?php 
	session_start();	
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Обучение иностранным языкам - Acbolto</title>
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Roboto:400,500&amp;subset=cyrillic"
    rel="stylesheet">
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
            <a href="#start">
              <img src="./img/logo.png" width="200px">
            </a>
          </div>
          <nav class="menu">
            <div class="header__btn-menu">
              <span class="icon-bars"></span>
            </div>
            <ul>
              <li><a href="#start">Главная</a></li>
              <li><a href="services.php">Услуги</a></li>
              <li><a href="about.php">О нас</a></li>
              <li><a href="news.php">Новости</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    
    <div style="margin-left: 480px; margin-top: 20px;">
      <a style="margin-left: 100px;">
        <big><big>
          <?
            $id=$_SESSION['ID_User'];
            include ("bd.php");
            $result = mysqli_query($bd, "SELECT `Progress` FROM users WHERE ID_User='$id'");
            while ($myrow = mysqli_fetch_array($result)) {
              echo "Прогресс прохождения: {$myrow['Progress']}";
            }
          ?>
        </big></big>
      </a>
    </div>

  </header>
  <section class="services">
    <div class="container">
      <div class="services__top">
        <div class="services__title-box">
          <div class="services__title">
            Наши Услуги 
          </div>
          <div class="services__text">
            Комплексный подход к вашему вопросу, своевременная помощь, представление интересов во всех делах и прочее.
          </div>
        </div>
        <div class="services__btn">
          <a href="services.php">
            Показать все услуги
          </a>
        </div>
      </div>
      <div class="services__items">
        <div class="services__item">
        <?       
          $id=$_SESSION['ID_User'];
          include ("bd.php");
          $result = mysqli_query($bd, "SELECT `Progress` FROM users WHERE ID_User='$id'");
          $myrow = mysqli_fetch_array($result);
          $number = $myrow[0];
          switch ($number){
            case 1:
              $image1 = './img/complite.ico';
              $image2 = './img/number_2.ico';
              $image3 = './img/number_3.ico';
              $image4 = './img/number_4.ico';
              $image5 = './img/number_5.ico';
              $image6 = './img/number_6.ico';
              $image7 = './img/number_7.ico'; 
              $image8 = './img/number_8.ico';
              $image9 = './img/number_9.ico';
            break;
            case 2:
              $image1 = './img/complite.ico';
              $image2 = './img/complite.ico';
              $image3 = './img/number_3.ico';
              $image4 = './img/number_4.ico';
              $image5 = './img/number_5.ico';
              $image6 = './img/number_6.ico';
              $image7 = './img/number_7.ico';
              $image8 = './img/number_8.ico';
              $image9 = './img/number_9.ico';
            break;
            case 3:
              $image1 = './img/complite.ico';
              $image2 = './img/complite.ico';
              $image3 = './img/complite.ico';
              $image4 = './img/number_4.ico';
              $image5 = './img/number_5.ico';
              $image6 = './img/number_6.ico';
              $image7 = './img/number_7.ico';
              $image8 = './img/number_8.ico';
              $image9 = './img/number_9.ico';
            break;
            case 4:
              $image1 = './img/complite.ico';
              $image2 = './img/complite.ico';
              $image3 = './img/complite.ico';
              $image4 = './img/complite.ico';
              $image5 = './img/number_5.ico';
              $image6 = './img/number_6.ico';
              $image7 = './img/number_7.ico';
              $image8 = './img/number_8.ico';
              $image9 = './img/number_9.ico';
            break;
            case 5:
              $image1 = './img/complite.ico';
              $image2 = './img/complite.ico';
              $image3 = './img/complite.ico';
              $image4 = './img/complite.ico';
              $image5 = './img/complite.ico';
              $image6 = './img/number_6.ico';
              $image7 = './img/number_7.ico';
              $image8 = './img/number_8.ico';
              $image9 = './img/number_9.ico';
            break;
            case 6:
              $image1 = './img/complite.ico';
              $image2 = './img/complite.ico';
              $image3 = './img/complite.ico';
              $image4 = './img/complite.ico';
              $image5 = './img/complite.ico';
              $image6 = './img/complite.ico';
              $image7 = './img/number_7.ico';
              $image8 = './img/number_8.ico';
              $image9 = './img/number_9.ico';
            break;
            case 7:
              $image1 = './img/complite.ico';
              $image2 = './img/complite.ico';
              $image3 = './img/complite.ico';
              $image4 = './img/complite.ico';
              $image5 = './img/complite.ico';
              $image6 = './img/complite.ico';
              $image7 = './img/complite.ico';
              $image8 = './img/number_8.ico';
              $image9 = './img/number_9.ico';
            break;
            case 8:
              $image1 = './img/complite.ico';
              $image2 = './img/complite.ico';
              $image3 = './img/complite.ico';
              $image4 = './img/complite.ico';
              $image5 = './img/complite.ico';
              $image6 = './img/complite.ico';
              $image7 = './img/complite.ico';
              $image8 = './img/complite.ico';
              $image9 = './img/number_9.ico';
            break;
            case 9:
            $image1 = './img/complite.ico';
            $image2 = './img/complite.ico';
            $image3 = './img/complite.ico';
            $image4 = './img/complite.ico';
            $image5 = './img/complite.ico';
            $image6 = './img/complite.ico';
            $image7 = './img/complite.ico';
            $image8 = './img/complite.ico';
            $image9 = './img/complite.ico';
          break;
          default:
            $image1 = './img/number_1.ico';
            $image2 = './img/number_2.ico';
            $image3 = './img/number_3.ico';
            $image4 = './img/number_4.ico';
            $image5 = './img/number_5.ico';
            $image6 = './img/number_6.ico';
            $image7 = './img/number_7.ico';
            $image8 = './img/number_8.ico';
            $image9 = './img/number_9.ico';
          break;
          }                          
        ?>
          <img src="<?php echo $image1; ?>" width="55px">
          <div class="services__item-title">
            Начальное обучение
          </div>
          <div class="services__item-text">
            Основы обучения для понимания иностранного языка. Формирование основных слов и предложений. Изучение основ.
          </div>
          <div class="services__item-btn">
            <a href="/lvls/lvl1.php" class="default-btn" style="width: 290px;">
              Начать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="<?php echo $image2; ?>" width="55px">
          <div class="services__item-title">
            Моя семья
          </div>
          <div class="services__item-text">
            Английские слова для начинающих по теме «Моя семья. My Family» разделены на три части: 
            существительные, прилагательные и глаголы.
          </div>
          <div class="services__item-btn">
            <a href="/lvls/lvl2.php" class="default-btn" style="width: 290px;">
              Начать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="<?php echo $image3; ?>" width="55px">
          <div class="services__item-title">
            Еда
          </div>
          <div class="services__item-text">
            Слова для начинающих по теме «Еда. Food» все ещё лёгкая степень обучения. Так же разделена на три части.
          </div>
          <div class="services__item-btn">
            <a  href="/lvls/lvl3.php" class="default-btn" style="width: 290px;">
              Начать
            </a>
          </div>
        </div>        
      </div>

      <br>
      <br>

      <div class="services__items">
        <div class="services__item">
          <img src="<?php echo $image4; ?>" width="55px">
          <div class="services__item-title">
            Увлечения
          </div>
          <div class="services__item-text">
            У каждого из нас есть хобби, которое показывает наше творчество и помогает самосовершенствоваться.
             Поговорить об интересах и увлечениях — хороший способ поддержать дружеский разговор и лучше узнать собеседника.
          </div>
          <div class="services__item-btn">
            <a  href="/lvls/lvl4.php" class="default-btn" style="width: 290px;">
              Начать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="<?php echo $image5; ?>" width="55px">
          <div class="services__item-title">
            Страны
          </div>
          <div class="services__item-text">
            Страны мира, список по алфавиту которых состоит из 252 наименований,
             занимают практически всю территорию планеты, на которой возможно проживание человека.
          </div>
          <div class="services__item-btn">
            <a  href="/lvls/lvl5.php" class="default-btn" style="width: 290px;">
              Начать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="<?php echo $image6; ?>" width="55px">
          <div class="services__item-title">
            Одежда
          </div>
          <div class="services__item-text">
            Одежда — изделие или совокупность изделий, надеваемых человеком и несущих утилитарные и
             эстетические функции. Предохраняет тело человека от негативного влияния окружающей среды.
          </div>
          <div class="services__item-btn">
            <a  href="/lvls/lvl6.php" class="default-btn" style="width: 290px;">
              Начать
            </a>
          </div>
        </div>
      </div>

      <br>
      <br>
      
      <div class="services__items">
        <div class="services__item">
          <img src="<?php echo $image7; ?>" width="55px">
          <div class="services__item-title">
            Покупки
          </div>
          <div class="services__item-text">
            Техника, электроника, свет. Совместные покупки.
             Любые пожелания об открытии тех или иных товаров в Совместных Покупках
          </div>
          <div class="services__item-btn">
            <a  href="/lvls/lvl7.php" class="default-btn" style="width: 290px;">
              Начать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="<?php echo $image8; ?>" width="55px">
          <div class="services__item-title">
            Животные
          </div>
          <div class="services__item-text">
            Чем отличаются животные от растений? Мир животных очень разнообразен. 
             От простейжих одноклеточных организмов до огромных организмов с сложной нервной системой.
          </div>
          <div class="services__item-btn">
            <a  href="/lvls/lvl8.php" class="default-btn" style="width: 290px;">
              Начать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="<?php echo $image9; ?>" width="55px">
          <div class="services__item-title">
            Заключение
          </div>
          <div class="services__item-text">
            И вот наше обучение базовым понятиям иностранного языка подходит к концу.
             Заключительный этап предлагает вам испытать свои знания. 
          </div>
          <div class="services__item-btn">
            <a  href="/lvls/lvl9.php" class="default-btn" style="width: 290px;">
              Начать
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="about">
    <div class="container">
      <div class="about__inner">
        <div class="about__title">
          Об организации
        </div>
        <div class="about__text">
          Организация специализируется на оказании услуг в сфере образования иностранных языков.
           На сегодняшний день, коллектив компании объединяет
           высокопрофессиональных экспертов имеющих
           специализации в отдельных областях.
        </div>
        <a href="about.php" class="about__btn default-btn">
          Узнать больше
        </a>
      </div>
    </div>
  </section>
  
  <section class="form" id="frm">
    <div class="container">
      <div class="form__inner">
        <div class="form__content">
          <div class="form__title-box">
            <div class="form__title">
              Получить Консультацию
            </div>
            <div class="form__text">
              Комплексный подход к вашему вопросу, своевременная помощь, представление интересов.
            </div>
          </div>  
          <div class="form__box">
            <form>
              <div class="form__box-inner">
                <div class="form__box-left">
                  <label>
                    E-mail
                    <input type="text">
                  </label>
                  <label>
                    Контактный телефон
                    <input type="text" name="phone">
                  </label>
                  <label>
                    ФИО
                    <input type="text">
                  </label>
                  <label>
                    Тема вопроса
                    <select>
                      <option>Консультация</option>
                      <option>Перевод</option>
                      <option>Предложение работы</option>
                      <option>Покупка</option>
                    </select>
                  </label>
                </div>
                <div class="form__box-right">
                  <label>
                    Сообщение
                    <textarea></textarea>
                  </label>
                  <button class="default-btn" type="submit">Получить консультацию</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="advantages">
    <div class="container">
      <div class="advantages__inner">
        <div class="advantages-item">
          <div class="advantages__title">
            Десятки специализированных лиц <br> &#8291;
          </div>
          <div class="advantages__text">
            Мы умеем минимизировать все риски в процессе обучения.
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages__title">
            Отличное знание иностранных языков
          </div>
          <div class="advantages__text">
            Позволяют нам эффективно обучать интересующихся лиц в сфере переводческой деятельности.
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages__title">
            Большой опыт работы переводчика <br> &#8291;
          </div>
          <div class="advantages__text">
            Мы обладаем большим опытом работы переводчиком в больших компаниях и организациях.
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="news">
    <div class="container">
      <div class="news__top">
        <div class="news__title-box">
          <div class="news__title">
            Новости Компании
          </div>
          <div class="news__text">
            Комплексный подход к вашему вопросу, своевременная помощь, представление помощи во всех интересах.
          </div>
        </div>
        <div class="news__btn">
          <a href="news.php">
            Открыть все новости
          </a>
        </div>
      </div>
      <div class="news__inner">
        <div class="news__slider">
          <div class="news__slider-inner">
            <div class="news__slider-item">
              <div class="news__slider-title">
                Банкротство и ликвидация предприятия в Украине
              </div>
              <div class="news__slider-text">
                «В ближайшие десять лет может снизиться востребованность бухгалтеров, водителей такси, водителей-дальнобойщиков. 
                Об этом рассказал президент сервиса по поиску работы SuperJob Алексей Захаров, сообщает 28 декабря RT. 
                «Количество главных бухгалтеров тоже снизится в пять раз», — отметил он. 
                Это коснется и менеджеров по кадровому делопроизводству, поскольку документация также становится электронной.
                В ближайшем будущем следует ожидать начала коммерческой эксплуатации первых беспилотных такси в крупных российских городах, поэтому упадет спрос на водителей такси.
                Как добавил Захаров, развитие современных технологий повлияет на профессию преподавателя иностранных языков.
                По его мнению, изучение любого иностранного языка всё чаще становится хобби, а для других целей уже эффективнее электронный переводчик...»
              </div>
              <div class="news__slider-author">
                Алексей Захаров, президент сервиса по поиску работы SuperJob
              </div>
            </div>
            <div class="news__slider-item">
              <div class="news__slider-title">
                Новый Симулятор
              </div>
              <div class="news__slider-text">
                «Предмет изучения первого «Симулятора управления продуктом на основе данных» — как данные и исследования помогают сокращать неопределенность и принимать решения в работе над продуктом. 
                Он про путь от 0 к 1, от идеи к product/market fit. В процессе обучения студенты проходили путь от идеи до востребованного продукта, учились идентифицировать и решать типичные проблемы.
                Новый Симулятор начинается там, где закончился первый. «Симулятор управления ростом продукта» — про путь от 1 к N, от product/market fit к устойчиво растущему бизнесу. 
                Студенты получат в управление работающий востребованный продукт, который перестал расти. Основным фокусом обучения станет построение системы, которая обеспечит продукту контролируемый и управляемый рост. 
                Будут разобраны типичные проблемы и способы их решения в процессе масштабирования продукта, на пути от 1 к N...»
              </div>
              <div class="news__slider-author">
                Андрей Ворошилов, проджект и продакт-менеджер в ИТ
              </div>
            </div>
            <div class="news__slider-item">
              <div class="news__slider-title">
                Когда начинать готовиться к IELTS и TOEFL
              </div>
              <div class="news__slider-text">
                «Важно понимать, что срок действия сертификатов IELTS и TOEFL составляет всего два года. На первый взгляд может показаться, что это достаточный срок для оформления документов, однако это не так. 
                Прежде чем регистрироваться на сдачу, рекомендуется досконально изучить перечень документов, которые необходимы для подачи в университет или для миграции/релокации. 
                Также стоит уточнить, какой именно тест предпочтительней в вашем случае. 
                К примеру, если вы поступаете в американский ВУЗ — TOEFL подойдет вам больше, если в британский или австралийский — стоит выбрать IELTS. 
                В процессе подготовки вы будете концентрироваться на британском или американском английском, что в дальнейшем значительно облегчит процесс интеграции в новой стране. 
                Оба теста являются достаточно сложными и требуют обязательной подготовки. 
                Если вы не являетесь педагогом или лингвистом, настоятельно рекомендуется обратиться к квалифицированному специалисту, который проверит и определит ваш уровень владения английском языком. 
                К моменту начала подготовки ваши языковые навыки должны соответствовать уровню Intermediate (средний). 
                Если у вас низкий уровень, рекомендуется подтянуть его до уровня Intermediate...»
              </div>
              <div class="news__slider-author">
                Андрей Ворошилов, генеральный д иректор компании Bankom
              </div>
            </div>
          </div>
        </div>
        <a href="news.php" class="news__blog">
          <div class="news__images">
            <img src="img/news-1.jpg" style="width: 200px; height: 100px;">
            <div class="news__date">03.04</div>
          </div>
          <div class="news__blog-title">
            Открылись новые курсы
          </div>
          <div class="news__blog-text">
            Основы обучения  для понимания углубленного иностранного языка. Формирование трудных слов и предложений...
          </div>
        </a>
        <a href="news.php" class="news__blog">
          <div class="news__images">
            <img src="img/news-2.jpg" style="width: 200px; height: 100px;">
            <div class="news__date">15.04</div>
          </div>
          <div class="news__blog-title">
            Дистанционное обучение 
          </div>
          <div class="news__blog-text">
            Использование современных технологий для лучшей работы с людьми. Своевременные ответы на поставленные вопросы...
          </div>
        </a>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer__content">
      <div class="container">
        <div class="footer__inner">
          <div class="footer__info">
            <div class="footer__title">
              Местоположение нашей организации
            </div>
            <div class="footer__text">
              Полную информацию о услугах нашего сайта можете найти в организации и во вкладке "О нас".
            </div>
            <a class="header__btn" href="https://zadarma.com/ru/">
              Заказать консультацию
            </a>
            <ul class="footer__list">
              <li><a class="footer__phone" href="https://zadarma.com/ru/">+375 (33) 123 45 67</a></li>
              <li><a href="https://mail.yandex.by">westudytogether@yandex.ru</a></li>
              <li><a class="footer__adress" href="https://www.google.by/maps/place/улица+Гагарина+41А,+Витебск/@55.2122296,30.2278915,17z/data=!3m1!4b1!4m5!3m4!1s0x46c5741c887955d3:0xd1785fe821cb83e5!8m2!3d55.2122296!4d30.2300802">Витебск, ул.Гагарина, 41а</a></li>
            </ul>
          </div>
          <div class="footer__map">
            <iframe height="250px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1970.3181946911634!2d30.228283478301037!3d55.21103999793894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46c5741c97dbd963%3A0x43ce9adfbbb395a4!2z0KTQuNC70LjQsNC7INCR0JPQotCjIMKr0JLQuNGC0LXQsdGB0LrQuNC5INCz0L7RgdGD0LTQsNGA0YHRgtCy0LXQvdC90YvQuSDRgtC10YXQvdC-0LvQvtCz0LjRh9C10YHQutC40Lkg0LrQvtC70LvQtdC00LbCuw!5e0!3m2!1sru!2sua!4v1617818821504!5m2!1sru!2sua" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="footer__copy">
      <div class="container">
        <div class="copy__text">
          © 2021 Template by Sinitskiy Maksim. Все права защищены.
        </div>
      </div>
    </div>
  </footer> 

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
  <script type="text/javascript" src="/qwertyuiop/JS-quizes-master/scripts/app1.js"></script>
  
</script>

</body>

</html>