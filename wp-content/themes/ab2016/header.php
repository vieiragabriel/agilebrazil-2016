<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">
	<meta name=viewport content="width=device-width,initial-scale=1">

	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300,800' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/lib/grid12.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/button.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/headerAa.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/keynotes.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/program.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/place.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/sponsorship.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/supporter.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/subcribe.css" type="text/css" rel="stylesheet" media="all">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
	<![endif]-->
	<script type="text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-12446729-1', 'auto');
		ga('send', 'pageview');
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(function () {
				$('.wrap-header-menu').click(function () {
					;
					$('.header-menu').slideToggle();
				});
			});

			$('#submit').on('click', function () {

				var $form = $('#formEmail');

				$.ajax({
					type: 'POST',
					datatype: 'json',
					url: $form[0].action,
					data: $form.serialize(),
					success: function (response, status) {
						var messageContainer = $('#formMessage');
						var _obj = { "status": "error", "message": "Não foi possível enviar seus dados. Tente novamente mais tarde." };
						var jsonResponse = JSON.parse(response) || _obj;

						if (jsonResponse.status === 'error') {
							messageContainer
								.text(jsonResponse.message)
								.removeClass('success')
								.addClass('error')
								.css('display', 'block');
							return false;
						}

						messageContainer
							.text('Email cadastrado com sucesso!')
							.removeClass('error')
							.addClass('success')
							.css('display', 'block');
					},
					error: function (xhr, status) {
						var messageContainer = $('#formMessage');

						messageContainer
							.text('Não foi possível enviar seus dados. Tente novamente mais tarde.')
							.removeClass('success')
							.addClass('error')
							.css('display', 'block');
					}
				});
			});
		});
	</script>
	<?php wp_head(); ?>
</head>

<body class="home">

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
				<a href="en/index.html">English version</a>
			</li>
		</ul>
	</nav>
</header>
<main>