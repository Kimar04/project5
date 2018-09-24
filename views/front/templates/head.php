<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/slideshow/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/slideshow/public/css/slider.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/slideshow/public/css/styleadmin.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/slideshow/public/css/contacto.css"><link rel="stylesheet" type="text/css" href="http://localhost/slideshow/public/css/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Front</title>
</head>
<body>
	<header>
    <figure><img src="http://localhost/slideshow/public/images/logo1.png" class="logo"></figure>
	<?php include ('views/front/nav/nav.php') ?>

  <!-- Full-width images with number and caption text -->
  <div class="w3-content w3-display-container" style="max-width:100%">
    <img class="mySlides" src="http://localhost/slideshow/public/images/couch.jpg" style="width:100%">
     <img class="mySlides" src="http://localhost/slideshow/public/images/header.jpg" style="width:100%">    
    <img class="mySlides" src="http://localhost/slideshow/public/images/wall.jpg" style="width:100%">
    
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
	</header>
