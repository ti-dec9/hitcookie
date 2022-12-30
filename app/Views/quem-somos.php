<!DOCTYPE HTML>
<html lang="en" data-theme="wireframe">

<head>
	<!--=============== basic  ===============-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HitCookie - Quem Somos</title>
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
  x-init="window.pageYOffset >= 250 ? scrolledFromTop = true : scrolledFromTop = false"
  @scroll.window="window.pageYOffset >= 250 ? scrolledFromTop = true : scrolledFromTop = false">
<!-- Header -->
<?php echo view('components/Navbar'); ?>

<!-- Quem Somos Texto -->
<?php echo view('components/Quemsomos'); ?>

<!-- Footer -->
<?php echo view('components/Footer'); ?>

</body>

</html>
