<?php

function dev_enqueue() {
    wp_register_style( 
        'dev_google_fonts', 
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&family=Oswald:wght@400;700&display=swap',
        [],
        null
    );
    wp_register_style( 
        'dev_bootstrap_icons', 
        get_theme_file_uri( 'assets/bootstrap-icons/bootstrap-icons.css' ) 
    );
    wp_register_style( 
        'dev_styles', 
        get_theme_file_uri( 'assets/public/index.css' ) 
    );

    wp_enqueue_style( 'dev_google_fonts' );
    wp_enqueue_style( 'dev_bootstrap_icons' );
    wp_enqueue_style( 'dev_styles' );
}