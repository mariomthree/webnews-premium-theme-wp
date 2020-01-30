<?php
/**
 * webnews functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package webnews
 */

if ( ! function_exists( 'webnews_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function webnews_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on webnews, use a find and replace
		 * to change 'webnews' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'webnews', get_template_directory() . '/languages' );
		
		// This theme styles the visual editor with editor-style.css to match the theme style.
		add_editor_style();

		// Load regular editor styles into the new block-based editor.
		add_theme_support( 'editor-styles' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'webnews' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'webnews_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'webnews_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function webnews_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'webnews_content_width', 640 );
}
add_action( 'after_setup_theme', 'webnews_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webnews_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'webnews' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'webnews' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
        'before_title' => '<h2 class="widget-title" style="margin-bottom: -8px;">',
        'after_title' => '</h2><div class="fita"><span></span></div>',
	) );

	 register_sidebar(array(
        'name' => esc_html__('Topbar Right','webnews'),
        'id'   => 'topbar-right',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title" style="margin-bottom: -8px;">',
        'after_title' => '</h2><div class="fita"><span></span></div>',
    ));

     register_sidebar(array(
        'name' => esc_html__('Topbar Left','webnews'),
        'id'   => 'topbar-left',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title" style="margin-bottom: -8px;">',
        'after_title' => '</h2><div class="fita"><span></span></div>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Content Header Right','webnews'),
        'id'   => 'header-right',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title" style="margin-bottom: -8px;">',
        'after_title' => '</h2><div class="fita"><span></span></div>',
    ));

    register_sidebar(array(
    	'name'	=> esc_html__('Footer 1 Column 1','webnews'),
    	'id'	=> 'footer-1-column-1',
    	'before_widget' => '<div id="%1$s" class="widget-footer widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title" style="margin-bottom: -8px;">',
        'after_title' => '</h2><div class="fita"><span></span></div>',
    ));
    
    register_sidebar(array(
    	'name'	=> esc_html__('Footer 1 Column 2','webnews'),
    	'id'	=> 'footer-1-column-2',
    	'before_widget' => '<div id="%1$s" class=widget-footer "widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title" style="margin-bottom: -8px;">',
        'after_title' => '</h2><div class="fita"><span></span></div>',
    ));

    register_sidebar(array(
    	'name'	=> esc_html__('Footer 1 Column 3','webnews'),
    	'id'	=> 'footer-1-column-3',
    	'before_widget' => '<div id="%1$s" class="widget-footer widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title" style="margin-bottom: -8px;">',
        'after_title' => '</h2><div class="fita"><span></span></div>',
    ));

    register_sidebar(array(
    	'name'	=> esc_html__('Footer 1 Column 4','webnews'),
    	'id'	=> 'footer-1-column-4',
    	'before_widget' => '<div id="%1$s" class="widget-footer widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title" style="margin-bottom: -8px;">',
        'after_title' => '</h2><div class="fita"><span></span></div>',
    ));

    register_sidebar(array(
    	'name'	=> esc_html__('Footer 2 Column 1','webnews'),
    	'id'	=> 'footer-2-column-1',
    	'before_widget' => '<div id="%1$s" class="widget-footer widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title" style="margin-bottom: -8px;">',
        'after_title' => '</h2><div class="fita"><span></span></div>',
    ));

    register_sidebar(array(
    	'name'	=> esc_html__('Footer 2 Column 2','webnews'),
    	'id'	=> 'footer-2-column-2',
    	'before_widget' => '<div id="%1$s" class="widget-footer widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title" style="margin-bottom: -8px;">',
        'after_title' => '</h2><div class="fita"><span></span></div>',
    ));
    
    register_sidebar(array(
    	'name'	=> esc_html__('Footer 2 Column 3','webnews'),
    	'id'	=> 'footer-2-column-3',
    	'before_widget' => '<div id="%1$s" class="widget-footer widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title" style="margin-bottom: -8px;">',
        'after_title' => '</h2><div class="fita"><span></span></div>',
    ));

}
add_action( 'widgets_init', 'webnews_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function webnews_scripts() {
	wp_enqueue_style( 'webnews-style', get_stylesheet_uri() );

	wp_enqueue_script( 'webnews-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'webnews-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'bootstrap ', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all' );
	wp_enqueue_style( 'fontawesome ', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0', 'all' );
	wp_enqueue_style( 'webnews ', get_template_directory_uri() . '/assets/css/webnews.css', array(), '1.0.0', 'all' );
	
	wp_enqueue_style('opensans','https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600&display=swap');

	wp_register_script('jquery', get_template_directory_uri(). '/js/jquery.js',false,'3.2.1',true);
	wp_enqueue_script('jquery');

	wp_register_script('popper', get_template_directory_uri(). '/js/popper.js',false,'1.14.7',true);
	wp_enqueue_script('popper');
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
	
	wp_register_script('main', get_template_directory_uri(). '/js/main.js',false,'1.0.0',true);
	wp_enqueue_script('main');


}
add_action( 'wp_enqueue_scripts', 'webnews_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/theme-info.php';
require get_template_directory() . '/inc/widgets/contact-info.php';
require get_template_directory() . '/inc/widgets/social-links.php';
require get_template_directory() . '/inc/widgets/facebook.php';
require get_template_directory() . '/inc/widgets/twitter.php';
require get_template_directory() . '/template-parts/frontpage-parts/featured-functions.php';
require get_template_directory() . '/template-parts/frontpage-parts/banner-functions.php';
require get_template_directory() . '/template-parts/archive/archive-functions.php';
