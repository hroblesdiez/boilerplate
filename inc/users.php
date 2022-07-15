<?php
/**
 * User and role related tweaks.
 *
 * Requires Members plugin by Justin Tadlock.
 * @link https://wordpress.org/plugins/members/
 *
 * Must be included in functions.php
 *
 * @package Boilerplate
 * @link https://docs.generatepress.com/
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Get current user.
 */
$hrd_current_user = wp_get_current_user();

/**
 * Give Editors  access to menus ('posts', 'media, 'users', 'web settings').
 */
 add_action( 'admin_menu', 'hrd_editor_menu_page_removing', 999 );
 function hrd_editor_menu_page_removing() {
    global $hrd_current_user;
    if ( array_intersect( array( 'administrator', 'editor' ), (array) $hrd_current_user->roles ) && ( $hrd_current_user->user_login !== 'humberto') ) {

        remove_menu_page( 'themes.php' );
        remove_menu_page( 'options-general.php' );
        remove_menu_page( 'plugins.php' );
        remove_menu_page( 'edit.php?post_type=page' );
        remove_menu_page( 'admin.php?page=wpcf7' );
        remove_menu_page( 'admin.php?page=generateblocks' );
        remove_menu_page( 'edit-comments.php' );
        remove_menu_page( 'tools.php' );
        //add_menu_page( 'Menus', 'Menus', 'edit_theme_options', 'nav-menus.php', '', 'dashicons-menu', 60 );
        //add_menu_page( 'Widgets', 'Widgets', 'edit_theme_options', 'widgets.php', '', 'dashicons-block-default', 61 );
        //add_menu_page( 'Elements', 'Elements', 'edit_theme_options', 'edit.php?post_type=gp_elements', '', 'dashicons-layout', 62 );
    }
}
add_action( 'admin_init', 'hrd_admin_menu_remove_contact_gblocks', 999 );
function hrd_admin_menu_remove_contact_gblocks() {
    global $hrd_current_user;
    if ( array_intersect( array( 'administrator', 'editor' ), (array) $hrd_current_user->roles ) && ( $hrd_current_user->user_login !== 'humberto') ) {
        remove_menu_page( 'wpcf7' );
        remove_menu_page( 'generateblocks' );
}
}

/**
 * Remove items from the admin bar.
 */
add_action( 'admin_bar_menu', 'hrd_remove_from_admin_bar', 999 );
function hrd_remove_from_admin_bar( $wp_admin_bar ) {
    global $hrd_current_user;
    if ( array_intersect( array( 'editor', 'shop_manager' ), (array) $hrd_current_user->roles ) ) {
        $wp_admin_bar->remove_node( 'comments' );
        $wp_admin_bar->remove_node( 'customize' );
    }
}

