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
}    
 
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

register_nav_menus(array(
	'land'    => 'Верхнее меню ленда',
	'blog'    => 'Верхнее меню блога',
	'bottom' => 'Нижнее меню'
));

add_theme_support( 'custom-logo' );

// ------------------------------------------------------------------
// Вешаем все блоки, поля и опции на хук admin_init
// ------------------------------------------------------------------
//
add_action( 'admin_init', 'eg_settings_api_init' );
function eg_settings_api_init() {
	// Добавляем блок опций на базовую страницу "Общие"
	add_settings_section(
		'eg_setting_section', // секция
		'Дополнительные пользовательские настройки',
		'eg_setting_section_callback_function',
		'general' // страница
	);

	// Добавляем поля опций. Указываем название, описание, 
	// функцию выводящую html код поля опции.
	add_settings_field(
		'eg_setting_name',
		'Номер телефона',
		'eg_setting_callback_function', // можно указать ''
		'general', // страница
		'eg_setting_section' // секция
	);
	add_settings_field(
		'eg_setting_name2',
		'График работы',
		'eg_setting_callback_function2',
		'general', // страница
		'eg_setting_section' // секция
	);
	add_settings_field(
		'email',
		'E-mail',
		'eg_setting_callback_email',
		'general', // страница
		'eg_setting_section' // секция
	);
	add_settings_field(
		'adress',
		'Адрес',
		'eg_setting_callback_adress',
		'general', // страница
		'eg_setting_section' // секция
	);
	add_settings_field(
		'maps',
		'Ссылка на Яндекс-карты',
		'eg_setting_callback_maps',
		'general', // страница
		'eg_setting_section' // секция
	);

	// Регистрируем опции, чтобы они сохранялись при отправке 
	// $_POST параметров и чтобы callback функции опций выводили их значение.
	register_setting( 'general', 'eg_setting_name' );
	register_setting( 'general', 'eg_setting_name2' );
	register_setting( 'general', 'email' );
	register_setting( 'general', 'adress' );
	register_setting( 'general', 'maps' );
}

// ------------------------------------------------------------------
// Сallback функция для секции
// ------------------------------------------------------------------
//
// Функция срабатывает в начале секции, если не нужно выводить 
// никакой текст или делать что-то еще до того как выводить опции, 
// то функцию можно не использовать для этого укажите '' в третьем 
// параметре add_settings_section
//
function eg_setting_section_callback_function() {
	echo '<p>Вывод данных в <i>header</i> и <i>footer</i></p>';
}

// ------------------------------------------------------------------
// Callback функции выводящие HTML код опций
// ------------------------------------------------------------------
//
// Создаем text input теги
//
function eg_setting_callback_function() {
	echo '<input 
		name="eg_setting_name" 
		type="text"
		placeholder="+7 (800) 800-00-00" 
		value="' . get_option( 'eg_setting_name' ) . '"
		value="1" 
		class="code" 
	/>';
}
function eg_setting_callback_function2() {
	echo '<input 
		name="eg_setting_name2"  
		type="text"
		placeholder="ПН—ПТ, 9:00-22:00" 
		value="' . get_option( 'eg_setting_name2' ) . '" 
		class="code2"
	 />';
}
function eg_setting_callback_email() {
	echo '<input 
		name="email"  
		type="text"
		placeholder="admin@site.com" 
		value="' . get_option( 'email' ) . '" 
		class="code2"
	 />';
}
function eg_setting_callback_adress() {
	echo '<input 
		name="adress"  
		type="text"
		placeholder="г. Воронеж" 
		value="' . get_option( 'adress' ) . '" 
		class="code2"
	 />';
}

function eg_setting_callback_maps() {
	echo '<input 
		name="maps"  
		type="text"
		placeholder="https://maps.yandex.ru/" 
		value="' . get_option( 'maps' ) . '" 
		class="code2"
	 />';
}



add_action( 'admin_init', 'setting_social' );
function setting_social() {
	// Добавляем блок опций на базовую страницу "Общие"
	add_settings_section(
		'eg_setting_social', // секция
		'Социальные сети',
		'eg_setting_section_callback_social',
		'general' // страница
	);

	// Добавляем поля опций. Указываем название, описание, 
	// функцию выводящую html код поля опции.
	add_settings_field(
		'vk',
		'VK',
		'eg_setting_callback_vk', // можно указать ''
		'general', // страница
		'eg_setting_social' // секция
	);
	add_settings_field(
		'fb',
		'Facebook',
		'eg_setting_callback_fb', // можно указать ''
		'general', // страница
		'eg_setting_social' // секция
	);
	add_settings_field(
		'yt',
		'YouTube',
		'eg_setting_callback_yt', // можно указать ''
		'general', // страница
		'eg_setting_social' // секция
	);
	add_settings_field(
		'ig',
		'Instagram',
		'eg_setting_callback_ig', // можно указать ''
		'general', // страница
		'eg_setting_social' // секция
	);

	// Регистрируем опции, чтобы они сохранялись при отправке 
	// $_POST параметров и чтобы callback функции опций выводили их значение.
	register_setting( 'general', 'vk' );
	register_setting( 'general', 'fb' );
	register_setting( 'general', 'yt' );
	register_setting( 'general', 'ig' );
}

// ------------------------------------------------------------------
// Сallback функция для секции
// ------------------------------------------------------------------
//
// Функция срабатывает в начале секции, если не нужно выводить 
// никакой текст или делать что-то еще до того как выводить опции, 
// то функцию можно не использовать для этого укажите '' в третьем 
// параметре add_settings_section
//
function eg_setting_section_callback_social() {
	echo '<p>Вставьте ссылки социальных сетей</p>';
}

// ------------------------------------------------------------------
// Callback функции выводящие HTML код опций
// ------------------------------------------------------------------
//
// Создаем text input теги
//
function eg_setting_callback_vk() {
	echo '<input 
		name="vk" 
		type="text"
		placeholder="https://vk.com/" 
		value="' . get_option( 'vk' ) . '"
		value="1" 
		class="code" 
	/>';
}

function eg_setting_callback_fb() {
	echo '<input 
		name="fb" 
		type="text"
		placeholder="https://facebook.com/" 
		value="' . get_option( 'fb' ) . '"
		value="1" 
		class="code" 
	/>';
}

function eg_setting_callback_yt() {
	echo '<input 
		name="yt" 
		type="text"
		placeholder="https://youtube.com/" 
		value="' . get_option( 'yt' ) . '"
		value="1" 
		class="code" 
	/>';
}

function eg_setting_callback_ig() {
	echo '<input 
		name="ig" 
		type="text"
		placeholder="https://instagram.com/" 
		value="' . get_option( 'ig' ) . '"
		value="1" 
		class="code" 
	/>';
}








//Перевод телефона из шапки в кликабельность для ссылки

function tel() {
	$tel = get_option( 'eg_setting_name' );
	$tel = str_replace(' ', '', $tel);
	$tel = str_replace('-', '', $tel);
	$tel = str_replace('(', '', $tel);
	$tel = str_replace(')', '', $tel);
	echo $tel;
}


?>