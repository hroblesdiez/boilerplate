<?php
/**
 *  Blog layout page settings
 *
 * @package Boilerplate
 */

if ( ! defined( 'ABSPATH' ) ) exit;

 //Add classes to show the posts using flex in the blog layout page and category archive
add_filter( 'generate_parse_attr', function( $attributes, $context ) {

    if ( 'main' === $context && ( is_home() || is_archive() ) ) {
        $attributes['class'].= ' flex flex-row justify-evenly items-strecht flex-wrap';
    }

    return $attributes;
}, 10, 2 );

//Include All Categories in the filter by category (Widget) in the blog page

add_filter('widget_categories_args', 'hrd_add_view_all_to_categories_widget');
function hrd_add_view_all_to_categories_widget($args)
{
    $args['show_option_all'] = 'All articles';

    return $args;
}

//Add a div in blog page to organize the content with Flex
add_filter( 'generate_parse_attr', function( $attributes, $context ) {

    if ( 'site-content' === $context && (is_home() || is_archive() ) ) {
        $attributes['class'].= ' flex flex-col items-center w-full !py-0';
    }

    return $attributes;
}, 10, 2 );

//Hide the widget title in blog page
add_filter( 'widget_title', function($title, $id_base) {
    if ( is_home() && $id_base == 'nav_menu-3' ) {
        $title = '';
    }
    return $title;
}, 10, 2 );

//Show the categories first (order-1) and the posts after(order-2) in blog page
add_filter( 'generate_parse_attr', function( $attributes, $context ) {

    if ( 'left-sidebar' === $context && ( is_home() || is_archive() ) ) {
        $attributes['class'].= ' !order-1 !w-full';
    }

    return $attributes;
}, 10, 2 );

//Order-2 of the posts
add_filter( 'generate_parse_attr', function( $attributes, $context ) {

    if ( 'content' === $context && ( is_home() || is_archive() ) ) {
        $attributes['class'].= ' order-2 !w-full';
    }

    return $attributes;
}, 10, 2 );

//Hide the category title in archive-category page
add_filter( 'generate_parse_attr', function( $attributes, $context ) {

    if ( 'page-header' === $context && ( is_archive() ) ) {
        $attributes['class'] = 'hidden';
    }

    return $attributes;
}, 10, 2 );