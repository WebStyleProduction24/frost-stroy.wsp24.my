<?php

function enqueue_styles() {
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
	wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
	wp_enqueue_style( 'font-style');

	wp_register_style('style-land', get_stylesheet_directory_uri().'/css/style.css');
	wp_enqueue_style( 'style-land');
	wp_register_style('bundle', get_stylesheet_directory_uri().'/css/bundle.css');
	wp_enqueue_style( 'bundle');
	wp_register_style('style-blog', get_stylesheet_directory_uri().'/blog/css/style.css');
	wp_enqueue_style( 'style-blog');
	wp_register_style('blog', get_stylesheet_directory_uri().'/blog/css/blog.css');
	wp_enqueue_style( 'blog');
	wp_register_style('fonts', get_stylesheet_directory_uri().'/fonts/fonts.css');
	wp_enqueue_style( 'fonts');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'custom.bundle', get_stylesheet_directory_uri().'/js/custom.bundle.js');
    wp_enqueue_script( 'custom.bundle' );
}    
 
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

register_nav_menus(array(
	'land'    => 'Верхнее меню ленда',
	'blog'    => 'Верхнее меню блога',
	'bottom' => 'Нижнее меню'
));

?>