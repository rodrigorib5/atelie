<!DOCTYPE HTML>
<!--
    Helios by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php include('head-default.php'); ?>
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
                            <h2><a href="#">Pastéis!</a></h2>
                        </header>
                        <section>
                            <div class="row">
                                <article class="4u special">
                                    <a href="#" class="image featured"><img src="images/pastel.jpg" alt="" /></a>
                                    <header>
                                        <h3><a href="#">Pastel<br><span class="produtos">Vento, Carne, Queijo</span></a></h3>
                                    </header>
                                    <div class="price-menu">
                                        R$ 37 o Cento
                                    </div>
                                </article>
                                <article class="4u special">
                                    <a href="#" class="image featured"><img src="images/pastelPodre.jpg" alt="" /></a>
                                    <header>
                                        <h3><a href="#">Pastel "Massa Podre"<br><span class="produtos">Carne seca, Palmito e requeijão</span></a></h3>
                                    </header>
                                    <div class="price-menu">
                                        R$ 47 o Cento
                                    </div>
                                    <p>

                                    </p>
                                </article>
                                <article class="4u special">
                                    <a href="#" class="image featured"><img src="images/pastelFolhada.jpg" alt="" /></a>
                                    <header>
                                        <h3><a href="#">Pastel "Massa Folhada"<br><span class="produtos">Frango, Requeijão</span></a></h3>
                                    </header>
                                    <div class="price-menu">
                                        R$ 50 o Cento
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