<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/5.3.6/simplebar.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
		<title>Test</title>
	</head>

	<body>
		<header class="header">
			<div class="container header__container animate__animated animate__fadeInUp">
				<a href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo header__logo">
				</a>
				<nav class="nav">
					<div class="menu-link">
						<p>
							Projects
						</p>
						<svg class="icon" width="7" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path opacity="0.8" d="M6.13313 0L7.2998 1.25L3.7998 5L0.299805 1.25L1.46647 0L3.7998 2.49994L6.13313 0Z" fill="white"/>
						</svg>
						<div class="menu-link__dropdown animate__animated">
							<a href="#">Project 1</a>
							<a href="#">Project 2</a>
							<a href="#">Project 3</a>
						</div>
					</div>
					<a href="" class="nav_link">
						About company
					</a>
					<a href="" class="nav_link">
						Cooperation
					</a>
					<a href="" class="nav_link">
						Contact us
					</a>
				</nav>
				<div class="lang-select__wrp">
					<div class="lang-select">
						<p class="lang-select__title">
							EN
						</p>
					</div>
					<div class="lang-select__dropdown animate__animated">
						<div class="lang-select">
							<p class="lang-select__title">
								UA
							</p>
						</div>
						<div class="lang-select">
							<p class="lang-select__title">
								FR
							</p>
						</div>
						<div class="lang-select">
							<p class="lang-select__title">
								DU
							</p>
						</div>
					</div>
				</div>
			</div>
		</header>