<!DOCTYPE HTML>
<!--
    Helios by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Ateliê dos Salgados</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.onvisible.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
        <link rel="stylesheet" href="css/style-noscript.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body class="left-sidebar">
    <!-- Header -->
    <div id="header" style="background-image: url('/atelie/images/header.jpg');">
        <!-- Inner -->
        <!-- Nav -->
        <nav id="nav">
          <?php include('menu.php'); ?>
        </nav>
        <div class="inner">
            <?php include('logo.php'); ?>
        </div>
    </div>
    <!-- Main -->
    <div class="wrapper style1">
        <div class="container">
            <div class="row 200%">
                <div class="4u" id="sidebar">
                    <hr class="first" />
                    <section>
                        <header>
                            <h3>
                                <a href="#">Um Pouco de Nós</a>
                            </h3>
                        </header>
                            <p>
                                Do tradicional sabor, ao mais refinado, os produtos do <span id="logo">Ateliê dos Salgados</span>
                                nos impressionam tanto pelo aroma, como pela textura e sabor. Feitos carinhosamente à partir de receitas campeãs.
                            </p>
                            <footer>
                                <a href="#" class="button">Quem Somos</a>
                            </footer>
                    </section>
                        <hr />
                    <!-- Menu Lateral -->
                    <?php include('menu-lateral.php'); ?>
                    <!-- fim Menu Lateral -->
                </div>
                <div class="8u important(collapse)" id="content">
                    <article id="main">
                        <header>
                            <h2><a href="#">Salgados Assados !</a></h2>
                        </header>
                        <section>
                            <div class="row">
                                <article class="4u special">
                                    <a href="#" class="image featured"><img src="images/enroladinhoSalsicha.jpg" alt="" /></a>
                                    <header>
                                        <h3><a href="#">Enroladinho de Salsicha</a></h3>
                                    </header>
                                    <div class="price-menu">
                                        R$ 42 o Cento
                                    </div>
                                </article>
                                <article class="4u special">
                                    <a href="#" class="image featured"><img src="images/esfirraCarne.jpg" alt="" /></a>
                                    <header>
                                        <h3><a href="#">Esfirras (Carne, Frango)</a></h3>
                                    </header>
                                    <div class="price-menu">
                                        R$ 42 o Cento
                                    </div>
                             </article>
                                <article class="4u special">
                                    <a href="#" class="image featured"><img src="images/paoBatata.jpg" alt="" /></a>
                                    <header>
                                        <h3><a href="#">Pão de batata (Frango com Requeijão e Bacon) (Presunto e queijo) (Calabresa)</a></h3>
                                    </header>
                                    <div class="price-menu">
                                        R$ 42 o Cento
                                    </div>
                                    <p>

                                    </p>
                                </article>
                             <article class="4u special">
                                    <a href="#" class="image featured"><img src="images/empada.jpg" alt="" /></a>
                                    <header>
                                        <h3><a href="#">Empada (Frango, Palmito, Carne seca, Carne)</a></h3>
                                    </header>
                                    <div class="price-menu">
                                        R$ 2 a Unid.
                                    </div>
                             </article>
                             <article class="4u special">
                                    <a href="#" class="image featured"><img src="images/empadaCamarao.jpg" alt="" /></a>
                                    <header>
                                        <h3><a href="#">Empada (Camarão, bacalhau)</a></h3>
                                    </header>
                                    <div class="price-menu">
                                        R$ 3 a Unid.
                                    </div>
                             </article>
                            </div>
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>