<?php 
/**
 * Enqueue CSS and JS
 */
function corenominal_enqueue_scripts()
{
    
    /**
     * Default Styles
     */
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/vendor/font-awesome-4.5.0/css/font-awesome.min.css', false );
    wp_enqueue_style( 'corenominal_css', get_template_directory_uri() . '/css/corenominal.css', false );
    
    /**
     * Default Scripts
     */
    wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), false, false );
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/vendor/jquery-1.11.3.min.js', array(), false, true );
    wp_enqueue_script( 'jquery_fitvids', get_template_directory_uri() . '/js/vendor/jquery-fitvids.js', array(), false, true );
    wp_enqueue_script( 'corenominal_js', get_template_directory_uri() . '/js/corenominal.js', array(), false, true );

}
add_action( 'wp_enqueue_scripts', 'corenominal_enqueue_scripts' );
