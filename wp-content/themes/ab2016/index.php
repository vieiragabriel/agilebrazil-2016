<?php get_header(); ?>

	<header class="header">
		<div class="volunteers">
			<a href="http://agilealliance.org/aabrazil/agile-brazil/chamadas-para-cidades-em-2017" target="_blank">
				<h5>Leve o <strong>AB2017</strong></h5>
				<h6>Para Sua Cidade</h6>
			</a>
		</div>
		<div class="container">
			<h1 class="header-title">
				<a href="index.html">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-ab.png" alt="Logo da Agile Brazil">
				</a>
			</h1>
			<nav class="wrap-header-menu">
				<ul class="header-menu">
					<?php  wp_nav_menu_no_ul(); ?>
				</ul>
			</nav>

			<div class="header-info">
				<h2 class="header-info-title">21 a 23</h2>
				<h2 class="header-info-subtitle">de Outubro</h2>
				<h3 class="header-info-helpText">Porto de Galinhas - PE</h3>
				<a href="https://inscricoes.agilebrazil.com/events/12/attendances/new?locale=pt" target="_blank" class="buttonAction">Inscreva-se Agora!</a>
				<a href="programa.html" class="buttonAction">Veja a programação</a>
			</div>
		</div>
	</header>

<?php if(is_front_page()) :?>

<?php endif; ?>


<?php
while ( have_posts() ) : the_post();
	the_content();
endwhile;
?>

	
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
