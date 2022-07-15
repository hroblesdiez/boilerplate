<?php
/**
 * Theme shortcodes.
 *
 * Create custom shortcodes to use in theme.
 *
 * THE FOLLOWING ARE ALL ONLY EXAMPLES. DUPLICATE AND MODIFY AS NEEDED.
 *
 * @package Boilerplate
 * @link https://codex.wordpress.org/Shortcode_API
 */

if ( ! defined( 'ABSPATH' ) ) exit;




/*********************************************BannerSlider**********************************/
?>
<?php
function hrd_show_banner_slide() {

ob_start();?>

<!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <?php
        $slides = function_exists( 'carbon_get_theme_option' ) ? carbon_get_theme_option( 'banner_slider' ) : array();
        // echo '<pre>'; print_r($slides);echo'<pre/>';die;
       if ($slides) :
            foreach( $slides as $slide ) :?>
                <div class="swiper-slide">
                    <div class="w-full flex flex-col items-center">
                        <img class="w-full" src="<?php echo wp_get_attachment_image_src( $slide['banner_photo'], 'large' )[0]; ?>" alt="<?php echo esc_attr($slide[ 'banner_title' ]); ?>">
                        <p class="font-poppins text-text font-semibold text-base"><?php echo esc_html( $slide[ 'banner_title' ] ); ?></p>
                        <p class="font-poppins text-text  text-base pr-2"><?php echo esc_html( $slide[ 'banner_desc' ] ); ?></p>
                    </div>
                </div>

        <?php endforeach;

        endif;
        ?>
    </div>

    <!-- pagination -->
    <div class="swiper-pagination"></div>

</div>
<?php  return ob_get_clean();
}

add_shortcode('show_banner', 'hrd_show_banner_slide');

/*************TEAM SHORTCODE ************/

add_action( 'carbon_fields_fields_registered', 'hrd_show_team' );

function hrd_show_team() {

ob_start(); ?>
<div class="flex flex-col items-center sm:flex sm:flex-row sm:items-stretch sm:flex-wrap sm:justify-evenly pb-4 px-4 lg:px-16 lg:space-x-4">
               <?php
            $teams = function_exists( 'carbon_get_theme_option' ) ? carbon_get_theme_option( 'team' ) : array();
             //echo '<pre>';print_r($teams);echo '<pre/>';die;

                if( $teams) {
                     foreach ( $teams as $team ) { ?>

         <!--card--><div class="flex flex-col basis-full sm:basis-[45%] md:basis-[30%]  bg-white shadow-card rounded-md mx-2 my-6 h-full w-full sm:w-1/2">

                       <div class="rounded-md">
                           <img class="object-cover h-auto w-full rounded-t-md" src="<?php echo wp_get_attachment_image_src( $team['team_photo'], array(200,200), false )[0]; ?>" alt="<?php echo esc_attr( $team ['team_name'] ); ?>" width="<?php echo esc_attr( $team['team_photo'] )[1]; ?>" height="<?php echo esc_attr( $team['team_photo'] )[2]; ?>">
                       </div>
                       <div class="flex flex-col items-center text-center pt-8 pb-3">
                           <p class="text-lg text-heading font-bold font-montserrat mb-2"><?php echo esc_html( $team['team_name'] ); ?></p>
                           <p class="text-base text-paragraph font-bold font-montserrat mb-1"><?php echo esc_html( $team['team_role'] ); ?></p>
                       </div>

                       <div class="flex flex-row items-center justify-center mb-4">
                           <div class="mr-2">
                             <?php
                                 echo '<a href="' . esc_url( $team['team_facebook_url'] ) . '" target="_blank"><span class="fa fa-facebook text-paragraph hover:text-primary w-[25px] h-[25px] mr-0 rounded-full"></a>';
                                 echo '<a href="' . esc_url( $team['team_twitter_url'] ) . '" target="_blank"><span class="fa fa-twitter text-paragraph hover:text-primary w-[25px] h-[25px] rounded-full"></a>';
                             ?>
                           </div>
                       </div><!--social icons-->
                   </div><!--card-->
               <?php } //end foreach
                } //end if
               ?>
</div>

<?php return ob_get_clean();
}

add_shortcode('show_teamwork', 'hrd_show_team');


/*************DEPARTMENTS SHORTCODE ************/

add_action( 'carbon_fields_fields_registered', 'hrd_show_departments' );

function hrd_show_departments() {

ob_start(); ?>
<div class="flex flex-col items-center sm:flex sm:flex-row sm:items-stretch sm:flex-wrap sm:justify-evenly pb-4 px-4 lg:px-16 lg:space-x-4">
               <?php
            $departments = function_exists( 'carbon_get_theme_option' ) ? carbon_get_theme_option( 'department' ) : array();
             //echo '<pre>';print_r($departments);echo '<pre/>';die;

                if( $departments) {
                     foreach ( $departments as $department ) { ?>

         <!--card--><div class="flex flex-col basis-full sm:basis-[45%] md:basis-[30%]  bg-secondary shadow-card rounded-md mx-2 my-6 h-full w-full sm:w-1/2 p-2">

                       <div class="rounded-md">
                           <img class="object-cover h-auto w-full rounded-t-md" src="<?php echo wp_get_attachment_image_src( $department['department_photo'], array(200,200), false )[0]; ?>" alt="<?php echo esc_attr( $department ['department_name'] ); ?>" width="<?php echo esc_attr( $department['department_photo'] )[1]; ?>" height="<?php echo esc_attr( $department['department_photo'] )[2]; ?>">
                       </div>
                       <div class="flex flex-col items-center text-center pt-8 pb-3">
                           <p class="text-lg text-heading font-bold font-montserrat mb-2"><?php echo esc_html( $department['department_name'] ); ?></p>
                       </div>

                       <div class="flex flex-row items-center justify-center mb-4">
                           <div class="mr-6">
                           <p class="text-base text-paragraph font-semibold font-montserrat mb-0"><?php echo esc_html( $department['department_phone'] ); ?></p>
                           </div>
                           <div class=""><!--social icons-->
                             <?php
                               echo '<a href="' . esc_url( $department['hrd_department_facebook_url'] ) . '" target="_blank"><span class="fa fa-facebook w-[25px] h-[25px] rounded-full text-paragraph hover:text-primary"></span></a>';
                               echo '<a href="' . esc_url( $department['hrd_department_twitter_url'] ) . '" target="_blank"><span class="fa fa-twitter w-[25px] h-[25px] rounded-full text-paragraph hover:text-primary"></span></a>';
                             ?>
                           </div>
                       </div><!--social icons-->
                   </div><!--card-->
               <?php } //end foreach
                } //end if
               ?>
</div>

<?php return ob_get_clean();
}

add_shortcode('show_departments', 'hrd_show_departments');

/*************TEAM SHORTCODE ************/

add_action( 'carbon_fields_fields_registered', 'hrd_show_team2' );

function hrd_show_team2() {

ob_start(); ?>
<div class="flex flex-col items-center sm:flex sm:flex-row sm:items-stretch sm:flex-wrap sm:justify-evenly pb-4 px-4 lg:px-16 lg:space-x-4">
               <?php
            $teams = function_exists( 'carbon_get_theme_option' ) ? carbon_get_theme_option( 'team' ) : array();
             //echo '<pre>';print_r($teams);echo '<pre/>';die;

                if( $teams) {
                     foreach ( $teams as $team ) { ?>

         <!--card--><div class="flex flex-col basis-full sm:basis-[45%] md:basis-[30%]  bg-white shadow-card rounded-md mx-2 my-6 h-full w-full sm:w-1/2">

                       <div class="rounded-md group h-[450px] overflow-y-hidden flex flex-col items-center">
                            <div class="w-full h-full relative">
                                <img class="object-cover h-full w-full rounded-t-md" src="<?php echo wp_get_attachment_image_src( $team['team_photo'], array(200,200), false )[0]; ?>" alt="<?php echo esc_attr( $team ['team_name'] ); ?>" width="<?php echo esc_attr( $team['team_photo'] )[1]; ?>" height="<?php echo esc_attr( $team['team_photo'] )[2]; ?>">
                           </div>
                            <div class="group-hover:scale-100  scale-0 bottom-[50px] transition-all duration-500 ease-in bg-white rounded-md absolute px-8 py-4">
                                <div class="flex flex-col items-center text-center">
                                    <p class="text-lg text-heading font-bold font-montserrat mb-2"><?php echo esc_html( $team['team_name'] ); ?></p>
                                    <p class="text-base text-paragraph font-bold font-montserrat mb-1"><?php echo esc_html( $team['team_role'] ); ?></p>
                                </div>

                                <div class="flex flex-row items-center justify-center">
                                    <div class="mr-2">
                                        <?php
                                            echo '<a href="' . esc_url( $team['team_facebook_url'] ) . '" target="_blank"><span class="fa fa-facebook text-paragraph hover:text-primary w-[25px] h-[25px] mr-0 rounded-full"></a>';
                                            echo '<a href="' . esc_url( $team['team_twitter_url'] ) . '" target="_blank"><span class="fa fa-twitter text-paragraph hover:text-primary w-[25px] h-[25px] rounded-full"></a>';
                                        ?>
                                    </div>
                                </div><!--social icons-->
                            </div>
                       </div>
                   </div><!--card-->
               <?php } //end foreach
                } //end if
               ?>
</div>

<?php return ob_get_clean();
}

add_shortcode('show_teamwork2', 'hrd_show_team2');