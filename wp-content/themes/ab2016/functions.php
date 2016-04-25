<?php
/**
 * vantage functions and definitions
 *
 * @package ab2016
 */

function ab2016_register_theme_menu() {
	register_nav_menu( 'primary', 'Agile Brazil - Menu' );
}
add_action( 'init', 'ab2016_register_theme_menu' );

function wp_nav_menu_no_ul(){
	$options = array(
		'echo' => false,
		'container' => false,
		'theme_location' => 'primary',
		'fallback_cb'=> 'default_page_menu'
	);

	$menu = wp_nav_menu($options);
	echo preg_replace(array(
		'#^<ul[^>]*>#',
		'#</ul>$#'
	), '', $menu);

}

function default_page_menu() {
	wp_list_pages('title_li=');
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
	if( in_array('current-menu-item', $classes) ){
		$classes[] = 'active';
	}

	$classes[] = 'header-menu-item ';

	return $classes;
}

require_once('meta-box-class/my-meta-box-class.php');


require_once(TEMPLATEPATH . '/functions/place.php');
require_once(TEMPLATEPATH . '/functions/program.php');
require_once(TEMPLATEPATH . '/functions/sponsor.php');
require_once(TEMPLATEPATH . '/functions/subscribe.php');