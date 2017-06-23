<?php
function mix_scripts()
{
    wp_deregister_script('jquery');
    if( file_exists( get_template_directory() . '/dist/css/app.css' ) ) wp_enqueue_style( 'mix-app-css', get_template_directory_uri() . '/dist/css/app.css', NULL, filemtime( get_template_directory() . '/dist/css/app.css' ) );
    if( file_exists( get_template_directory() . '/dist/js/manifest.js' ) ) wp_enqueue_script( 'mix-manifest-js', get_template_directory_uri() . '/dist/js/manifest.js', NULL, filemtime( get_template_directory() . '/dist/js/manifest.js' ) );
    if( file_exists( get_template_directory() . '/dist/js/vendor.js' ) ) wp_enqueue_script( 'mix-vendor-js', get_template_directory_uri() . '/dist/js/vendor.js', NULL, filemtime( get_template_directory() . '/dist/js/vendor.js' ) );
    if( file_exists( get_template_directory() . '/dist/js/app.js' ) ) wp_enqueue_script( 'mix-app-js', get_template_directory_uri() . '/dist/js/app.js', NULL, filemtime( get_template_directory() . '/dist/js/app.js' ) );
}
add_action('wp_enqueue_scripts', 'mix_scripts');