<?php
session_start();
session_destroy();
unset($_SESSION["login_user2"]);
header("location:index.php");
?>