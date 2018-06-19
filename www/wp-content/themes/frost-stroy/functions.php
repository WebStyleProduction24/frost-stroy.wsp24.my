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
	wp_register_style('blog-css', get_stylesheet_directory_uri().'/css/blog.css');
	wp_enqueue_style( 'blog-css');
	wp_register_style('fonts', get_stylesheet_directory_uri().'/fonts/fonts.css');
	wp_enqueue_style( 'fonts');
	wp_register_style('fonts-blog', get_stylesheet_directory_uri().'/blog/css/fonts.css');
	wp_enqueue_style( 'fonts-blog');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function my_scripts_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'fix', get_stylesheet_directory_uri().'/js/fix.js');
	wp_enqueue_script( 'fix' );
	wp_register_script( 'mobile-menu', get_stylesheet_directory_uri().'/js/mobile-menu.js');
	wp_enqueue_script( 'mobile-menu' );
	wp_register_script( 'script', get_stylesheet_directory_uri().'/js/script.js');
	wp_enqueue_script( 'script' );
}    

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

register_nav_menus(array(
	'land'    => 'Верхнее меню ленда',
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



function register_my_widgets(){
	register_sidebar( array(
		'name' => "Сайдбар (боковая колонка)",
		'id' => 'section-sidebar',
		'description' => 'Эти виджеты будут показаны в боковой колонке сайта',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		'before_widget' => ''
	) );
}
add_action( 'widgets_init', 'register_my_widgets' );

/*
 * Функция создает дубликат поста в виде черновика и редиректит на его страницу редактирования
 */
function true_duplicate_post_as_draft(){
	global $wpdb;
	if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'true_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
		wp_die('Нечего дублировать!');
	}

	/*
	 * получаем ID оригинального поста
	 */
	$post_id = (isset($_GET['post']) ? $_GET['post'] : $_POST['post']);
	/*
	 * а затем и все его данные
	 */
	$post = get_post( $post_id );

	/*
	 * если вы не хотите, чтобы текущий автор был автором нового поста
	 * тогда замените следующие две строчки на: $new_post_author = $post->post_author;
	 * при замене этих строк автор будет копироваться из оригинального поста
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;

	/*
	 * если пост существует, создаем его дубликат
	 */
	if (isset( $post ) && $post != null) {

		/*
		 * массив данных нового поста
		 */
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft', // черновик, если хотите сразу публиковать - замените на publish
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);

		/*
		 * создаем пост при помощи функции wp_insert_post()
		 */
		$new_post_id = wp_insert_post( $args );

		/*
		 * присваиваем новому посту все элементы таксономий (рубрики, метки и т.д.) старого
		 */
		$taxonomies = get_object_taxonomies($post->post_type); // возвращает массив названий таксономий, используемых для указанного типа поста, например array("category", "post_tag");
		foreach ($taxonomies as $taxonomy) {
			$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
			wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		}

		/*
		 * дублируем все произвольные поля
		 */
		$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		if (count($post_meta_infos)!=0) {
			$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
			foreach ($post_meta_infos as $meta_info) {
				$meta_key = $meta_info->meta_key;
				$meta_value = addslashes($meta_info->meta_value);
				$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
			}
			$sql_query.= implode(" UNION ALL ", $sql_query_sel);
			$wpdb->query($sql_query);
		}


		/*
		 * и наконец, перенаправляем пользователя на страницу редактирования нового поста
		 */
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
	} else {
		wp_die('Ошибка создания поста, не могу найти оригинальный пост с ID=: ' . $post_id);
	}
}
add_action( 'admin_action_true_duplicate_post_as_draft', 'true_duplicate_post_as_draft' );

/*
 * Добавляем ссылку дублирования поста для post_row_actions
 */
function true_duplicate_post_link( $actions, $post ) {
	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = '<a href="admin.php?action=true_duplicate_post_as_draft&amp;post=' . $post->ID . '" title="Дублировать этот пост" rel="permalink">Дублировать</a>';
	}
	return $actions;
}

add_filter( 'post_row_actions', 'true_duplicate_post_link', 10, 2 );


add_image_size( 'post-img-blog', 400, 300, true);

function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');


/* =======================================
Custom Settings - functions
=========================================*/

class Walker_Category_Custom extends Walker {



	public function start_el( &$output, $category, $depth = 0, $args = array(), $id= 0) {

		global $category_id;

		/** This filter is documented in wp-includes/category-template.php */
		$cat_name = apply_filters('list_cats', esc_attr( $category->name ),	$category);
		$cat_id = $category->cat_ID;
		if ($cat_id == $category_id){
			$link = '<a href="' . esc_url( get_term_link( $category ) ) . '" class="current-category">'. $cat_name . '</a>';
		}else {
			$link = '<a href="' . esc_url( get_term_link( $category ) ) . '">'. $cat_name . '</a>';
		}
		$output .= "\t$link <br />\n";
	}

}

function walk_category_tree_custom() {
	$args = func_get_args();
	$walker = new Walker_Category_Custom;
	return call_user_func_array( array( $walker, 'walk' ), $args );
}

function wp_list_categories_custom( $args = '' ) {
	$defaults = array(
		'child_of'            => 0,
		'current_category'    => 0,
		'depth'               => 0,
		'echo'                => 1,
		'exclude'             => '',
		'exclude_tree'        => '',
		'feed'                => '',
		'feed_image'          => '',
		'feed_type'           => '',
		'hide_empty'          => 1,
		'hide_title_if_empty' => false,
		'hierarchical'        => true,
		'order'               => 'ASC',
		'orderby'             => 'name',
		'show_count'          => 0,
		'show_option_all'     => '',
		'show_option_none'    => __( 'No categories' ),
		'style'               => 'list',
		'taxonomy'            => 'category',
		'title_li'            => __( 'Categories' ),
		'use_desc_for_title'  => 1,
	);

	$r = wp_parse_args( $args, $defaults );
	$categories = get_categories( $r );
	$depth = $r['depth'];
	$output .= walk_category_tree_custom( $categories, $depth, $r );
	echo $html = apply_filters( 'wp_list_categories_custom', $output, $args );
}