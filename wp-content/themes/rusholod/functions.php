<?php
/**
 * Created by PhpStorm.
 * User: Ilya
 * Date: 23.05.2016
 * Time: 19:24
 */
add_action('init', 'register_my_menu');
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_scripts()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('jquery');

    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/vendor/bootstrap/bootstrap.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/vendor/bootstrap/bootstrap.js', array(), '3.3.7', true);

    wp_enqueue_script('list', get_stylesheet_directory_uri() . '/vendor/list/list.js', array(), '1.2.0', false);

    if(is_page(55)){
        wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/vendor/slick/slick.css');
        wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/vendor/slick/slick.min.js', array('jquery'), '1.6.0', true);
    }


    //if (is_home())
        wp_enqueue_style('front-page-style', get_stylesheet_directory_uri() . '/css/front.css');
}

function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}