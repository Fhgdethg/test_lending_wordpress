<?php get_header(); ?>
		<main>
			<section class="desktop">
				<img src="<?php echo get_template_directory_uri(); ?>/img/desktop_house.png" alt="House" class="desktop__img">
				<div class="desktop__info-wrp animate__animated">
					<div class="container desktop__info">
						<div class="desktop__info-left">
							<p class="desktop__info-left-subtitle">Lorem Ipsum is simply dummy text of the printing</p>
							<h2 class="desktop__info-left-title">Company Name</h2>
						</div>
						<div class="desktop__info-right">
							<p class="desktop__info-right-description">Lorem Ipsum is simply dummy text of the printing <span>and typesetting</span> industry.</p>
							<button class="btn desktop__info-right-btn">
								Select property
							</button>
						</div>
					</div>
				</div>
				<img src="./img/intersect.png" alt="Phone" class="desktop__intersect">
			</section>
			<section class="slider-section">
				<h1 class="main-title">Our projects</h1>
				<div #swiperRef="" class="swiper slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slide_1.png" alt="House" class="slide__img">
							<div class="slide__inner">
								<div class="slide__inner-texts">
									<p class="slide__inner-subtitle">Villa</p>
									<p class="slide__inner-title">Lorem Ipsum</p>
								</div>
								<div class="swiper-button-next inner-slider-button"></div>
							</div>
						</div>
						<div class="swiper-slide slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slide_2.png" alt="House" class="slide__img">
							<div class="slide__inner">
								<div class="slide__inner-texts">
									<p class="slide__inner-subtitle">Villa</p>
									<p class="slide__inner-title">Lorem Ipsum</p>
								</div>
								<div class="swiper-button-next inner-slider-button"></div>
							</div>
						</div>
						<div class="swiper-slide slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slide_1.png" alt="House" class="slide__img">
							<div class="slide__inner">
								<div class="slide__inner-texts">
									<p class="slide__inner-subtitle">Villa</p>
									<p class="slide__inner-title">Lorem Ipsum</p>
								</div>
								<div class="swiper-button-next inner-slider-button"></div>
							</div>
						</div>
					</div>
					<div class="slider__outer-slider-buttons-wrp">
						<div class="swiper-button-prev outer-slider-button"></div>
						<div class="swiper-button-next outer-slider-button"></div>
					</div>
				</div>
				<p class="slider-section__description">
					<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining.
				</p>
				<img class="slider-section__fone" src="<?php echo get_template_directory_uri(); ?>/img/bottom_fone.png" alt="Decoration">
			</section>
			<section class="bottom-section">
				<h2>More than 10 years</h2>
				<img class="bottom-section__desktop" src="<?php echo get_template_directory_uri(); ?>/img/bottom_home.png" alt="House">
			</section>
		</main>
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/dropdownMenus.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/langSettings.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/startAnimations.js"></script>
	</body>
</html>
