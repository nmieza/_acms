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
  background-color: rgb(0, 128, 255);
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
  background-color: #bdedff;
  color: white;
}

</style>
</head>
<body>
<div class="topnav">
  
  <a href="ap_index.php">AIR CARGO MANAGEMENT SYSTEM</a>
  <a href="ap_index.php">Home</a>
  <a href="#">Airport Detail</a>
  <a href="#">Airport List</a>
  <a href="#">Shipment List</a>
  <li><a href="logout.php" target="_self">Log out</a></li>
</div>

</body>
</html>
