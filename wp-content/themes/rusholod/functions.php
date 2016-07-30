<?php
/**
 * Created by PhpStorm.
 * User: Ilya
 * Date: 23.05.2016
 * Time: 19:24
 */
add_action( 'init', 'register_my_menu' );
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $jquery_dependencies = $scripts->registered['jquery']->deps;
        $scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, array( 'jquery-migrate' ) );
    }
} );

function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_register_script( 'list',  get_template_directory_uri().'/js/list.js' , array(), null, false );

    /*wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'bootstrap-css' );*/
}
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}