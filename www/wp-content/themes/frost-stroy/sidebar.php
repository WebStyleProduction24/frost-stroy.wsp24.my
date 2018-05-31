<?php wp_nav_menu(array(
	'theme_location' => 'menu-section',
	'container'       => 'nav',
	'container_class' => 'section-menu'
));


if ( function_exists('dynamic_sidebar') )
	dynamic_sidebar('section-sidebar');
?>