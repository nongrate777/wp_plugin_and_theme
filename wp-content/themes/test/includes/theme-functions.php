<?php

define( 'CSS_VERSION', time() );
function smile_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri().'/assets/styles/styles.min.css', array(), CSS_VERSION);
    wp_enqueue_script('main-scripts', get_template_directory_uri().'/assets/scripts/styles.min.js', array(), CSS_VERSION, true);
}
add_action('wp_enqueue_scripts', 'smile_scripts');


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');

