<?php 
    session_start();
    setcookie("userEmail", null, time() - 1);
    setcookie("userPass", null, time() - 1);
    session_destroy();
    header("Location: login.php");
?>