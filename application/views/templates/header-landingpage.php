<!DOCTYPE html>
<html>
<head>
	<title>Ateliê dos Salgados</title>
		
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<script src="<?= base_url('public/js/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('public/js/jquery.dropotron.min.js'); ?>"></script>
	<script src="<?= base_url('public/js/jquery.scrolly.min.js'); ?>"></script>
	<script src="<?= base_url('public/js/jquery.onvisible.min.js'); ?>"></script>
	<script src="<?= base_url('public/js/skel.min.js'); ?>"></script>
	<script src="<?= base_url('public/js/skel-layers.min.js'); ?>"></script>
	<script src="<?= base_url('public/js/init.js'); ?>"></script>

	<link rel="stylesheet" href="<?= base_url('public/css/supersized.css') ?>" type="text/css" media="screen" />

	<script type="text/javascript" src="<?= base_url('public/js/jquery.easing.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('public/js/supersized.3.2.7.min.js') ?>"></script>

	<link rel="stylesheet" href="<?= base_url('public/css/skel.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('public/css/style-noscript.css') ?>" />

	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
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
										{image : "<?= base_url('public/images/enroladinhos.jpg') ?>", title : 'Enroladinhos'},
										{image : "<?= base_url('public/images/miniBaguetes.jpg') ?>", title : 'Baguetes'},
										{image : "<?= base_url('public/images/cupcakes.jpg') ?> ", title : 'cupcakes'},
										{image : "<?= base_url('public/images/barcaBrigadeiro.jpg') ?>", title : 'brigadeiro'},
									],

						// Theme Options
						progress_bar    : 1, // Timer for each slide
						mouse_scrub     : 0

				});
			});
		</script>
<body class="homepage">
