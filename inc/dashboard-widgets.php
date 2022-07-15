<?php
/**
 * Add widgets to the dashboard to show instructions to the client.
 *
 * Must be included in functions.php
 *
 * @package Boilerplate
 */

 /**
 * Display the web developer contact info.
 */
function hrd_contact_info_dashboard_widget() {
    $current_user = wp_get_current_user();

    if ( $current_user->user_login !== 'humberto' && is_admin() ) {
    wp_add_dashboard_widget(
        'hrd_contact_info_dashboard_widget', // Widget slug.
        'Contact Info', // Title.
        'hrd_contact_info_dashboard_widget_function' // Display function.
    );
}
}

add_action( 'wp_dashboard_setup', 'hrd_contact_info_dashboard_widget' );

function hrd_contact_info_dashboard_widget_function() {
    echo '<p>Humberto Robles</p><p>humberto.robles.diez@gmail.com</p><p><a href="https://humberto-robles.netlify.app">https://humberto-robles.netlify.app</a></p>';
}

/**
 * Display video tutorials link.
 */
 function hrd_tutorials_dashboard_widget() {

    $current_user = wp_get_current_user();

    if ( $current_user->user_login !== 'humberto' && is_admin() ) {
    wp_add_dashboard_widget(
        'hrd_tutorials_dashboard_widget', // Widget slug.
        'Video Tutorials', // Title.
        'hrd_tutorials_dashboard_widget_function' // Display function.
    );
}
}
add_action( 'wp_dashboard_setup', 'hrd_tutorials_dashboard_widget' );


function hrd_tutorials_dashboard_widget_function() {
    echo '<p>You may access video tutorials for this website here:</p>
    <p><a href="https://vimeo.com/644908467" target="_blank">Coming soon</a><br>
    Password: NA</p>';
}

/**
 * Display custom shortcodes.
 */
 function hrd_shortcodes_dashboard_widget() {
    $current_user = wp_get_current_user();

    if ( $current_user->user_login !== 'humberto' && is_admin() ) {
    wp_add_dashboard_widget(
        'hrd_shortcodes_dashboard_widget', // Widget slug.
        'Shortcodes', // Title.
        'hrd_shortcodes_dashboard_widget_function' // Display function.
    );
}
}
add_action( 'wp_dashboard_setup', 'hrd_shortcodes_dashboard_widget' );
function hrd_shortcodes_dashboard_widget_function() {
    echo '<p>Any custom shortcodes for use on your site will appear here.</p>';
    echo '<dl>';
    echo '<dt>[show_teamwork]</dt>';
    echo '<dd>Output the list of staff members.</dd>';
    echo '<dt>[show_departments]</dt>';
    echo '<dd>Output the list of departments.</dd>';
    echo '</dl>';
}

//Remowe dashboard widgets for non-technical users

function hrd_remove_all_dashboard_metaboxes() {

    $current_user = wp_get_current_user();
    $allowed_roles = array('editor', 'author', 'subscriber', 'administrator');

    if ( $current_user->user_login !== 'humberto' && is_admin() && array_intersect( $allowed_roles, $current_user->roles)  ) {
    // Remove Welcome panel
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
    // Remove the rest of the dashboard widgets
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}
}
add_action( 'wp_dashboard_setup', 'hrd_remove_all_dashboard_metaboxes' );