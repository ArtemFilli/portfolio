<?
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'Main');
add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'portfolio', [
		'label'  => null,
		'labels' => [
			'name'               => 'Портфолио',
			'singular_name'      => 'Проект',
			'add_new'            => 'Добавить проект',
			'add_new_item'       => 'Добавление проекта',
			'edit_item'          => 'Редактирование проекта',
			'new_item'           => 'Новый проект',
			'view_item'          => 'Смотреть проект',
			'search_items'       => 'Искать проект',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Портфолио',
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-arrow-right',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'page-attributes' ],
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

    register_post_type( 'skills', [
		'label'  => null,
		'labels' => [
			'name'               => 'Навыки',
			'singular_name'      => 'Навык',
			'add_new'            => 'Добавить',
			'add_new_item'       => 'Добавление',
			'edit_item'          => 'Редактирование',
			'new_item'           => 'Новый',
			'view_item'          => 'Смотреть',
			'search_items'       => 'Искать',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Навыки',
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-arrow-right',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail' ],
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

    register_post_type( 'offers', [
		'label'  => null,
		'labels' => [
			'name'               => 'Предложения',
			'singular_name'      => 'Предложение',
			'add_new'            => 'Добавить',
			'add_new_item'       => 'Добавление',
			'edit_item'          => 'Редактирование',
			'new_item'           => 'Новый',
			'view_item'          => 'Смотреть',
			'search_items'       => 'Искать',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Предложения',
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-arrow-right',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail' ],
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'about_me', [
		'label'  => null,
		'labels' => [
			'name'               => 'Обо мне',
			'singular_name'      => 'Обо мне',
			'add_new'            => 'Добавить',
			'add_new_item'       => 'Добавление',
			'edit_item'          => 'Редактирование',
			'new_item'           => 'Новый',
			'view_item'          => 'Смотреть',
			'search_items'       => 'Искать',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Обо мне',
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-arrow-right',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ],
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}

function Main(){
    register_nav_menu( 'MainMenu', 'Главное меню' );
    add_theme_support( 'post-thumbnails', array( 'post', 'portfolio', 'skills', 'offers' ) );
    add_image_size( 'thumbnails_min', 120, 120, true );
    add_image_size( 'thumbnails_medium', 520, 520, true );
}

function style_theme(){
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.min.css' );
    wp_enqueue_style( 'bs', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'fl', get_template_directory_uri() . '/assets/css/flickity.min.css' );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.min.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css' );
    wp_enqueue_style( 'media_style', get_template_directory_uri() . '/assets/css/media.min.css' );
}

function scripts_theme(){
    wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js' );
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bs', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
    wp_enqueue_script( 'fl', get_template_directory_uri() . '/assets/js/flickity.pkgd.min.js' );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );
}