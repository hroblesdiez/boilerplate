<?php
/**
 * Theme and WordPress optimizations.
 *
 * Note that Fontawesome is no longer included in GeneratePress.
 * @package Boilerplate
 * @link https://generatepress.com/fastest-wordpress-theme/
 * @link https://github.com/addisonhall/generatepress-child/blob/master/inc/optimizations.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Remove query strings
 */
// add_filter( 'style_loader_src', 'generate_remove_cssjs_ver', 10, 2 );
// add_filter( 'script_loader_src', 'generate_remove_cssjs_ver', 10, 2 );
function generate_remove_cssjs_ver( $src ) {
    if ( strpos( $src, '?ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}

/**
 * Remove Emojis
 */
add_action( 'init', 'generate_disable_wp_emojicons' );
function generate_disable_wp_emojicons() {
    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}
