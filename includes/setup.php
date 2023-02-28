<?php 

function dev_setup_theme() {
    add_theme_support( 'editor_styles' );
    add_editor_style(
        [
            'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&family=Oswald:wght@400;700&display=swap;',
            'assets/bootstrap-icons/bootstrap-icons.css',
            'assets/public/index.css',
            'assets/editor.css'
        ]
    );
}