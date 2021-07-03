<?php
    session_start();
    include ("bd.php");
    $id=$_SESSION['ID_User'];
    $progress = 4; 
    $result2 = mysqli_query ($bd,"UPDATE users SET Progress = $progress WHERE ID_User='$id'"); 
    exit ('<script>window.location.href = "quiz5.php";</script>');
?>