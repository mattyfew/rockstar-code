<?php

/*
    =========================================
     Include scripts
    =========================================
*/

function rockstar_script_enqueue() {
    // css
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/rockstar.css', array(), '1.0.0', 'all');

    // js
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/rockstar.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery'); //WP comes with jquery
}

add_action('wp_enqueue_scripts', 'rockstar_script_enqueue');

/*
    =========================================
     Activate scripts
    =========================================
*/

function rockstar_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'rockstar_theme_setup');

/*
    =========================================
     Theme Support functions
    =========================================
*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

/*
    =========================================
     Sidebar function
    =========================================
*/

function rockstar_widget_setup() {
    register_sidebar(array(
        'name'  => 'Sidebar',
        'id'    => 'sidebar-1',
        'class' => 'custom', // WP will use the name to make the class...sidebar-custom
        'description'   => 'Standard Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>'
    ));
}
add_action('widgets_init', 'rockstar_widget_setup');
