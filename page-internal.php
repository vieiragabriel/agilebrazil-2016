<?php
/**
 * Template Name: Internal Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Agile Brazil 2016
 */

get_header();
while ( have_posts() ) : the_post(); ?>
	<section id="internal-page-header" class="section">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<h2><?php echo get_post_meta( get_the_ID(), 'second_title', true ); ?></h2>
		</div>
	</section>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>