<?php
/**
 * Theme functions and definitions
 */

if ( ! function_exists( 'phantom_luxe_setup' ) ) :
	function phantom_luxe_setup() {
		// Theme supports
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

        // Register Nav Menus
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'phantom-luxe' ),
            'footer'  => esc_html__( 'Footer Menu', 'phantom-luxe' ),
        ) );
	}
endif;
add_action( 'after_setup_theme', 'phantom_luxe_setup' );

/**
 * Enqueue scripts and styles.
 */
function phantom_luxe_scripts() {
    // CDN de Tailwind - Inyectado en el Head según el prototipo original
    wp_enqueue_script( 'tailwindcss-cdn', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, false );
    
    // Configuración Tailwind
    wp_enqueue_script( 'tailwind-config', get_template_directory_uri() . '/assets/js/tailwind.config.js', array('tailwindcss-cdn'), '1.0', false );

    // Theme global CSS
	wp_enqueue_style( 'phantom-global', get_template_directory_uri() . '/assets/css/global.css', array(), '1.0' );

	// Theme JS
	wp_enqueue_script( 'phantom-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'phantom_luxe_scripts' );
