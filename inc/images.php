<?php
/**
 * Custom image sizes, svg, etc.
 *
 * THE FOLLOWING ARE ALL ONLY EXAMPLES. DUPLICATE AND MODIFY AS NEEDED.
 *
 * @package Boilerplate
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Additional image sizes
 */

function hrd_custom_images_size() {
    add_image_size( 'social-icon', 40, 40, array( 'center', 'center' ) );
    add_image_size( 'square-team', 200, 200, array( 'center', 'top' ) );
    add_image_size( 'square-small', 420, 420, array( 'center', 'center' ) );
    add_image_size( 'square-medium', 640, 640, array( 'center', 'center' ) );
    add_image_size( 'square-medium-large', 800, 800, array( 'center', 'center' ) );
}
add_action( 'after_setup_theme', 'hrd_custom_images_size' );


// Add sizes to media admin
function hrd_add_image_sizes_to_media_admin( $sizes ) {
    $addsizes = array(
        "social-icon" => __( 'Social Icon', 'hrd' ),
        "square-small" => __( 'Square Small', 'hrd' ),
        "square-medium" => __( 'Square Medium', 'hrd' ),
        "square-medium-large" => __( 'Square Medium Large', 'hrd' ),
    );
    $newsizes = array_merge( $sizes, $addsizes );
    return $newsizes;
}
add_filter( 'image_size_names_choose', 'hrd_add_image_sizes_to_media_admin' );



/**
 * Resize attachment page image
 */
//add_filter( 'prepend_attachment', 'gpc_prepend_attachment' );
function gpc_prepend_attachment( $p ) {
    return '<p class="attachment">' . wp_get_attachment_link( 0, 'large', false ) . '</p>';
}