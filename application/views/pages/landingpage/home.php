<!-- Header -->
<div id="header">
    <!-- Inner -->
    <div class="inner">
        <div id="logo">
            <h1 class='logo-container'>
                <a href="index.php" >Ateliê dos Salgados</a>
            </h1>
        </div>
        <a href="#banner" class="button circled scrolly logo-btn-click">Delícias!</a>
    </div>
    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li>
                <a href="<?= base_url('produtos') ?>">Produtos&hellip;</a>
                <ul>
                    <li><a href="<?= base_url() ?>">Principal</a></li>
                    <li>
                        <a href="">Salgados &hellip;</a>
                        <ul>
                            <li><a href="<?= base_url('produtos/salgadosFritos') ?>">Fritos</a></li>
                            <li><a href="<?= base_url('produtos/sagadosAssados') ?>">Assados</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('produtos/pasteis') ?>">Pastéis</a></li>
                    <li><a href="<?= base_url('produtos/miniPizzas') ?>">Mini Pizzas</a></li>
                    <li><a href="<?= base_url('produtos/baguetes') ?>">Baguetes</a></li>
                    <li><a href="<?= base_url('produtos/doces') ?>">Doces</a></li>
                </ul>
            </li>
            <li><a href="#">Sobre Nós</a></li>
        </ul>
    </nav>
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
            <a href="<?= base_url('produtos/salgadosFritos') ?>" class="image featured">
            <img src="<?= base_url('public/images/coxinha.jpg') ?>" alt="" /></a>
            <header>
                <h3><a href="<?= base_url('produtos/salgadosFritos') ?>">Coxinha de Frango</a></h3>
            </header>
            <div class="price">
                R$ 37 o Cento
            </div>
            <p>Crocantes por fora e sequinhos por dentro.</p>
        </article>

        <article>
            <a href="<?= base_url('produtos/salgadosAssados') ?>" class="image featured">
            <img src="<?= base_url('public/images/empada.jpg') ?>" alt="" /></a>
            <header>
                <h3><a href="<?= base_url('produtos/salgadosAssados') ?>">Empadas</a></h3>
            </header>
            <div class="price">
                R$ 2 a Unid.
            </div>
            <p>Nos sabores, Frango, Palmito, Carne seca.</p>
        </article>

        <article>
            <a href="<?= base_url('produtos/baguetes') ?>" class="image featured">
            <img src="<?= base_url('public/images/baguete.jpg') ?>" alt="" /></a>
            <header>
                <h3><a href="<?= base_url('produtos/baguetes') ?>">Baguetes</a></h3>
            </header>
            <div class="price">
                    R$ 22 a Unid.
            </div>
            <p>Nos sabores de Atum e Salame. Entre outros.<p>
        </article>

        <article>
            <a href="<?= base_url('produtos/miniPizzas') ?>" class="image featured">
            <img src="<?= base_url('public/images/miniPizzas.jpg') ?>" alt="" /></a>
            <header>
                <h3><a href="<?= base_url('produtos/miniPizzas') ?>">Mine Pizzas</a></h3>
            </header>
            <div class="price">
                R$ 50 o Cento
            </div>
            <p>Mini pizzas com sabores variádos. Confira</p>
        </article>

        <article>
            <a href="<?= base_url('produtos/pasteis') ?>" class="image featured">
            <img src="<?= base_url('public/images/pastelPodre.jpg') ?>" alt="" /></a>
            <header>
                <h3><a href="<?= base_url('produtos/pateis') ?>">Pastéis</a></h3>
            </header>
            <div class="price">
                R$ 37 o Cento
            </div>
            <p>Pastéis de vários sabores de dar água na boca</p>
        </article>

        <article>
            <a href="<?= base_url('produtos/doces') ?>" class="image featured"><img src="<?= base_url('public/images/brigadeiros.jpg') ?>" alt="" /></a>
            <header>
                    <h3><a href="<?= base_url('produtos/doces') ?>">Brigadeiros</a></h3>
            </header>
            <div class="price">
                R$ 40 o Cento
            </div>
            <p>Brigadeiros de dar água na boca. Confira</p>
        </article>
    </div>
</section>