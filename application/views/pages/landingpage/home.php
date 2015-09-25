<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/ico" href="<?= base_url('public/images/favicon.ico')?>"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ateliê dos Salgados</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('public/assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('public/assets/css/atelie.css') ?>" rel="stylesheet">
    <!-- Important Owl stylesheet -->
    <link href="<?= base_url('public/assets/css/owl.carousel.css') ?>"  rel="stylesheet">
    <!-- Default Theme -->
    <link href="<?= base_url('public/assets/css/owl.theme.css') ?>"  rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?= base_url('public/assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/supersized.css') ?>" type="text/css" media="screen" />
    <script type="text/javascript" src="<?= base_url('public/assets/js/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('public/assets/js/supersized.3.2.7.min.js') ?>"></script>

</head>
<script>
    
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
                                        {image : 'public/images/produtos/ingredientes.jpg', title : 'Enroladinhos'},
                                        {image : 'public/images/produtos/miniBaguetes.jpg', title : 'Brigadeiro'},
                                        {image : 'public/images/produtos/cupcakes.jpg', title : 'cupcakes'},
                                        {image : 'public/images/produtos/cupcakesBranco.jpg', title : 'brigadeiro'},
                                    ],

                        // Theme Options
                        progress_bar    : 1, // Timer for each slide
                        mouse_scrub     : 0

                });
            });

</script>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="<?= base_url('public/images/logo.png') ?>" class="img-responsive">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav pull-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">NOSSA HISTÓRIA</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="intro-text"></p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Nossa história</h2>
                <img src="<?= base_url('public/images/divisorBaixo.png') ?>">
                <p>Com mais de duas décadas de experiência unidas com a graduação na área de Gastronomia,
                <span style="font-family: Dancing Script, cursive; font-weight: bold; font-size: 25px;">
                    Ateliê dos Salgados,
                </span>
                traz o tradicional sabor, ao mais refinado, com produtos que
                impressionam tanto pelo aroma, como pela textura e sabor. Feitos carinhosamente à partir de receitas campeãs.</p>
            </div>
        </div>
    </section>

    <!-- Propaganda Section -->
    <section id="propaganda" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Salgados e Doces de Primeira com preços maravilhosos!</h2>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section id="product" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Alguns Produtos</h2>
                <p>Com mais de duas décadas de experiência unidas com a graduação na área de Gastronomia,
                <span style="font-family: Dancing Script, cursive; font-weight: bold; font-size: 25px;">
                    Ateliê dos Salgados,
                </span>
                traz o tradicional sabor, ao mais refinado, com produtos que
                impressionam tanto pelo aroma, como pela textura e sabor. Feitos carinhosamente à partir de receitas campeãs.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>

    <!-- Include js plugin -->
    <script src="<?= base_url('public/assets/js/owl.carousel.min.js') ?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('public/assets/js/bootstrap.min.js') ?>"></script>
    <!-- Plugin JavaScript -->
    <script src="<?= base_url('public/assets/js/jquery.easing.min.js') ?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url('public/assets/js/atelie.js') ?>"></script>

</body>
</html>
