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
                <?php $this->load->view('pages/menu/lateral') ?>
            </div>
            <div class="8u important(collapse)" id="content">
                <article id="main">
                    <header>
                        <h2><a href="#">Salgados e Doces !</a></h2>
                    </header>
                    <a href="#" class="image featured"><img src="<?= base_url('public/images/produtos.jpg') ?>" alt="Nossos produtos" /></a>
                    <p>
                        Salgados e Doces, preparados com o verdadeiro sabor caseiro.
                    </p>
                    <section>
                        <header>
                            <h3>Os campeões de vendas</h3>
                        </header>
                        <div class="row">
                            <article class="4u special">
                                <a href="<?= base_url('produtos/salgadosFritos') ?>" class="image featured"><img src="<?= base_url('public/images/pastel.jpg') ?>" alt="" /></a>
                                <header>
                                    <h3><a href="<?= base_url('produtos/salgadosFritos') ?>">Pastel de carne seca e palmito</a></h3>
                                </header>
                                <div class="price-menu">
                                    R$ 47 o Cento
                                </div>
                                <p>

                                </p>
                            </article>
                            <article class="4u special">
                                <a href="<?= base_url('produtos/salgadosAssados') ?>" class="image featured"><img src="<?= base_url('public/images/paoBatata.jpg') ?>" alt="" /></a>
                                <header>
                                    <h3><a href="<?= base_url('produtos/salgadosAssados') ?>">Pão de Batata com requeijão</a></h3>
                                </header>
                                <div class="price-menu">
                                    R$ 42 o Cento
                                </div>
                                <!-- <p>
                                    Salgados e Doces, preparados com carinho e por quem sabe.
                                </p> -->
                            </article>
                            <article class="4u special">
                                <a href="<?= base_url('produtos/salgadosFritos') ?>" class="image featured"><img src="<?= base_url('public/images/bolinhaQueijo.jpg') ?>" alt="" /></a>
                                <header>
                                    <h3><a href="<?= base_url('produtos/salgadosFritos') ?>">Bolinha de queijo</a></h3>
                                </header>
                                <div class="price-menu">
                                    R$ 37 o Cento
                                </div>
                                <p>

                                </p>
                            </article>
                        </div>
                    </section>
                </article>
            </div>
        </div>
    </div>
</div>