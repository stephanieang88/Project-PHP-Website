<!doctype html>
<html lang="en">
<head>
	<!--
		Author: 	Ang Siew Hong (P7043360)
		Completed: 	07 Jan 2018
		Notes: 		CA02 Assignment
	-->
	<title>M+ Montessori</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo url_for('/stylesheets/styles.css'); ?>">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand ml-md-3 ml-1" href="index.php"><img src="images/logo.png" width="40" height="40" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><img class="img-fluid mt-1" src="images/hamburger_icon.png"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link ml-2" id="<?php echo ($_SERVER['PHP_SELF'] == "/public/index.php" ? "active" : ""); ?>" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2" id="<?php echo ($_SERVER['PHP_SELF'] == "/public/practical_life.php" ? "active" : ""); ?>" href="practical_life.php">Practical Life</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2" id="<?php echo ($_SERVER['PHP_SELF'] == "/public/sensorial.php" ? "active" : ""); ?>" href="sensorial.php">Sensorial</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2" id="<?php echo ($_SERVER['PHP_SELF'] == "/public/mathematics.php" ? "active" : ""); ?>" href="mathematics.php">Mathematics</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2" id="<?php echo ($_SERVER['PHP_SELF'] == "/public/biology.php" ? "active" : ""); ?>" href="biology.php">Biology</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2" id="<?php echo ($_SERVER['PHP_SELF'] == "/public/geography.php" ? "active" : ""); ?>" href="geography.php">Geography</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2" id="<?php echo ($_SERVER['PHP_SELF'] == "/public/contact.php" ? "active" : ""); ?>" href="contact.php"><i class="fa fa-envelope-o fa-lg"></i></a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<a class="btn btn-shopping mr-1" href="#"><i class="fa fa-sign-in fa-lg"></i> Login Here</a>
					<a class="btn btn-shopping" href="#"><i class="fa fa-shopping-basket fa-2x"></i></a>
				</form>
			</div>
		</nav>
	</header>
