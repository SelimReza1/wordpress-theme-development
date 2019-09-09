<?php
function main_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'main_menu' );

add_theme_support( 'post-thumbnails' );

// Image size for single posts
add_image_size( 'single-post-thumbnail', 300, 300 );


?>