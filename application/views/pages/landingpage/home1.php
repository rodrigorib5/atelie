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
                            <p><img src="<?= base_url('public/images/logo.png') ?>"></p>
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
                    <?php foreach ($produtos as $produto) { ?>
                        <article>
                            <a href="<?= base_url('produtos/' . $produto->href) ?>" class="image featured"><img src="<?= base_url('public/images/produtos') .'/'. $produto->nomeArquivado ?>" alt="" /></a>
                            <header>
                                <h3><a href="#"><?= $produto->tipoProduto ?></a></h3>
                            </header>
                            <div class="price">
                                <p>R$ <?= $produto->valor ?></p>
                            </div>
                            <p><?= $produto->produtos ?></p>
                        </article>
                    <?php } ?>
                </div>
            </section>

        <!-- Footer -->
            <div id="footer">
                <div class="container">
                    <header>
                    <h2>Perguntas ou sugestões? / Encomende aqui:</h2>
                    <h3>Se preferir, nos ligue: <li class="fa fa-phone">(44) 9101-6562 (44) 3024-9298</li></h3>
                    </header>
                    <div class="">
                        <section>
                            <form method="post" action="envia.php">
                                <div class="row half">
                                    <div class="6u">
                                        <input name="nomeremetente" placeholder="Nome" type="text"
                                            class="text" required />
                                    </div>
                                    <div class="6u">
                                        <input name="emailremetente" placeholder="Email" type="email"
                                            class="text" required />
                                    </div>
                                </div>
                                <div class="row half">
                                    <div class="12u">
                                        <textarea name="mensagem" placeholder="Mensagem" type="text"
                                            class="text" required></textarea>
                                    </div>
                                </div>
                                <div class="row half">
                                    <div class="12u">
                                        <input type="submit" name="enviar" value="Enviar Mensagem"
                                            class="button button-icon fa fa-envelope">
                                    </div>
                                </div>
                                <input type="hidden" name="assunto" value="Contato Ateliê">
                            </form>
                        </section>
                </div>
                <div class="row">
                    <div class="12u">

                    <!-- Contact -->
                    <section class="contact">
                        <header>
                            <h3>Quer ser o primeiro a saber das novidades ?</h3>
                        </header>
                        <p>Clique nos links abaixo e nos siga !</p>
                        <ul class="icons">
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                        </ul>
                    </section>

                    <!-- Copyright -->
                    <div class="copyright">
                        <ul class="menu">
                            <br>
                            <li class="fa fa-home">Rua Monte Carlo - Maringá-PR</li>
                            <li class="fa fa-phone">(44) 9101-6562 (44) 3024-9298</li>
                            <li class="fa fa-envelope"><a
                            href="mailto:contato@ateliesalgados.com.br">contato@ateliesalgados.com.br</a></li>
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