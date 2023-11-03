<?php

// Variables

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/front/head.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );

// Hooks

add_action( 'wp_enqueue_scripts', 'dev23_enqueue' );
add_action( 'wp_head', 'dev23_head', 7 );
add_action( 'after_setup_theme', 'dev23_setup_theme' );