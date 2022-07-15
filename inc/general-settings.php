<?php
/**
 * General theme settings
 *
 * @package Boilerplate
 */

if ( ! defined( 'ABSPATH' ) ) exit;

 /**
 * Hide admin bar for clients.
 */
$current_user = wp_get_current_user();

    if( $current_user->roles[0] == 'administrator' ) {
        show_admin_bar( true );
    }else {
        show_admin_bar( false );
    }

 // -- Disable Custom Colors in order the client can only select the ones from the color palette
add_theme_support( 'disable-custom-colors' );

 // --
 add_theme_support( 'post-thumbnails' );


//Disable Gutenberg Widget style and come back to Classical Widget Screen
function hrd_remove_widgets_block_editor() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'hrd_remove_widgets_block_editor' );


//-- Permit load svg files
function hrd_add_file_types_to_uploads($file_types){

    $file_types['svg'] = 'image/svg+xml';
    $file_types['svgz'] = 'image/svg+xml';
    return $file_types;

    }
add_filter('upload_mimes', 'hrd_add_file_types_to_uploads',10,1);


//Remove the title in pages
add_filter( 'generate_parse_attr', function( $attributes, $context ) {

    if ( 'entry-header' === $context && is_page() && ('post' || 'page') == get_post_type() ) {
        $attributes['class'].= 'hidden ';
    }

    return $attributes;
}, 10, 2 );

//Show all sections and div in front page in flex-col
add_filter( 'generate_parse_attr', function( $attributes, $context ) {

    if ( 'site-content' === $context && is_front_page() ) {
        $attributes['class'].= ' flex-col relative';
    }

    return $attributes;
}, 10, 2 );


//Frontpage
add_filter( 'generate_parse_attr', function( $attributes, $context ) {

    if ( 'page' === $context && ( is_front_page() ) ) {
        $attributes['class'] = 'site hfeed ';
    } elseif ( 'page' === $context && ( is_page( 'about') || is_page( 'departments') || is_home() || is_archive() || is_single() ) ) {
        $attributes['class'].= ' relative top-[-50px]';
    }

    return $attributes;
}, 10, 2 );

//Pages: remove margin-top and padding-top in order to get closer header and content
add_filter( 'generate_parse_attr', function( $attributes, $context ) {

    if ( 'main' === $context && is_page() && !is_page('contact') ) {
        $attributes['class'].= ' relative -top-5';
    }

    return $attributes;
}, 10, 2 );

//Remove the x-padding in the content in pages
add_filter( 'generate_parse_attr', function( $attributes, $context ) {

    if ( 'site-content' === $context && is_page() ) {
        $attributes['class'].= ' !px-0 !py-0 ';
    }

    return $attributes;
}, 10, 2 );

//Remove the x-padding in the content in pages
add_filter( 'generate_parse_attr', function( $attributes, $context ) {

    if ( 'site-content' === $context && ( is_single() || is_search() || is_404() ) ) {
        $attributes['class'].= ' !px-0 !py-0 mb-16';
    }

    return $attributes;
}, 10, 2 );
