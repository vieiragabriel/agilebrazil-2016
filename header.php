<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="viewport" content="width=device-width">
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/registration.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/virada.css" type="text/css" rel="stylesheet" media="all">
	<script src="https://use.fontawesome.com/a25e743b24.js"></script>
	<script type="text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-12446729-1', 'auto');
		ga('send', 'pageview');
	</script>
	<?php wp_head(); ?>
</head>
<body>

<header class="headerAa">
	<nav class="headerAa-menu">
		<ul class="headerAa-menu-list">
			<li class="headerAa-menu-list-item">
				<a href="http://agilealliance.org/pt/">Agile Alliance</a>
			</li>

			<li class="headerAa-menu-list-item">
				<a href="http://agilealliance.org/pt/membresia/">Membros</a>
			</li>

			<li class="headerAa-menu-list-item logo">
				<a href="http://agilealliance.org/pt/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoAgileAlliance.png" alt="Logo da Agile Alliance">
				</a>
			</li>

			<li class="headerAa-menu-list-item">
				<?php pll_the_languages(array( 'show_flags' => 1,'show_names' => 0, 'hide_current' => 1 ));?>
			</li>
		</ul>
	</nav>
</header>

<main>
	<header class="site-header">
		<div class="container">
			<h1>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-agile-brazil.svg" alt="Logo Agile Brazil"></a>
			</h1>
			<nav class="main-menu">
				<ul>
					<?php  wp_nav_menu_no_ul(); ?>
				</ul>
			</nav>
		</div>
	</header>
