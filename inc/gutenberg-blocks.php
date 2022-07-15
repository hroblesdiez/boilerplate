<?php
/**
 * The gutenberg blocks
 *
 * Require Carbon Fields Plugin
 *
 * @package Boilerplate
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'after_setup_theme', 'hrd_load' );
function hrd_load() {
    require_once  $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/generatepress-child/vendor/autoload.php';
    \Carbon_Fields\Carbon_Fields::boot();
}

/*************************************************TEAM BLOCK*********************************/
function hrd_team_gutenberg_block() {

    Block::make (__('Team', 'hrd'))
        -> add_fields( array (
            Field::make( 'image', 'crb_photo', __( 'Photo', 'hrd') ),
            Field::make( 'text', 'crb_name', __( 'Name', 'hrd' ) ),
            Field::make( 'text', 'crb_role', __( 'Role', 'hrd' ) ),
            // Field::make( 'textarea', 'crb_content', __( 'Description', 'hrd' ) )
            //      -> set_rows( 5 ),
            Field::make( 'complex', 'crb_social_urls', __( 'Social Links', 'hrd' ) )
                ->add_fields( array(
                    Field::make( 'image', 'crb_social_logo', __( 'Social Logo', 'hrd' ) )// We're only changing the label field to an image one
                        ->set_width( 50 )
                        ->set_required(),
                    Field::make( 'text', 'crb_url', __('URL', 'hrd' ) )
                        ->set_width( 50 )
                        ->set_required(),
                ) )
        ) )

        ->set_description( __( 'A simple block for showing a teammate.', 'hrd' ) )
        ->set_category( 'design' )
        ->set_icon( 'buddicons-buddypress-logo' )
        ->set_keywords( [ __( 'block', 'hrd' ), __( 'team', 'hrd' ), __( 'staff', 'hrd' ) ] )
        ->set_mode( 'both' )
        ->set_inner_blocks( true )
        ->set_inner_blocks_position( 'below' )
        ->set_render_callback( function ( $fields ) {

            ob_start();
            ?>
                <div class="flex flex-col basis-full sm:basis-2/5 md:basis-[30%] bg-white shadow-card rounded-md mx-4 my-6 h-full">

                            <div class="rounded-md">
                                <?php echo wp_get_attachment_image( $fields['crb_photo'] , array(), false, array('class' => 'object-contain h-auto w-full rounded-t-md') );  ?>
                            </div>
                            <div class="flex flex-col items-center text-center pt-8 pb-3">
                                <p class="text-lg text-heading font-bold font-montserrat mb-2"><?php echo esc_html($fields['crb_name']); ?></p>
                                <p class="text-base text-paragraph font-bold font-montserrat mb-1"><?php echo esc_html($fields['crb_role']); ?></p>

                            </div>

                            <div class="flex flex-row items-center justify-center mb-4">
                                <?php
                                        //Social icons
                                        foreach ( $fields['crb_social_urls'] as $social ) {
                                            $image_attributes = wp_get_attachment_image_src( $social['crb_social_logo'], array(20,20), true );
                                            echo '<a href="' . esc_url( $social['crb_url'] ) . '" target="_blank">' . '<img src=" ' . $image_attributes[0]. ' " width="30" height="30" class="mr-2 rounded-full"></a>';

                                        }
                                 ?>
                            </div>

                 </div>
         <?php
            return ob_get_flush();
        } );

}
add_action( 'carbon_fields_register_fields', 'hrd_team_gutenberg_block'  );