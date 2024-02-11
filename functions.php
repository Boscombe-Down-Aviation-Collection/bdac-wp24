<?php

// Variables

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/front/head.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );

// Hooks

add_action( 'wp_enqueue_scripts', 'bdac24_enqueue' );
add_action( 'wp_head', 'bdac24_head', 7 );
add_action( 'after_setup_theme', 'bdac24_setup_theme' );