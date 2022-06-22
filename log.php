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
  background: rgb(0,0,0)!important;
  background: radial-gradient(circle, rgba(0,0,0,0.48503151260504207) 22%, rgba(0,0,0,0.39539565826330536) 49%, rgba(0,212,255,0) 100%)!important;
  
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
  color: blue;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="_trace.php">Trace Shipment</a>
  <a href="#about">About</a>
</div>

</body>
</html>
