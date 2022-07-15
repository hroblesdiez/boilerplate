<?php
/**
 * GeneratePress child theme.
 *
 * Enqueue all the assets
 *
 * @package Boilerplate
 */
if ( ! defined( 'ABSPATH' ) ) exit;

define('VERSION', 1.0);


//Enqueue assets

add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'generate-style' );
}, 900 );

add_action( 'wp_enqueue_scripts', 'hrd_enqueue_styles' );
function hrd_enqueue_styles() {

    wp_enqueue_style( 'gp-child-style', get_stylesheet_directory_uri( ) . '/dist/index.css', array(), VERSION, 'all');
    wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), '', 'all');

    if ( is_page('contact') ) {
        wp_enqueue_style( 'contact-form', get_stylesheet_directory_uri( ) . '/src/contact-form.css', array(), '', 'all');
        wp_enqueue_style( 'leaflet-css', 'https://unpkg.com/leaflet@1.8.0/dist/leaflet.css', array(), '', 'all');
    }

    wp_enqueue_script('jquery');
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/03d62932bb.js', array(), '', true);
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), '', true);

    if ( is_page('contact') ) {
    wp_enqueue_script( 'contact-form', get_stylesheet_directory_uri( ) . '/src/contact-form.js', array(), '', true);
    wp_enqueue_script('leaflet-js', 'https://unpkg.com/leaflet@1.8.0/dist/leaflet.js', array(), '', true);
    wp_enqueue_script('map-js', get_stylesheet_directory_uri( ) . '/dist/map.js', array(), '', true);

    }

    wp_enqueue_script('gp-child-js', get_stylesheet_directory_uri( ) . '/dist/index.js', array('jquery'), VERSION, true);


}

add_action('admin_enqueue_scripts', 'hrd_enqueue_block_styles');
function hrd_enqueue_block_styles() {

    wp_enqueue_style('gp-child-editor-style', get_stylesheet_directory_uri( ) . '/dist/editor.css', array(), VERSION, 'all');
}

