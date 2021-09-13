<?php 

function wp_blog_theme_setup() {
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
    
    //navigacija
    register_nav_menus(array(
        'primary' => __('Primary Menu') 
    ));
    
}
add_action('after_setup_theme','wp_blog_theme_setup');

function sidebar() {
    register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<aside>',
    'after_widget' => '</aside>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));


    register_sidebar(array(
    'name' => 'Footer 1',
    'id' => 'footer-1',
    'before_widget' => '<article>',
    'after_widget' => '</article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));


    register_sidebar(array(
    'name' => 'Footer 2',
    'id' => 'footer-2',
    'before_widget' => '<article>',
    'after_widget' => '</article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));


    register_sidebar(array(
    'name' => 'Footer 3',
    'id' => 'footer-3',
    'before_widget' => '<article>',
    'after_widget' => '</article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));
}
add_action('widgets_init','sidebar');


function new_excerpt_text() {
    return '...';
}
add_filter('excerpt_more','new_excerpt_text');

function set_excerpt_length() {
    return 70;
}
add_filter('excerpt_length','set_excerpt_length');

