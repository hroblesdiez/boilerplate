<?php
/**
 * The content in archive blog and single posts
 *
 * @package Boilerplate
 */

/**
 * Sample custom post type using generate_do_template_part(), use partial for output instead of default.
 */
add_filter( 'generate_do_template_part', 'hrd_content_archive_post' );
function hrd_content_archive_post( $do ) {
    if ( is_singular( 'post' ) && is_main_query() && in_the_loop() ) {
        include get_stylesheet_directory() . '/templates/partials/post-single.php';
    } elseif ( (is_home() || is_archive() ) && is_main_query() ) {
        include get_stylesheet_directory() . '/templates/partials/posts-archive.php';
    } else {
        return $do;
    }
}