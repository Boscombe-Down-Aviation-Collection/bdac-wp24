<?php 

function bdac24_enqueue() {
    wp_register_style( 
        'bdac24_font_oswald_opens_sans', 
        'https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Raleway:wght@400;600;700&display=swap',
        [],
        null
    );
    wp_register_style( 
        'bdac24_bootstrap_icons', 
        get_theme_file_uri( '/assets/bootstrap-icons/bootstrap-icons.css' ),
    );
    wp_register_style( 
        'bdac24_theme', 
        get_theme_file_uri( '/assets/public/index.css' ),
    );

    wp_enqueue_style( 'bdac24_font_oswald_opens_sans' );
    wp_enqueue_style( 'bdac24_bootstrap_icons' );
    wp_enqueue_style( 'bdac24_theme' );
} 