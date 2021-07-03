<?php
   if (isset($_POST['Login'])) { $login = $_POST['Login']; if ($login == '') { unset($login);} } 
   if (isset($_POST['Password'])) { $password=$_POST['Password']; if ($password =='') { unset($password);} }
   if (empty($login) or empty($password)) 
   {
    exit ('<script>window.location.href = "login.php";
    alert("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    </script>');
   }
   $login = stripslashes($login);
   $login = htmlspecialchars($login);
   $password = stripslashes($password);
   $password = htmlspecialchars($password);
   $login = trim($login);
   $password = trim($password);
   include ("bd.php");
   $result = mysqli_query($bd, "SELECT ID_User FROM users WHERE login='$login'");
   $myrow = mysqli_fetch_array($result);
   if (!empty($myrow['ID_User'])) {
      $result = mysqli_query($bd, "SELECT ID_User FROM users WHERE password='$password'");
      $myrow = mysqli_fetch_array($result);
      if(!empty($myrow['ID_User']))
      {
         session_start();
         $_SESSION['ID_User'] = $myrow[0];
         exit ('<script>window.location.href = "index.php";
         alert("Вы успешно вошли!");
         </script>');
      }
      else
      {
      exit ('<script>window.location.href = "login.php";
      alert("Извините, введённый вами логин и(или) пароль не был зарегистрирован. Попробуйте ввести другой логин и(или) пароль.");
      </script>');
      }
   }
   else
   {
      exit ('<script>window.location.href = "login.php";
        alert("Неверно введены данные.");
        </script>');
   }
?>