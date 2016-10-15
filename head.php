<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Industrial</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300%7CLibre+Baskerville:400,400italic,700%7CLato:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/settings.css" rel="stylesheet">
		<!-- owl.carousel.css -->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/skin.less" rel="stylesheet/less">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<?php
	$info_email = "info@dubaimanpower.ae";
	$phone = "+971 526-929266";
	?>
	<body>
		<!--Wrapper Section Start Here -->
		<div id="wrapper">
			<div id="pageloader" class="row m0">
				<div class="loader-item"><img src="assets/svg/grid.svg" alt="loading"></div>
			</div>
			<!--header Section Start Here -->
			<header id="header">
				<div class="primary-header">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 left-header">
								<span>Construction Work Manpower Supply &amp; Projects</span>
							</div>
							<div class="col-sm-7 right-header">
								<ul>
									<li>
										<a href="mailto:info@industrialtheme.com"><i class="fa fa-envelope-o"></i> <?php echo (isset($info_email))? $info_email : "info@manpowersupplyDubai.com";?></a>
									</li>
									<li>
										<a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="secondry-header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<a href="index.html" class="logo"><img src="assets/img/logo.png" alt="logo" /></a>
								<span class="num"><?=$phone?></span>
							</div>
							<div class="col-xs-12 col-sm-8 menu-wrapper">
								<div class="button-wrapper">
									<button class="nav-button"></button>
								</div>
								<nav class="navigation">

									<ul class="menu">
										<li class="active">
											<a href="index.php">home</a>

										</li>
										<li>
											<a href="requirement.php">Requirements</a>
										</li>



										<li>
											<a href="contact.php">contact</a>
										</li>
									</ul>
								</nav>
								<a href="apply.php" class="quote">APPLY</a>
							</div>

						</div>
					</div>
				</div>

			</header>
			<!--header Section End Here -->
      <?php require('crud.php');?>
