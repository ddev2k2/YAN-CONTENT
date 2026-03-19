<?php
/**
 * Yani Content Home Theme Functions
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define theme constants
define( 'YANI_THEME_VERSION', '1.0.0' );
define( 'YANI_THEME_DIR', get_template_directory() );
define( 'YANI_THEME_URI', get_template_directory_uri() );

/**
 * Setup theme
 */
function yani_theme_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'yani-content-home' ),
        'footer'  => esc_html__( 'Footer Menu', 'yani-content-home' ),
    ) );
}
add_action( 'after_setup_theme', 'yani_theme_setup' );

/**
 * Enqueue scripts and styles
 */
function yani_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style(
        'yani-style',
        YANI_THEME_URI . '/style.css',
        array(),
        YANI_THEME_VERSION
    );

    // Enqueue main script
    wp_enqueue_script(
        'yani-script',
        YANI_THEME_URI . '/js/main.js',
        array(),
        YANI_THEME_VERSION,
        true
    );

    // Localize script
    wp_localize_script( 'yani-script', 'yaniData', array(
        'themeUri' => YANI_THEME_URI,
        'siteUrl' => home_url(),
    ) );
}
add_action( 'wp_enqueue_scripts', 'yani_enqueue_scripts' );

/**
 * Register sidebar
 */
function yani_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'yani-content-home' ),
        'id'            => 'primary-sidebar',
        'description'   => esc_html__( 'Main sidebar', 'yani-content-home' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'yani_widgets_init' );

/**
 * Custom logo support
 */
function yani_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf(
        '<a href="%1$s" class="custom-logo-link" rel="home">%2$s</a>',
        esc_url( home_url( '/' ) ),
        wp_get_attachment_image( $custom_logo_id, 'full' )
    );
    return $html;
}

/**
 * Get theme asset URL
 */
function yani_asset_url( $asset ) {
    return YANI_THEME_URI . '/assets/' . $asset;
}

/**
 * Custom excerpt length
 */
function yani_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'yani_excerpt_length' );

/**
 * Custom excerpt more
 */
function yani_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'yani_excerpt_more' );

/**
 * Remove unnecessary WordPress stuff
 */
function yani_remove_wp_stuff() {
    // Remove emoji scripts
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    // Remove XML-RPC
    add_filter( 'xmlrpc_enabled', '__return_false' );
}
add_action( 'init', 'yani_remove_wp_stuff' );

/**
 * Disable comments
 */
function yani_disable_comments() {
    // Disable support for comments and trackbacks in post types
    foreach ( get_post_types() as $post_type ) {
        if ( post_type_supports( $post_type, 'comments' ) ) {
            remove_post_type_support( $post_type, 'comments' );
            remove_post_type_support( $post_type, 'trackbacks' );
        }
    }
}
add_action( 'admin_init', 'yani_disable_comments' );

/**
 * Hide comments menu
 */
function yani_hide_comments_menu() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'yani_hide_comments_menu' );

/**
 * Custom body class
 */
function yani_body_class( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'is-front-page';
    }
    return $classes;
}
add_filter( 'body_class', 'yani_body_class' );

/**
 * Security: Remove WordPress version
 */
function yani_remove_wp_version() {
    return '';
}
add_filter( 'the_generator', 'yani_remove_wp_version' );

/**
 * Load theme text domain
 */
function yani_load_textdomain() {
    load_theme_textdomain( 'yani-content-home', YANI_THEME_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'yani_load_textdomain' );
