<?php
    session_start();
    include ("bd.php");
    $id=$_SESSION['ID_User'];
    $progress = 7; 
    $result2 = mysqli_query ($bd,"UPDATE users SET Progress = $progress WHERE ID_User='$id'"); 
    exit ('<script>window.location.href = "quiz8.php";</script>');
?>