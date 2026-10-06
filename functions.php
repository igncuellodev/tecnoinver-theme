<?php

function tecnoinver_styles() {

    // CSS global
    $global_css = get_stylesheet_directory() . '/assets/css/global.css';

    wp_enqueue_style(
        'tecnoinver-global',
        get_stylesheet_directory_uri() . '/assets/css/global.css',
        array(),
        filemtime($global_css)
    );


    // CSS específico de Análisis de Proceso
    if (is_page_template('analisis-proceso.php')) {

        $analisis_css = get_stylesheet_directory() . '/assets/css/analisis-proceso.css';

        wp_enqueue_style(
            'analisis-proceso',
            get_stylesheet_directory_uri() . '/assets/css/analisis-proceso.css',
            array('tecnoinver-global'),
            filemtime($analisis_css)
        );
    }
}

add_action('wp_enqueue_scripts', 'tecnoinver_styles');