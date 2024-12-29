<?php

function ocean_enqueue_styles() {
    wp_enqueue_style('ocean-child-style', get_stylesheet_directory_uri() . '/styles/theme.css');
}

add_action('wp_enqueue_scripts', 'ocean_enqueue_styles');
