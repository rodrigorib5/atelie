<nav id="nav">
	<ul>
		<li><a href="<?= base_url(); ?>">Home</a></li>
		<li>
			<a href="#">Produtos &hellip;</a>
			<ul>
				<li>
					<a href="#">Salgados &hellip;</a>
					<ul>
						<li><a href="<?= base_url('produtos/salgados-assados'); ?>">Assados</a></li>
						<li><a href="<?= base_url('produtos/salgados-fritos'); ?>">Fritos</a></li>
					</ul>
				</li>
				<li><a href="<?= base_url('produtos/pasteis'); ?>">Pastéis</a></li>
				<li><a href="<?= base_url('produtos/mini-pizzas'); ?>">Mini Pizzas</a></li>
				<li><a href="<?= base_url('produtos/baguetes'); ?>">Baguetes</a></li>
				<li><a href="<?= base_url('produtos/doces'); ?>">Doces</a></li>
			</ul>
		</li>
		<li><a href="<?= base_url('sobre-nos'); ?>">Sobre Nós</a></li>
	</ul>
</nav>