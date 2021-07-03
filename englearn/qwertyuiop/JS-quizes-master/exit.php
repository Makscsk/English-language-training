<?php 
    session_start();
    $_SESSION['ID_User'] = null;
    echo $_SESSION['ID_User'];
    echo "<script>window.location.replace(`index.php`)</script>"
?>