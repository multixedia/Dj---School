<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="Index, Follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ACHTUNG: REFRESH ALLE 30 SEK 
	<meta http-equiv="refresh" content="30">-->
		
	<title>Dj School - <?php echo($seiten_title) ?></title>
	
	<!-- STYLES -->
	<link type="text/css" href="css/bootstrap.css" media="screen" rel="stylesheet" />
	<link type="text/css" href="css/bootstrap-responsive.css" media="screen" rel="stylesheet" />
	<link type="text/css" href="css/styles.css" media="screen" rel="stylesheet" />
	
<!--[if lt IE 9]>
<script>
    document.createElement('header');
    document.createElement('nav');
    document.createElement('section');
    document.createElement('article');
    document.createElement('aside');
    document.createElement('footer');
    document.createElement('hgroup');
</script>
<link type="text/css" href="css/style_ie.css" media="screen" rel="stylesheet" />
<script src="js/html5shiv.js"></script>
<![endif]-->

</head>
<body data-spy="scroll" data-target=".navbar" id="top">
<header class="navbar navbar-fixed-top">
	<?php 
		include_once("navi.php");
	?>
</header>
<section id="wrapper" class="container">
	<section class="slider">
		<!-- 	<img src="img/slider/slider-01.jpg" alt="Dj School" title="Dj School"> -->
		<div class="slideshow swipeshow">
		<ul class="slides">
		  <li class="slide">
		    <img src="bilder/slide/slider-02.jpg" alt="Dj School" title="Dj School" />
		  </li>
		  <li class="slide">
		    <img src="bilder/slide/slider-01.jpg" alt="Dj School" title="Dj School" />
		  </li>
		  <li class="slide with-overlay link-to-github">
		    <img src="bilder/slide/slider-03.jpg" alt="Dj School" title="Dj School" />
		  </li>
		</ul>
		<div class="clear"></div>
		<div class='dots'></div>
	</section>
	
	<section class="main-content">