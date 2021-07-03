<?php
   if (isset($_POST['Login'])) { $login = $_POST['Login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
   if (isset($_POST['Password'])) { $password=$_POST['Password']; if ($password =='') { unset($password);} }
   if (isset($_POST['Progress'])) { $progress=$_POST['Progress']; if ($progress =='') { unset($progress);} }
   if (empty($login) or empty($password)) 
   {
      exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
   }
   $login = stripslashes($login);
   $login = htmlspecialchars($login);
   $password = stripslashes($password);
   $password = htmlspecialchars($password);
   $progress = stripslashes($progress);
   $progress = htmlspecialchars($progress);

   $login = trim($login);
   $password = trim($password);

   include ("bd.php"); 
   
   $result = mysqli_query($bd, "SELECT ID_User FROM users WHERE login='$login'");
   $myrow = mysqli_fetch_array($result);
   if (!empty($myrow['ID_User'])) {
      exit ('<script>window.location.href = "Registration.php";
      alert("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
      </script>');
    }
   
   $result2 = mysqli_query ($bd,"INSERT INTO users (Login,Password,Progress) VALUES('$login','$password','0')");
   
   if ($result2=='TRUE')
   {
      echo '<script>window.location.href = "index.php";
      alert("Регистрация прошла успешно!");
      </script>';
   }
   else {
      echo '<script>window.location.href = "Registration.php";
      alert("Ошибка! Вы не зарегистрированы!");
      </script>';
   }
    ?>