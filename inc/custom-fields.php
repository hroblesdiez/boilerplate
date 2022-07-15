<?php
/**
 * The custom fields to show in the custom post types, posts and pages
 *
 * Require Carbon Fields Plugin
 *
 * @package Boilerplate
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;



add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once  $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/generatepress-child/vendor/autoload.php';
    \Carbon_Fields\Carbon_Fields::boot();
}


//Custom fields attached to team CPT
add_action( 'carbon_fields_register_fields', 'hrd_custom_fields_team' );

function hrd_custom_fields_team() {
    Container::make( 'post_meta', __( 'Team Info', 'hrd' ) )
        ->where( 'post_type', '=', 'team' )
        ->add_fields( array(
            Field::make( 'text', 'hrd_role', 'Role' )
            ->set_width( 50 )
            ->set_required( true ),
            Field::make( 'text', 'hrd_age', 'Age' )
            ->set_width( 50 )
        ) )
        ->add_tab( 'Social', array(
            Field::make( 'complex', 'crb_social_urls', 'Social Links' )
            ->add_fields( array(
                Field::make( 'image', 'image', 'Image' )
                    ->set_width( 50 ) // condense layout so field takes only 50% of the available width
                    ->set_required(),
                Field::make( 'text', 'url', 'URL' )
                    ->set_width( 50 )
                    ->set_required(),
            ) ),
            ) );
}

//Web settings in admin
add_action( 'carbon_fields_register_fields', 'hrd_attach_theme_options' );
function hrd_attach_theme_options() {

            // Default options page
            Container::make( 'theme_options', __( 'Web Settings', 'hrd' ) )
                    ->set_icon( 'dashicons-admin-settings' )
                    ->add_tab( __('Banner Slider', 'hrd' ), array(
                        Field::make( 'complex', 'banner_slider', 'Slider' )
                        ->add_fields( array(
                            Field::make( 'text', 'banner_title', 'Title' ),
                            Field::make( 'textarea', 'banner_desc', 'Description' ),
                            Field::make( 'image', 'banner_photo', 'Photo' ),
                    ) )
                        ->set_collapsed( true )
                    ) )
                    ->add_tab( __('Team', 'hrd') , array(
                        Field::make( 'complex', 'team', 'Team' )
                        ->add_fields( array(
                            Field::make( 'image', 'team_photo', __( 'Photo', 'hrd') ),
                            Field::make( 'text', 'team_name', __( 'Name', 'hrd' ) ),
                            Field::make( 'text', 'team_role', __( 'Role', 'hrd' ) ),
                            Field::make( 'textarea', 'team_content', __( 'Description', 'hrd' ) )
                                 -> set_rows( 5 ),

                            Field::make( 'separator', 'hrd_separator', __( 'Social info' ) ),

                            Field::make( 'image', 'team_facebook_logo', __( 'Facebook Logo', 'hrd' ) )// We're only changing the label field to an image one
                                    ->set_width( 50 )
                                    ->set_required(),
                            Field::make( 'text', 'team_facebook_url', __('Facebook URL', 'hrd' ) )
                                    ->set_width( 50 )
                                    ->set_required(),


                            Field::make( 'image', 'team_twitter_logo', __( 'Twitter Logo', 'hrd' ) )// We're only changing the label field to an image one
                                    ->set_width( 50 )
                                    ->set_required(),
                            Field::make( 'text', 'team_twitter_url', __('Twitter URL', 'hrd' ) )
                                    ->set_width( 50 )
                                    ->set_required(),
                            ))
                        ->set_collapsed( true ),
                        ) )
                    ->add_tab( __('Testimonials', 'hrd' ), array(
                        Field::make( 'complex', 'testimonials', 'Testimonials' )
                        ->add_fields( array(
                            Field::make( 'text', 'hrd_test_title', 'Title' )
                            ->set_width( 50 )
                            ->set_required( true ),
                            Field::make( 'textarea', 'hrd_test_content', 'Testimonial' )
                            ->set_width( 50 )
                            ->set_rows(5)
                            ->set_required( true ),
                            Field::make( 'image', 'hrd_test_photo', 'Photo' )
                            ->set_width( 50 ),
                            Field::make( 'text', 'hrd_test_name', 'Name' )
                            ->set_width( 50 )
                            ->set_required( true ),
                            Field::make( 'text', 'hrd_test_role', 'Role' )
                            ->set_width( 50 )
                            ->set_required( true ),
                            Field::make( 'text', 'hrd_test_company', 'Company' )
                            ->set_width( 50 )
                            ->set_required( true ),

                            Field::make( 'text', 'hrd_facebook_url', 'Facebook URL' )
                            ->set_width( 50 )
                            ->set_required( true ),

                            Field::make( 'text', 'hrd_twitter_url', 'Twitter URL' )
                            ->set_width( 50 )
                            ->set_required( true ),

                        ) )
                    ) )
                    ->add_tab( __('Departments', 'hrd') , array(
                        Field::make( 'complex', 'department', 'Department' )
                        ->add_fields( array(
                            Field::make( 'image', 'department_photo', __( 'Photo', 'hrd') ),
                            Field::make( 'text', 'department_name', __( 'Name', 'hrd' ) ),
                            Field::make( 'text', 'department_phone', __( 'Phone', 'hrd' ) ),
                            Field::make( 'separator', 'hrd_separator', __( 'Social info' ) ),
                            Field::make( 'text', 'hrd_department_facebook_url', 'Facebook URL' )
                            ->set_width( 50 )
                            ->set_required( true ),

                            Field::make( 'text', 'hrd_department_twitter_url', 'Twitter URL' )
                            ->set_width( 50 )
                            ->set_required( true ),

                        ) )
                        ->set_collapsed( true ),
                    ) )
                    ->add_tab( __('Stats Home', 'hrd'), array(
                        Field::make( 'text', 'stats_doctors', __( 'Doctors', 'hrd') ),
                        Field::make( 'text', 'stats_programs', __( 'Programs', 'hrd') ),
                        Field::make( 'text', 'stats_clients', __( 'Clients', 'hrd') ),
                        Field::make( 'text', 'stats_operations', __( 'Operations', 'hrd') ),
                    ) );


}