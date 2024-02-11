<?php

function bdac24_setup_theme() {
    add_theme_support( 'editor-styles' );

    add_editor_style([
        'https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Raleway:wght@400;600;700&display=swap',
        'assets/bootstrap-icons/bootstrap-icons.css',
        'assets/public/index.css',
        'assets/editor.css'
    ]);
}