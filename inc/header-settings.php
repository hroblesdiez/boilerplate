<?php
/**
 *  header settings
 *
 * @package Boilerplate
 */

if ( ! defined( 'ABSPATH' ) ) exit;

//Include svg shape in header
add_action( 'generate_after_header', 'med_include_svg_form_after_banner', 0 );
function med_include_svg_form_after_banner() {

    echo '<div class="relative">';
    echo '<div class="absolute left-0 right-0 -bottom-1 overflow-hidden">';
    echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L120,170.7C240,181,480,203,720,197.3C960,192,1200,160,1320,144L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>';
    echo '</div>';
    echo '</div>';
}

//Include banner info in header
if ( ! function_exists( 'generate_construct_header' ) ) {
	add_action( 'generate_header', 'generate_construct_header' );
	/**
	 * Build the header.
	 *
	 * @since 1.3.42
	 */
	function generate_construct_header() {
		?>
		<header <?php generate_do_attr( 'header' ); ?>>
			<div <?php generate_do_attr( 'inside-header' ); ?>>
				<?php
				/**
				 * generate_before_header_content hook.
				 *
				 * @since 0.1
				 */
				do_action( 'generate_before_header_content' );

				if ( ! generate_is_using_flexbox() ) {
					// Add our main header items.
					generate_header_items();
				}

				/**
				 * generate_after_header_content hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_add_navigation_float_right - 5
				 */
				do_action( 'generate_after_header_content' );
				?>
			</div>
            <div class="relative z-[100]"><!--banner text-->
                <?php   if ( is_page( 'home' ) ) {
                    echo '<div class="max-w-[600px] text-center m-auto mt-40">';
                    echo '<h1 class="text-white font-bold mb-8 mx-8">Best Doctors. Best Results </h1>';
                    echo '<a class="visited:text-white font-semibold border-2 border-solid border-white rounded-[20px] px-6 py-3 hover:bg-white hover:text-primary transition-all duration-300 ease-in-out" href=" ' . esc_url(site_url('departments')) . ' ">Read More</a>';
                    echo '</div>';

                    } elseif ( is_page('about') || is_page('contact') || is_page('departments') ) {
                        echo '<div class="max-w-[600px] text-center m-auto mt-20">';
                        echo '<h2 class="text-white font-bold mb-8 mx-8">' . get_the_title(). ' </h2>';
                        hrd_breadcrumbs();
                        echo '</div>';

                    } elseif( is_home() || is_archive() ) {
						echo '<div class="max-w-[600px] text-center m-auto mt-20">';
						echo '<h2 class="text-white font-bold mb-8 mx-8">Blog</h2>';
						hrd_breadcrumbs();
						echo '</div>';

                    } elseif( is_single() && 'post' == get_post_type() ) {
						echo '<div class="max-w-[800px] text-center m-auto mt-20">';
						echo '<h2 class="text-white font-bold mb-8 mx-8"> ' . get_the_title() . '</h2>';
						echo '<p class="text-white text-base">' . esc_html( get_the_date('j F,Y') ) .' </p>';
						//hrd_breadcrumbs();
						echo '</div>';
					} elseif ( is_search() || is_404() ) {
						echo '<div class="max-w-[600px] text-center m-auto mt-20">';
                        echo '</div>';
					}
					else {
                        return;
                    }?>
            </div><!-- end banner text-->
		</header>
		<?php
	}
}

//Add style (height:60vh) to header in all pages except front page

add_filter( 'generate_get_attr_output', function($output, $attributes, $context, $settings ) {
    if ( $context == 'header' && ! is_front_page() && ! is_single() ) {
       $output = $output . ' style="height: 60vh;"';
    }
    return $output;
}, 10, 4 );

//Add style (height:60vh) to header in all pages except front page

add_filter( 'generate_get_attr_output', function($output, $attributes, $context, $settings ) {
	global $post;
    if ( $context == 'header' &&  is_single() ) {
       $output = $output . ' style="height: 60vh; background-image: linear-gradient(to right, rgba(3, 15, 39, 0.3), rgba(3, 15, 39, 0.7)), url(' . get_the_post_thumbnail_url($post->ID, 'full') . '); background-size: cover; background-repeat: no-repeat; background-position: center center;" ';
    }

    return $output;
}, 10, 4 );