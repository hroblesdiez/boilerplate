<?php
/**
 * GeneratePress child theme.
 * Some  theme defaults (color, links, etc) in order they already appear in the Customizer
 *
 * @package Boilerplate
 */

if ( ! defined( 'ABSPATH' ) ) exit;

add_filter( 'generate_option_defaults', 'hrd_default_options' );
add_filter( 'option_generate_settings', 'hrd_default_options' );
function hrd_default_options($defaults) {
    $global_colors = array(
        array(
            'name' => __( 'primary', 'hrd' ),
            'slug' => 'primary',
            'color' => '#2caee2',
        ),

        array(
            'name' => __( 'Secondary', 'hrd' ),
            'slug' => 'secondary',
            'color' => '#F7F5F6',
        ),
        array(
            /* translators: Base number */
            'name' =>  __('Paragraph', 'hrd'  ),
            'slug' => 'paragraph',
            'color' => '#666',
        ),
        array(
            'name' => __( 'Heading', 'hrd' ),
            'slug' => 'heading',
            'color' => '#252422',
        ),
        array(
            'name' => __( 'Background', 'hrd' ),
            'slug' => 'background',
            'color' => '#F4F6F9',
        ),
        array(
            /* translators: Base number */
            'name' => __( 'Footerbackground', 'hrd' ),
            'slug' => 'footerbackground',
            'color' => '#7D8D9E',
        ),
        array(
            'name' => __( 'White', 'hrd' ),
            'slug' => 'white',
            'color' => '#fff',
        ),
    );

    $defaults['global_colors'] = $global_colors;
    $defaults['underline_links'] = 'never';
    $defaults['logo_width'] = '200px';
    $defaults['container_width'] = '1100px';
    $defaults['background_color'] = 'var(--white)';
    $defaults['text_color'] = 'var(--paragraph)';
    $defaults['link_color'] = 'var(--primary)';
    $defaults['link_color_hover'] = 'var(--primary)';
    $defaults['link_color_visited'] = 'var(--primary)';



    return $defaults;
}
add_filter( 'generate_color_option_defaults', 'hrd_color_option_defaults' );

function hrd_color_option_defaults($color_defaults) {

    $color_defaults['header_background_color'] = '';
    $color_defaults['site_title_color'] = '#fff';
    $color_defaults['navigation_text_color'] = '#fff';
    $color_defaults['navigation_text_current_color'] = 'var(--primary)';
    $color_defaults['navigation_text_hover_color'] = 'var(--primary)';
    $color_defaults['subnavigation_background_color'] = '#fff';
    $color_defaults['h1_color'] = 'var(--heading)';
    $color_defaults['h2_color'] = 'var(--heading)';
    $color_defaults['h3_color'] = 'var(--heading)';
    $color_defaults['h4_color'] = 'var(--heading)';
    $color_defaults['h5_color'] = 'var(--heading)';
    $color_defaults['h6_color'] = 'var(--heading)';
    $color_defaults['form_button_background_color'] = 'var(--primary)';
    $color_defaults['form_button_background_color_hover'] = 'transparent';
    $color_defaults['form_button_text_color'] = '#fff';
    $color_defaults['form_button_text_color_hover'] = 'var(--primary)';
    $color_defaults['footer_background_color'] = 'var(--footerbackground)';
    $color_defaults['footer_widget_background_color'] = 'var(--footerbackground)';
    $color_defaults['footer_widget_text_color'] = 'var(--paragraph)';
    $color_defaults['footer_widget_link_color'] = 'var(--paragraph)';
    $color_defaults['footer_widget_link_hover_color'] = 'var(--primary)';
    $color_defaults['footer_widget_title_color'] = 'var(--white)';


    return $color_defaults;
}
