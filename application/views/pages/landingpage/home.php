<!DOCTYPE HTML>
<!--
    Helios by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Ateliê Salgados</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="<?= base_url('public/assets/css/main.css'); ?>" />
        <!-- Scripts -->
        <script src="<?= base_url('public/assets/js/jquery.min.js'); ?>"></script>
        <!--Slide Show - SuperSized" />-->
        <link rel="stylesheet" href="<?= base_url('public/assets/css/supersized.css'); ?>" />
        <!-- Script Slide Show SuperSize -->
        <script src="<?= base_url('public/assets/js/jquery.easing.min.js'); ?>"></script>
        <script src="<?= base_url('public/assets/js/supersized.3.2.7.min.js'); ?>"></script>
    </head>
    <!-- Jquery para SlideShow -->
        <script type="text/javascript">
            jQuery(function($){
                $.supersized({
                        // Functionality
                        slideshow           : 1, // Slideshow on/off
                        autoplay            : 1, // Slideshow starts playing automatically
                        start_slide         : 1, // Start slide (0 is random)
                        stop_loop           : 0, // Pauses slideshow on last slide
                        random              : 0, // Randomize slide order (Ignores start slide)
                        slide_interval      : 3000,// Length between transitions
                        transition          : 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                        transition_speed    : 1000, // Speed of transition
                        new_window          : 1, // Image links open in new window/tab
                        pause_hover         : 0, // Pause slideshow on hover
                        keyboard_nav        : 1, // Keyboard navigation on/off
                        performance         : 1, // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
                        image_protect       : 1, // Disables image dragging and right click with Javascript

                        // Size & Position
                        min_width           : 0, // Min width allowed (in pixels)
                        min_height          : 0, // Min height allowed (in pixels)
                        vertical_center     : 1, // Vertically center background
                        horizontal_center:1, // Horizontally center background
                        fit_always          : 0, // Image will never exceed browser width or height (Ignores min. dimensions)
                        fit_portrait        : 1, // Portrait images will not exceed browser height
                        fit_landscape       : 0, // Landscape images will not exceed browser width

                        // Components
                        slide_links     : 'blank',  // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                        thumb_links     : 1, // Individual thumb links for each slide
                        thumbnail_navigation : 0, // Thumbnail navigation
                        slides          :[ // Slideshow Images
                                        {image : "<?= base_url('public/images/produtos/enroladinhos.jpg') ?>", title : 'Enroladinhos'},
                                        {image : "<?= base_url('public/images/produtos/miniBaguetes.jpg') ?>", title : 'Baguetes'},
                                        {image : "<?= base_url('public/images/produtos/cupcakes.jpg') ?>", title : 'cupcakes'},
                                        {image : "<?= base_url('public/images/produtos/barcaBrigadeiro.jpg') ?>", title : 'brigadeiro'},                                    ],

                        // Theme Options
                        progress_bar    : 1, // Timer for each slide
                        mouse_scrub     : 0

                });
            });
        </script>
    <body class="homepage">
        <div id="page-wrapper">

            <!-- Header -->
                <div id="header">

                    <!-- Inner -->
                        <div class="inner">
                            <header>
                                <h1><a href="index.html" id="logo">Ateliê Salgados</a></h1>
                                <hr />
                            </header>
                            <footer>
                                <a href="#banner" class="button circled scrolly">Delícias</a>
                            </footer>
                        </div>

                    <!-- Nav -->
                    <?php $this->load->view('templates/navbar') ?>

                </div>

            <!-- Banner -->
                <section id="banner">
                    <header>
                        <h2>HUUMMM!!! Ficou com água na boca ?!</h2>
                        <p>Vários produtos com sabores inesquecíveis.</p>
                    </header>
                </section>

            <!-- Carousel -->
                <section class="carousel">
                    <div class="reel">

                        <article>
                            <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Pulvinar sagittis congue</a></h3>
                            </header>
                            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                        </article>

                        <article>
                            <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Fermentum sagittis proin</a></h3>
                            </header>
                            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                        </article>

                        <article>
                            <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Sed quis rhoncus placerat</a></h3>
                            </header>
                            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                        </article>

                        <article>
                            <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Ultrices urna sit lobortis</a></h3>
                            </header>
                            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                        </article>

                        <article>
                            <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Varius magnis sollicitudin</a></h3>
                            </header>
                            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                        </article>

                        <article>
                            <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Pulvinar sagittis congue</a></h3>
                            </header>
                            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                        </article>

                        <article>
                            <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Fermentum sagittis proin</a></h3>
                            </header>
                            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                        </article>

                        <article>
                            <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Sed quis rhoncus placerat</a></h3>
                            </header>
                            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                        </article>

                        <article>
                            <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Ultrices urna sit lobortis</a></h3>
                            </header>
                            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                        </article>

                        <article>
                            <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
                            <header>
                                <h3><a href="#">Varius magnis sollicitudin</a></h3>
                            </header>
                            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                        </article>

                    </div>
                </section>

            <!-- Main -->
                <div class="wrapper style2">

                    <article id="main" class="container special">
                        <a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
                        <header>
                            <h2><a href="#">Sed massa imperdiet magnis</a></h2>
                            <p>
                                Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
                                pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
                            </p>
                        </header>
                        <p>
                            Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
                            posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                            sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
                            mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
                            lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
                            consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
                            interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
                            natoque aenean scelerisque.
                        </p>
                        <footer>
                            <a href="#" class="button">Continue Reading</a>
                        </footer>
                    </article>

                </div>

            <!-- Features -->
                <div class="wrapper style1">

                    <section id="features" class="container special">
                        <header>
                            <h2>Morbi ullamcorper et varius leo lacus</h2>
                            <p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
                        </header>
                        <div class="row">
                            <article class="4u 12u(mobile) special">
                                <a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
                                <header>
                                    <h3><a href="#">Gravida aliquam penatibus</a></h3>
                                </header>
                                <p>
                                    Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                                    porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                                </p>
                            </article>
                            <article class="4u 12u(mobile) special">
                                <a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
                                <header>
                                    <h3><a href="#">Sed quis rhoncus placerat</a></h3>
                                </header>
                                <p>
                                    Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                                    porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                                </p>
                            </article>
                            <article class="4u 12u(mobile) special">
                                <a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
                                <header>
                                    <h3><a href="#">Magna laoreet et aliquam</a></h3>
                                </header>
                                <p>
                                    Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                                    porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                                </p>
                            </article>
                        </div>
                    </section>

                </div>

            <!-- Footer -->
                <div id="footer">
                    <div class="container">
                        <div class="row">

                            <!-- Tweets -->
                                <section class="4u 12u(mobile)">
                                    <header>
                                        <h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
                                    </header>
                                    <ul class="divided">
                                        <li>
                                            <article class="tweet">
                                                Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                                                <span class="timestamp">5 minutes ago</span>
                                            </article>
                                        </li>
                                        <li>
                                            <article class="tweet">
                                                Hendrerit rutrum quisque.
                                                <span class="timestamp">30 minutes ago</span>
                                            </article>
                                        </li>
                                        <li>
                                            <article class="tweet">
                                                Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
                                                <span class="timestamp">3 hours ago</span>
                                            </article>
                                        </li>
                                        <li>
                                            <article class="tweet">
                                                Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
                                                <span class="timestamp">5 hours ago</span>
                                            </article>
                                        </li>
                                    </ul>
                                </section>

                            <!-- Posts -->
                                <section class="4u 12u(mobile)">
                                    <header>
                                        <h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
                                    </header>
                                    <ul class="divided">
                                        <li>
                                            <article class="post stub">
                                                <header>
                                                    <h3><a href="#">Nisl fermentum integer</a></h3>
                                                </header>
                                                <span class="timestamp">3 hours ago</span>
                                            </article>
                                        </li>
                                        <li>
                                            <article class="post stub">
                                                <header>
                                                    <h3><a href="#">Phasellus portitor lorem</a></h3>
                                                </header>
                                                <span class="timestamp">6 hours ago</span>
                                            </article>
                                        </li>
                                        <li>
                                            <article class="post stub">
                                                <header>
                                                    <h3><a href="#">Magna tempus consequat</a></h3>
                                                </header>
                                                <span class="timestamp">Yesterday</span>
                                            </article>
                                        </li>
                                        <li>
                                            <article class="post stub">
                                                <header>
                                                    <h3><a href="#">Feugiat lorem ipsum</a></h3>
                                                </header>
                                                <span class="timestamp">2 days ago</span>
                                            </article>
                                        </li>
                                    </ul>
                                </section>

                            <!-- Photos -->
                                <section class="4u 12u(mobile)">
                                    <header>
                                        <h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
                                    </header>
                                    <div class="row 25%">
                                        <div class="6u">
                                            <a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
                                        </div>
                                        <div class="6u$">
                                            <a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
                                        </div>
                                        <div class="6u">
                                            <a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
                                        </div>
                                        <div class="6u$">
                                            <a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
                                        </div>
                                        <div class="6u">
                                            <a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
                                        </div>
                                        <div class="6u$">
                                            <a href="#" class="image fit"><img src="images/pic15.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </section>

                        </div>
                        <hr />
                        <div class="row">
                            <div class="12u">

                                <!-- Contact -->
                                    <section class="contact">
                                        <header>
                                            <h3>Nisl turpis nascetur interdum?</h3>
                                        </header>
                                        <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
                                        <ul class="icons">
                                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                            <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                                            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                            <li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
                                        </ul>
                                    </section>

                                <!-- Copyright -->
                                    <div class="copyright">
                                        <ul class="menu">
                                            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                                        </ul>
                                    </div>

                            </div>

                        </div>
                    </div>
                </div>

        </div>
        <script src="<?= base_url('public/assets/js/jquery.dropotron.min.js'); ?>"></script>
        <script src="<?= base_url('public/assets/js/jquery.scrolly.min.js'); ?>"></script>
        <script src="<?= base_url('public/assets/js/jquery.onvisible.min.js'); ?>"></script>
        <script src="<?= base_url('public/assets/js/skel.min.js'); ?>"></script>
        <script src="<?= base_url('public/assets/js/util.js'); ?>"></script>
        <!--[if lte IE 8]><script src="<?= base_url(); ?> assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="<?= base_url('public/assets/js/main.js'); ?>"></script>
      </body>
</html>