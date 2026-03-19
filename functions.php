<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'YANI_THEME_VERSION', '1.0.0' );
define( 'YANI_THEME_DIR', get_template_directory() );
define( 'YANI_THEME_URI', get_template_directory_uri() );

function yani_theme_setup() {
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

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'yani-content-home' ),
        'footer'  => esc_html__( 'Footer Menu', 'yani-content-home' ),
    ) );
}
add_action( 'after_setup_theme', 'yani_theme_setup' );

function yani_enqueue_scripts() {
    wp_enqueue_style(
        'yani-style',
        YANI_THEME_URI . '/style.css',
        array(),
        YANI_THEME_VERSION
    );

    wp_enqueue_script(
        'yani-script',
        YANI_THEME_URI . '/js/main.js',
        array(),
        YANI_THEME_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'yani_enqueue_scripts' );

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

function yani_load_textdomain() {
    load_theme_textdomain( 'yani-content-home', YANI_THEME_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'yani_load_textdomain' );
