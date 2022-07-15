<?php
/**
 *  Footer settings
 *
 * @package Boilerplate
 */

if ( ! defined( 'ABSPATH' ) ) exit;

//Remove the copyright and generatepress ad
 add_filter( 'generate_copyright', function( $copyright ) {

    $copyright = '<span class="copyright">&copy;' .get_the_date('Y') . ' </span>Designed with <span>&#128151;</span> by <a class="font-bold text-white hover:text-primary" href="https://humberto-robles.netlify.app">Humberto Robles</a>';
    return $copyright;
 });

//Background and margin in footer

add_filter( 'generate_parse_attr', function( $attributes, $context ) {

   if ( 'footer' === $context  ) {
       $attributes['class'].= ' bg-footerbackground';
   }

   return $attributes;
}, 10, 2 );