<?php 

// load styles
Function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    // load scss
    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// load JavaScript
function load_javaScript(){
    wp_register_script('customjs', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_javaScript');

// Add Theme Support
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Register menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

// Add image sizes
add_image_size('post_imge', 1500, 750, true);

// Add widget locations
register_sidebar(
    array(
        'name' => 'Page Sidebar', // pages sidebar
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    )
);

register_sidebar(
    array(
        'name' => 'Blog Sidebar', // blog sidebar
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    )
);