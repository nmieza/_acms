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

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="_trace.php">Trace Shipment</a>
  <a href="#about">About</a>
</div>

</body>

<style>
    #main-header{
        position:relative;
        background: rgb(0,0,0)!important;
        background: radial-gradient(circle, rgba(0,0,0,0.48503151260504207) 22%, rgba(0,0,0,0.39539565826330536) 49%, rgba(0,212,255,0) 100%)!important;
    }
    #main-header:before{
        content:"";
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-image:url(http://localhost/_acms/uploads/cover-1645494240.jpg?v=1645494240);
        background-repeat: no-repeat;
        background-size: cover;
        filter: drop-shadow(0px 7px 6px black);
        z-index:-1;
    }

 </style>
  </head><body style="height: auto;">
<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand" href="./">
                <img src="http://localhost/_acms/uploads/logo-1645494239.jpg?v=1645494239" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                AIR CARGO MANAGEMENT SYSTEM                </a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link text-white" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="_trace.php">Trace Shipment</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="./?p=about">About</a></li>
                    </ul>
                </div>
                <div>
                  <a href="index.php" class="text-decoration-none text-reset"><b>Login</b></a>
                </div>
            </div>
        </nav>
</html>
