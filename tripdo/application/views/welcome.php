<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Destino</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Destino project">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?= base_url()?>/public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url()?>/public/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/inex_style.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/public/styles/index_reponsive.css">

</head>

<body>
	<div class="super_container">

		<!-- Header -->
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col">
						<div
							class=" header_container fixed-top d-flex flex-row align-items-center justify-content-start">
							<!-- Logo -->
							<div class="logo_container ">
								<div class="logo">
									<div>TripDo</div>
									<div>travel agency</div>
									<div class="logo_image"><img src="<?= base_url()?>/public/images/logo.png" alt=""></div>
								</div>
							</div>

							<!-- Main Navigation -->
							<nav class="main_nav ml-auto ">
								<ul class="main_nav_list ">
									<li class="main_nav_item active"><a href="index.html">Inicio</a></li>
									<li class="main_nav_item"><a href="#">About us</a></li>
									<li class="main_nav_item"><a href="busqueda.html">Buscar</a></li>
									<li class="main_nav_item"><a href="viaje.html">Viaje</a></li>
									<li class="main_nav_item"><a href="#">Contact</a></li>
								</ul>
							</nav>
							<!-- Hamburger -->
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Menu -->
		<div class="menu_container menu_mm">

			<!-- Menu Close Button -->
			<div class="menu_close_container">
				<div class="menu_close"></div>
			</div>

			<!-- Menu Items -->
			<div class="menu_inner menu_mm">
				<div class="menu menu_mm">
					<div class="menu_search_form_container">
						<form action="#" id="menu_search_form">
							<input type="search" class="menu_search_input menu_mm">
							<button id="menu_search_submit" class="menu_search_submit" type="submit"><img
									src="<?= base_url()?>/public/images/search_2.png" alt=""></button>
						</form>
					</div>
					<ul class="menu_list menu_mm">
						<li class="menu_item menu_mm"><a href="#">Home</a></li>
						<li class="menu_item menu_mm"><a href="about.html">About us</a></li>
						<li class="menu_item menu_mm"><a href="offers.html">Offers</a></li>
						<li class="menu_item menu_mm"><a href="news.html">News</a></li>
						<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
					</ul>

					<!-- Menu Social -->

					<div class="menu_social_container menu_mm">
						<ul class="menu_social menu_mm">
							<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest"
										aria-hidden="true"></i></a></li>
							<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin"
										aria-hidden="true"></i></a></li>
							<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram"
										aria-hidden="true"></i></a></li>
							<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook"
										aria-hidden="true"></i></a></li>
							<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter"
										aria-hidden="true"></i></a></li>
						</ul>
					</div>

					<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
				</div>

			</div>

		</div>

		<!-- Home -->
		<div class="home">
			<div class="home_background" style="background-image:url(<?= base_url()?>/public/images/home.jpg)"></div>
			<div class="home_content">
				<div class="home_content_inner">
					<div class="home_text_large">TRIPDO</div>
					<div class="home_text_small">Discover new worlds</div>
				</div>
			</div>
		</div>
		
		<!-- Popular -->
		<div class="popular">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>Destinos populares</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div
							class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">

							<!-- Popular Item -->
							<div class="popular_item">
								<a href="offers.html">
									<img src="<?= base_url()?>/public/images/popular_1.jpg" alt="image by Egzon Bytyqi">
									<div class="popular_item_content">
										<div class="popular_item_title">Turkey</div>
									</div>
								</a>
							</div>

							<!-- Popular Item -->
							<div class="popular_item">
								<a href="offers.html">
									<img src="<?= base_url()?>/public/images/popular_2.jpg" alt="https://unsplash.com/@michael75">
									<div class="popular_item_content">
										<div class="popular_item_title">Hawai</div>
									</div>
								</a>
							</div>

							<!-- Popular Item -->
							<div class="popular_item">
								<a href="offers.html">
									<img src="<?= base_url()?>/public/images/popular_3.jpg" alt="https://unsplash.com/@sapegin">
									<div class="popular_item_content">
										<div class="popular_item_title">Ireland</div>
									</div>
								</a>
							</div>

							<!-- Popular Item -->
							<div class="popular_item">
								<a href="offers.html">
									<img src="<?= base_url()?>/public/images/popular_4.jpg" alt="https://unsplash.com/@kensuarez">
									<div class="popular_item_content">
										<div class="popular_item_title">Thailand</div>
									</div>
								</a>
							</div>

							<!-- Popular Item -->
							<div class="popular_item">
								<a href="offers.html">
									<img src="<?= base_url()?>/public/images/popular_5.jpg" alt="https://unsplash.com/@noahbasle">
									<div class="popular_item_content">
										<div class="popular_item_title">Croatia</div>
									</div>
								</a>
							</div>

							<!-- Popular Item -->
							<div class="popular_item">
								<a href="offers.html">
									<img src="<?= base_url()?>/public/images/popular_6.jpg" alt="https://unsplash.com/@seb">
									<div class="popular_item_content">
										<div class="popular_item_title">Bali</div>
									</div>
								</a>
							</div>

							<!-- Popular Item -->
							<div class="popular_item">
								<a href="offers.html">
									<img src="<?= base_url()?>/public/images/popular_7.jpg" alt="https://unsplash.com/@nevenkrcmarek">
									<div class="popular_item_content">
										<div class="popular_item_title">France</div>
									</div>
								</a>
							</div>

							<!-- Popular Item -->
							<div class="popular_item">
								<a href="offers.html">
									<img src="<?= base_url()?>/public/images/popular_8.jpg" alt="https://unsplash.com/@bergeryap87">
									<div class="popular_item_content">
										<div class="popular_item_title">Vietnam</div>
									</div>
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<!-- Footer Column -->
					<div class="col-lg-8 footer_col">
						<div class="footer_about">
							<!-- Logo -->
							<div class="logo_container">
								<div class="logo">
									<div>destino</div>
									<div>travel agency</div>
									<div class="logo_image"><img src="<?= base_url()?>/public/images/logo.png" alt=""></div>
								</div>
							</div>
							<div class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel eleifend quis,
								tempus rut rum metus. Pellentesque ultricies enim eu quam fermentum hendrerit.</div>
							<div class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> All rights reserved | This
								template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
									href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
					</div>
					<!-- Footer Column -->
					<div class="col-lg-4 footer_col">
						<div class="tags footer_tags">
							<div class="footer_title">Tags</div>
							<ul class="tags_content d-flex flex-row flex-wrap align-items-start justify-content-start">
								<li class="tag"><a href="#">travel</a></li>
								<li class="tag"><a href="#">summer</a></li>
								<li class="tag"><a href="#">cruise</a></li>
								<li class="tag"><a href="#">beach</a></li>
								<li class="tag"><a href="#">offer</a></li>
								<li class="tag"><a href="#">vacation</a></li>
								<li class="tag"><a href="#">trip</a></li>
								<li class="tag"><a href="#">city break</a></li>
								<li class="tag"><a href="#">adventure</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>


	<script src="<?= base_url()?>/public/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url()?>/public/styles/bootstrap4/popper.js"></script>
	<script src="<?= base_url()?>/public/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="<?= base_url()?>/public/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="<?= base_url()?>/public/plugins/easing/easing.js"></script>
	<script src="<?= base_url()?>/public/plugins/parallax-js-master/parallax.min.js"></script>
	<script src="<?= base_url()?>/publicp/lugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url()?>/public/js/custom.js"></script>
</body>

</html>