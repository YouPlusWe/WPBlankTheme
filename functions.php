<?php 

error_reporting(E_ALL);

function my_setup() {
    load_theme_textdomain( 'blank' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'author' );

    register_nav_menus( array(
        'header' => __( 'Header menu', 'blank' ),
        'footer' => __( 'Footer menu', 'blank' ),
        
    ) );
 
}

add_action( 'after_setup_theme', 'my_setup' );