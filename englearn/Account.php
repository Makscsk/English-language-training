<?php 
	session_start();	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
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
<div class="conteiner">
<header class="header" id="start">
        <div class="header__top">
          <div class="container">
            <div class="header__contacts">
              <a class="header__phone" href="https://zadarma.com/ru/">+375 (33) 123 45 67</a>
              <a class="header__email" href="https://mail.yandex.by">westudytogether@yandex.ru</a>
			  <a id="name" class="header__btn" onclick="window.location.replace(`exit.php`)"> Выход</a>
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
                  <li><a href="news.php">Новости</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
		
      </header>
	<div style="display:flex; flex-direction: row; margin-top: 20px;">
		<h2 style="margin-left: 1150px"> <?
					include ("bd.php");
					$id=$_SESSION['ID_User'];
					$result = mysqli_query($bd, "SELECT `Login` FROM users WHERE ID_User='$id'");
					while ($myrow = mysqli_fetch_array($result)) {
						echo "Логин: {$myrow['Login']} "; 
					}
					?>
		</h2>
		<img src="./img/account.png" style="width: 100px; margin-left: 100px; margin-right: 50px;">
	</div>

  <?       
    $id=$_SESSION['ID_User'];
    include ("bd.php");
    $result = mysqli_query($bd, "SELECT `Progress` FROM users WHERE ID_User='$id'");
    $myrow = mysqli_fetch_array($result);
    $number = $myrow[0];
    if ($number == 9) {
      $image = './img/sertif.ico';
    } 
    else {
      $image = '';
    }
  ?>
  <h3 style="position: absolute; margin-left: 730px; margin-top: 160px;">
    <?
      include ("bd.php");
      $id=$_SESSION['ID_User'];
      $result = mysqli_query($bd, "SELECT `Login` FROM users WHERE ID_User='$id'");
      $result2 = mysqli_query($bd, "SELECT `Progress` FROM users WHERE ID_User='$id'");
      $myrow = mysqli_fetch_array($result2);
      $number = $myrow[0];
      if ($number == 9) {
        while ($myrow = mysqli_fetch_array($result)) {
          echo "{$myrow['Login']}"; 
        }
      } 
      else {
        while ($myrow = mysqli_fetch_array($result)) {
          echo "";
        }
      }
    ?>
  </h3>
  <img src="<?php echo $image; ?>" style="margin-left: 450px; max-width: 600px;">

	<div class="news__btn" style="margin-top: 70px;">
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
    </div>

</form>

<footer class="footer" style="margin-top: 50px;">
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
            <a class="header__btn" href="#frm">
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

</body>
</html>