<?php 

session_start();
session_destroy();

header("Location: wh_login.php");

?>