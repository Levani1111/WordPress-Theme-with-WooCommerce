<?php 

// load styles
Function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// load JavaScript
function load_javaScript(){
    wp_register_script('customjs', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_javaScript');