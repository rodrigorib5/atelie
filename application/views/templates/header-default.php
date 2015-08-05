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
<!-- Header -->
</head>
<body class="left-sidebar">
    <!-- Header -->
    <div id="header" style="background-image: url('<?= base_url('public/images/header.jpg') ?>');">
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
        <div class="inner">
            <div id="logo">
                <h1 class='logo-container'>
                    <a href="<?= base_url() ?>" >Ateliê dos Salgados</a>
                </h1>
            </div>
        </div>
    </div>