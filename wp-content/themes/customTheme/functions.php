<?php
function mytheme_enqueue_assets() {
    // Main CSS (adjust path to where your assets are copied)
    wp_enqueue_style('mytheme-style', get_template_directory_uri() . '/assets/css/style.css');

    // JS
    wp_enqueue_script('mytheme-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
