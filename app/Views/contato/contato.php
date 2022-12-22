<!DOCTYPE HTML>
<html lang="en" data-theme="wireframe">

<head>
	<!--=============== basic  ===============-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSR Contato</title>
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<!--=============== javascript  ===============-->
	<?php echo view('partials/scripts'); ?>
	<!--=============== css  ===============-->
	<?php echo view('partials/styles'); ?>
	<!--=============== favicons ===============-->
	<link rel="shortcut icon" href="images/favicon.ico">
</head>

<body x-data="{navOpen: false, scrolledFromTop: false}"
  x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
  @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false">
<!-- header -->
<?php echo view('components/Navbar'); ?>

<!-- Slider -->


<!-- Contato -->
<?php echo view('components/Contato'); ?>

<!-- Footer -->
<?php echo view('components/Footer'); ?>

</body>

</html>
