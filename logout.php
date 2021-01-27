<?php
 session_start();
unset($_SESSION['id']);
unset($_SESSION['user_level']);
session_destroy();
header("Location:index.php");
?>

