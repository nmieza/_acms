<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIR CARGO MANAGEMENT SYSTEM</title>
    <body class="hold-transition login-page">
    <style>

    html{
    height: 100%;
}
 body {
    margin: 0;
    padding:0;

}

.topnav {
    position: relative;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

</style>
</head>
<body>
<a class="navbar-brand" href="./">
                <img src="http://localhost/_acms/uploads/logo-1645494239.jpg?v=1645494239" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                AIR CARGO MANAGEMENT SYSTEM                </a>
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="_trace.php">Trace Shipment</a>
  <a href="#about">About</a>
</div>

</body>
</html>
