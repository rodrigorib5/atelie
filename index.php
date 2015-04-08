<!DOCTYPE HTML>
<html>
<?php include('head.php'); ?>
		<!-- Jquery para SlideShow -->
		<script type="text/javascript">
			jQuery(function($){
				$.supersized({
						// Functionality
						slideshow      : 1, // Slideshow on/off
						autoplay        : 1, // Slideshow starts playing automatically
						start_slide     : 1, // Start slide (0 is random)
						stop_loop      : 0, // Pauses slideshow on last slide
						random         : 0, // Randomize slide order (Ignores start slide)
						slide_interval : 3000,// Length between transitions
						transition       : 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
						transition_speed: 1000, // Speed of transition
						new_window      : 1, // Image links open in new window/tab
						pause_hover     : 0, // Pause slideshow on hover
						keyboard_nav    : 1, // Keyboard navigation on/off
						performance     : 1, // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
						image_protect   : 1, // Disables image dragging and right click with Javascript

						// Size & Position
						min_width       : 0, // Min width allowed (in pixels)
						min_height      : 0, // Min height allowed (in pixels)
						vertical_center : 1, // Vertically center background
						horizontal_center:1, // Horizontally center background
						fit_always      : 0, // Image will never exceed browser width or height (Ignores min. dimensions)
						fit_portrait    : 1, // Portrait images will not exceed browser height
						fit_landscape   : 0, // Landscape images will not exceed browser width

						// Components
						slide_links     : 'blank',  // Individual links for each slide (Options: false, 'num', 'name', 'blank')
						thumb_links     : 1, // Individual thumb links for each slide
						thumbnail_navigation : 0, // Thumbnail navigation
						slides          :[ // Slideshow Images
										{image : 'images/enroladinhos.jpg', title : 'Enroladinhos'},
										{image : 'images/miniBaguetes.jpg', title : 'Baguetes'},
										{image : 'images/cupcakes.jpg', title : 'cupcakes'},
										{image : 'images/barcaBrigadeiro.jpg', title : 'brigadeiro'},
									],

						// Theme Options
						progress_bar    : 1, // Timer for each slide
						mouse_scrub     : 0

				});
			});
		</script>

<body class="homepage">

		<!-- Header -->
		<div id="header">
			<!-- Inner -->
			<div class="inner">
			<?php include('logo.php'); ?>
					<a href="#banner" class="button circled scrolly logo-btn-click">Delícias!</a>
			</div>
			<!-- Nav -->
			<?php include('menu.php'); ?>

		</div>

		<!-- Banner -->
		<section id="banner">
			<header>
				<h2><strong>HUUMMM!!!</strong> Ficou com água na boca ?!</h2>
				<p>
					Vários produtos com sabores inesquecíveis.
				</p>
			</header>
		</section>

		<!-- Carousel -->
		<section class="carousel" id="carousel">
				<div class="reel">

						<article>
								<a href="salgados-fritos.php" class="image featured"><img src="images/coxinha.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Coxinha de Frango</a></h3>
								</header>
								<div class="price">
									R$ 37 o Cento
								</div>
								<p>Crocantes por fora e sequinhos por dentro.</p>
						</article>

						<article>
								<a href="salgados-assados.php" class="image featured"><img src="images/empada.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Empadas</a></h3>
								</header>
								<div class="price">
									R$ 2 a Unid.
								</div>
								<p>Nos sabores, Frango, Palmito, Carne seca.</p>
						</article>

						<article>
								<a href="baguetes.php" class="image featured"><img src="images/baguete.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Baguetes</a></h3>
								</header>
								<div class="price">
										R$ 22 a Unid.
								</div>
								<p>Nos sabores de Atum e Salame. Entre outros.<p>
						</article>

						<article>
								<a href="mini-pizzas.php" class="image featured"><img src="images/miniPizzas.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Mine Pizzas</a></h3>
								</header>
								<div class="price">
									R$ 50 o Cento
								</div>
								<p>Mini pizzas com sabores variádos. Confira</p>
						</article>

						<article>
								<a href="pasteis.php" class="image featured"><img src="images/pastelPodre.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Pastéis</a></h3>
								</header>
								<div class="price">
									R$ 37 o Cento
								</div>
								<p>Pastéis de vários sabores de dar água na boca</p>
						</article>

						<article>
								<a href="doces.php" class="image featured"><img src="images/brigadeiros.jpg" alt="" /></a>
								<header>
										<h3><a href="#">Brigadeiros</a></h3>
								</header>
								<div class="price">
									R$ 40 o Cento
								</div>
								<p>Brigadeiros de dar água na boca. Confira</p>
						</article>
				</div>
		</section>
		<?php include('footer.php'); ?>
</body>
</html>