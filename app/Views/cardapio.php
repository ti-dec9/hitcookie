<!DOCTYPE HTML>
<html lang="en" data-theme="wireframe">

<head>
	<!--=============== basic  ===============-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HitCookie - Cardápio</title>
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<!--=============== javascript  ===============-->
	<?php echo view('partials/scripts'); ?>
	<!--=============== css  ===============-->
	<?php echo view('partials/styles'); ?>
	<!--=============== favicons ===============-->
	<link rel="shortcut icon" href="images/favicon.ico">
	<!--=============== swiper ===============-->
	
</head>

<body  x-data="{navOpen: false, scrolledFromTop: false}"
x-init="window.pageYOffset >= 150 ? scrolledFromTop = true : scrolledFromTop = false"
@scroll.window="window.pageYOffset >= 150 ? scrolledFromTop = true : scrolledFromTop = false">
  
  
<!-- Nav -->
<?php echo view('components/Navbar'); ?>

<!-- Cardapio -->
<?php echo view('components/Cardapiopagina'); ?>

<!-- Footer -->
<?php echo view('components/Footer'); ?>

</body>
</html>

<style>

    
html {
  scroll-behavior: smooth;
}
</style>