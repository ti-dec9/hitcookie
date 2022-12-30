<!DOCTYPE HTML>
<html  lang="en" data-theme="wireframe">

<head>
	<!--=============== basic  ===============-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HitCookie</title>
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	
	<!--=============== css  ===============-->
	<?php echo view('partials/styles'); ?>
	<!--=============== favicons ===============-->
	<link rel="shortcut icon" href="images/favicon.ico">
	<!--=============== swiper ===============-->
	
</head>

<body  x-data="{navOpen: false, scrolledFromTop: false}"
x-init="window.pageYOffset >= 250 ? scrolledFromTop = true : scrolledFromTop = false"
@scroll.window="window.pageYOffset >= 250 ? scrolledFromTop = true : scrolledFromTop = false">
  
  
<!-- Nav -->
<?php echo view('components/Navbar'); ?>

<!-- Slider -->
<?php echo view('components/Slider'); ?>

<!-- Cardapio -->
<?php echo view('components/Cardapiohome'); ?>

<!-- Novidades -->
<?php echo view('components/Novidades'); ?>

<!-- Footer -->
<?php echo view('components/Footer'); ?>
</body>
<!--=============== javascript  ===============-->
<?php echo view('partials/scripts'); ?>
</html>

<style>
html {
  scroll-behavior: smooth;
}
</style>