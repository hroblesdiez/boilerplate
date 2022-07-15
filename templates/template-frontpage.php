<?php
/**
 * Template Name: frontpage
 *
 * @package Boilerplate
 */


get_header(); ?>

<p class="hidden text-2xl w-1/2 border-footerbackground"></p>
<p class="hidden text-3xl"></p>
<p class="hidden text-4xl"></p>
<p class="hidden text-5xl"></p>
<p class="hidden text-6xl"></p>
<!-- home page block1 -->
<section class="hidden absolute top-[-250px] lg:flex lg:flex-auto lg:flex-row lg:flex-wrap lg:items-center lg:justify-center lg:space-x-4 mb-30">

        <div class="p-8 basis-[30%] z-10 mb-1 bg-white group hover:shadow-card transition-all duration-[350] ease-in-out rounded-md">
          <div class="flex flex-row items-center mb-4 space-x-6">
            <div class="mr-3">
              <span class="fa fa-users text-primary group-hover:text-white text-xl p-3 bg-background group-hover:bg-primary rounded"></span>
            </div>
            <div>
              <p class="mb-2 text-paragraph text-lg">Protect</p>
              <h4 class="mb-0"><a class="text-heading font-semibold" href="#url">Qualified Team</a></h4>
            </div>
          </div>
          <p class="mt-3 text-paragraph">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui eligendi vitae sit.</p>
        </div>
        <div class="p-8 basis-[30%] z-10 mb-1 bg-white group hover:shadow-card transition-all duration-[350] ease-in-out rounded-md">
          <div class="flex flex-row items-center mb-4 space-x-6">
            <div class="mr-3">
              <span class="fa fa-shield text-primary group-hover:text-white text-xl p-3 bg-background group-hover:bg-primary rounded"></span>
            </div>
            <div>
              <p class="mb-2 text-paragraph text-lg">Help</p>
              <h4 class="mb-0"><a class="text-heading font-semibold" href="#url">Quality Service</a></h4>
            </div>
          </div>
          <p class="mt-3 text-paragraph">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui eligendi vitae sit.</p>
        </div>
        <div class="p-8 basis-[30%] z-10 mb-1 bg-white group hover:shadow-card transition-all duration-[350] ease-in-out rounded-md">
          <div class="flex flex-row items-center mb-4 space-x-6">
            <div class="mr-3">
              <span class="fa fa-globe text-primary group-hover:text-white text-xl p-3 bg-background group-hover:bg-primary rounded"></span>
            </div>
            <div>
              <p class="mb-2 text-paragraph text-lg">World</p>
              <h4 class="mb-0"><a class="text-heading font-semibold" href="#url">Global Work</a></h4>
            </div>
          </div>
          <p class="mt-3 text-paragraph">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui eligendi vitae sit.</p>
        </div>

</section>
<!-- //home page block1 -->

<!--/about-->
      <div class="flex flex-col flex-1 lg:flex-row mt-30 mb-16 px-6 md:px-12 lg:px-16">
        <div class="basis-2/5">
          <h6 class="uppercase text-primary font-semibold">About Us</h6>
          <h2 class="mb-4">Changing the way you receive healthcare.</h2>

        </div>
        <div class="basis-3/5">
          <p class="">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui
            eligendi
            vitae sit.Ea
            ipsum sed consequuntur illum facere.Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo
            non..
          </p>
          <p class="mb-10">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui
            eligendi
            vitae sit.Ea
            ipsum sed consequuntur illum facere.
          </p>
          <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About' ) ) ); ?>" class="visited:text-white text-white font-semibold border-2 border-solid border-white hover:border-primary rounded-[20px] px-6 py-3 bg-primary hover:bg-white hover:text-primary transition-all duration-300 ease-in-out">
            Read More</a>
        </div>
      </div>
  <!--//about-->

<!--/why choose-->

          <div class="bg-background">
            <div class="flex flex-col items-start lg:flex-row lg:flex-wrap px-6 py-6 md:px-12 lg:px-16 md:py-12 lg:py-16 ">
              <div class="basis-1/2 grow-0 shrink-0 group md:px-8">
                <div class="mb-8">
                  <h6 class="uppercase text-primary font-semibold mb-4">Extraordinary Services</h6>
                  <h2 class="">Why You Should Choose <span class="text-primary">M</span>edical <span class="text-primary">H</span>ouse?</h2>
                </div>

                <div class="mb-8 flex items-start">
                  <div class="mr-6">
                    <span class="fa fa-calendar text-primary group-hover:text-white text-xl p-3 bg-white group-hover:bg-primary rounded"></span>
                  </div>
                  <div class="info">
                    <h4 class="mb-1"><a class="text-heading" href="#url">10 Years Of Experience</a></h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit. </p>
                  </div>
                </div>
                <div class="mb-8 flex items-start">
                  <div class="mr-6">
                    <span class="fa fa-pencil-square-o text-primary group-hover:text-white text-xl p-3 bg-white group-hover:bg-primary rounded"></span>
                  </div>
                  <div class="info">
                    <h4 class="mb-1"><a class="text-heading" href="#url">Free Consultation</a></h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit. </p>
                  </div>
                </div>
                <div class="mb-8 flex items-start">
                  <div class="mr-6">
                    <span class="fa fa-shield text-primary group-hover:text-white text-xl p-3 bg-white group-hover:bg-primary rounded"></span>
                  </div>
                  <div class="info">
                    <h4 class="mb-1"><a class="text-heading" href="#url">100% Guranteed</a></h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit. </p>
                  </div>
                </div>
              </div>
              <div class="basis-1/2 grow-0 shrink-0 self-center">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/services.jpg'));  ?>" alt="Services" class="w-full lg:max-h-[800px] md:max-h-[600px] max-h-[450px] object-cover rounded-md">

              </div>
            </div>
          </div>

<!--//why choose-->

 <!-- /services-->
<div class="bg-white">

            <div class="mb-6 mt-10 text-center">
              <h6 class="uppercase text-primary font-semibold mb-3">Extraordinary Services</h6>
              <h3 class="text-heading font-bold">Our Services.</h3>
            </div>
            <div class="flex flex-col items-start lg:flex-row lg:flex-wrap px-6 py-6 md:px-12 lg:px-16 md:py-12 lg:py-16 ">
              <div class="basis-1/2 grow-0 shrink-0 md:px-8">

                <div class="mb-8 flex items-start group">
                  <div class="mr-6">
                    <span class="fa fa-american-sign-language-interpreting text-primary group-hover:text-white text-xl p-3 bg-background group-hover:bg-primary rounded"></span>
                  </div>
                  <div class="info">
                    <h4 class="mb-1"><a class="text-heading" href="#url">Therapiya</a></h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit. </p>
                  </div>
                </div>
                <div class="mb-8 flex items-start group">
                  <div class="mr-6">
                    <span class="fa fa-superpowers text-primary group-hover:text-white text-xl p-3 bg-background group-hover:bg-primary rounded"></span>
                  </div>
                  <div class="info">
                    <h4 class="mb-1"><a class="text-heading" href="#url">Dentistry</a></h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit. </p>
                  </div>
                </div>
                <div class="mb-8 flex items-start group">
                  <div class="mr-6">
                    <span class="fa fa-snowflake-o text-primary group-hover:text-white text-xl p-3 bg-background group-hover:bg-primary rounded"></span>
                  </div>
                  <div class="info">
                    <h4 class="mb-1"><a class="text-heading" href="#url">Virusology</a></h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit. </p>
                  </div>
                </div>

              </div>
              <div class="basis-1/2 grow-0 shrink-0  md:px-8">
                <div class="mb-8 flex items-start group">
                  <div class="mr-6">
                    <span class="fa fa-building-o text-primary group-hover:text-white text-xl p-3 bg-background group-hover:bg-primary rounded"></span>
                  </div>
                  <div class="info">
                    <h4 class="mb-1"><a class="text-heading" href="#url">Pharmocology</a></h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit. </p>
                  </div>
                </div>
                <div class="mb-8 flex items-start group">
                  <div class="mr-6">
                    <span class="fa fa-heartbeat text-primary group-hover:text-white text-xl p-3 bg-background group-hover:bg-primary rounded"></span>
                  </div>
                  <div class="info">
                    <h4 class="mb-1"><a class="text-heading" href="#url">Cardiology</a></h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit. </p>
                  </div>
                </div>
                <div class="mb-8 flex items-start group">
                  <div class="mr-6">
                    <span class="fa fa-eye text-primary group-hover:text-white text-xl p-3 bg-background group-hover:bg-primary rounded"></span>
                  </div>
                  <div class="info">
                    <h4 class="mb-1"><a class="text-heading" href="#url">Eye surgery</a></h4>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur ipsum elit. Lorem ipsum dolor sit amet elit. </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
  <!-- //services-->

  <!-- stats -->
            <div class="banner-count flex flex-col flex-wrap items-center md:flex-row  px-2 py-6 md:px-12 lg:px-16 md:py-12 lg:py-16 ">
                <div class="basis-1/2 lg:basis-1/4 lg:grow-0 lg:shrink-0 group text-center flex flex-col justify-center">
                  <span class="fa fa-users text-primary text-lg md:text-4xl group-hover:-translate-y-6 p-3 transition-all duration-500 ease-in-out"></span>
                  <p class="mt-3 mb-0 text-lg md:text-4xl text-white font-bold" data-target="<?php echo esc_attr( carbon_get_theme_option( 'stats_doctors' ) ); ?>" id="counter">0 </p>
                  <h4 class="mt-3 text-white text-lg md:text-2xl">Expert Doctors </h4>
                </div>
                <div class="basis-1/2 lg:basis-1/4 lg:grow-0 lg:shrink-0 group text-center flex flex-col justify-center">
                  <span class="fa fa-laptop text-primary text-lg md:text-4xl group-hover:-translate-y-6 p-3 transition-all duration-500 ease-in-out"></span>
                  <p class="mt-3 mb-0 text-lg md:text-4xl text-white font-bold" data-target="<?php echo esc_attr( carbon_get_theme_option( 'stats_programs' ) ); ?>" id="counter">0 </p>
                  <h4 class="mt-3 text-white text-lg md:text-2xl">Health Programs </h4>
                </div>
                <div class="basis-1/2 lg:basis-1/4 lg:grow-0 lg:shrink-0 group text-center flex flex-col justify-center">
                  <span class="fa fa-smile-o text-primary text-lg md:text-4xl group-hover:-translate-y-6 p-3 transition-all duration-500 ease-in-out"></span>
                  <p class="mt-3 mb-0 text-lg md:text-4xl text-white font-bold" data-target="<?php echo esc_attr( carbon_get_theme_option( 'stats_clients' ) ); ?>" id="counter">0 </p>
                  <h4 class="mt-3 text-white text-lg md:text-2xl">Happy Clients </h4>
                </div>
                <div class="basis-1/2 lg:basis-1/4 lg:grow-0 lg:shrink-0 group text-center flex flex-col justify-center">
                  <span class="fa fa-trophy text-primary text-lg md:text-4xl group-hover:-translate-y-6 p-3 transition-all duration-500 ease-in-out"></span>
                  <p class="mt-3 mb-0 text-lg md:text-4xl text-white font-bold" data-target="<?php echo esc_attr( carbon_get_theme_option( 'stats_operations' ) ); ?>" id="counter">0 </p>
                  <h4 class="mt-3 text-white text-lg md:text-2xl">Success Meets </h4>
                </div>
            </div>
<!-- //stats -->

  <!-- blog -->
  <div class="lg:mt-12">
            <div class="mb-6 mt-16 text-center">
              <h6 class="uppercase text-primary font-semibold mb-3">latest news</h6>
              <h3 class="text-heading font-bold">Blog Posts</h3>
            </div>

            <div class="flex flex-col items-center md:justify-evenly md:flex-row md:flex-wrap px-6 py-6 md:px-12 lg:px-16">

                <?php $latest_posts = new WP_Query( array (
                    'post_type'       => 'post',
                    'posts_per_page'  => 3,
                    'post_status'     => 'publish',
                    'order_by'        => 'date'

                ) );
                    if( $latest_posts) {
                      while( $latest_posts-> have_posts()) {

                        $latest_posts-> the_post();?>

                          <div class="lg:basis-[30%] md:basis-[50%] md:grow-0 md:shrink-0 md:px-4 group text-center flex flex-col justify-center mb-16"><!--start post card-->
                                            <div>
                                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'square-small')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full rounded">
                                            </div>
                                            <div class="text-left mt-2 md:mt-5">
                                                <h6 class="mb-2">
                                                  <?php
                                                    $categories = get_the_category();
                                                    $separator = ', ';
                                                    $output = '';
                                                    if ( ! empty( $categories ) ) {
                                                        foreach( $categories as $category ) {
                                                            $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . '<span class="text-primary">' . $separator;
                                                        }
                                                        echo trim( $output, $separator );
                                                    }

                                                  ?>
                                                </h6>
                                                <h5 class="mb-1"><a class="text-heading font-semibold text-xl" href="<?php esc_url(the_permalink());?>"><?php esc_html(the_title()); ?></a></h5>
                                            </div>

                                            <div class="flex items-center justify-start">
                                                  <span class="fa fa-user-o mr-1"></span><p class="mb-0 mr-5 text-sm md:text-base lg:text-[17px]">By&nbsp; <?php esc_html(the_author_posts_link()); ?></p>
                                                  <span class="fa fa-clock-o"></span><p class="mb-0 text-sm md:text-base lg:text-[17px]">&nbsp; <?php echo esc_html(get_the_date('j F,Y')); ?></p>
                                            </div>

                          </div><!--end post card-->
                                    <?php }//end while
                                  }//end if

                          ?>

            </div>
  </div>
<!-- //blog -->

 <!-- /testimonials-->
 <div class="bg-white px-6 lg:px-64 mb-10">

      <div class="mb-6 mt-10 text-center">
        <h6 class="uppercase text-primary font-semibold mb-3">Happy clients</h6>
        <h3 class="text-heading font-bold">What Our Customers Say</h3>
      </div>

      <!-- Slider main container -->
      <div class="swiper !overflow-visible flex flex-col items-center justify-between">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
              <!-- Slides -->
                <?php
                $slides = carbon_get_theme_option( 'testimonials' );


                if ($slides) {
                  foreach ($slides as $slide) {

                     //echo '<pre>';var_dump($slide);echo '<pre/>';
                ?>
                  <div class="swiper-slide">
                          <div class="py-5 px-3 text-center">
                              <q class="font-bold text-base mb-5"><?php echo $slide['hrd_test_title']; ?></q>
                              <p class="text-base"><?php echo $slide['hrd_test_content']; ?></p>
                          </div>
                          <div class="flex flex-row justify-center items-center">
                              <img class="mr-6 w-1/4 h-auto object-cover block rounded-full" src="<?php echo esc_url(wp_get_attachment_image_src($slide['hrd_test_photo'])[0]); ?>" alt="<?php esc_attr($slide['hrd_test_name']);?>">
                              <div class="flex flex-col content-start">
                                <h3 class="font-bold mb-1 md:mb-3 lg:mb-5 text-lg md:text-xl lg:text-2xl"><?php echo $slide['hrd_test_name'];?></h3>
                                <p class="mb-0 md:mb-1 lg:mb-0"><?php echo $slide['hrd_test_role'];?></p>
                                <p class="mb-0 lg:mb-2 lg:mt-0"><?php echo $slide['hrd_test_company'];?></p>
                                <div class="flex flex-row w-full max-h-12">
                                  <a href="<?php echo $slide['hrd_facebook_url']; ?>"><span class="block fa fa-facebook w-[25px] h-[25px] text-paragraph hover:text-primary  mr-0"></span></a>
                                  <a href="<?php echo $slide['hrd_twitter_url']; ?>"><span class="block fa fa-twitter w-[25px] h-[25px] text-paragraph hover:text-primary"></span></a>
                                </div>
                              </div>
                          </div>
                  </div> <!--end slide -->
                  <?php } //end foreach
                }//end if ?>
          </div><!--end slide-wrapper -->
          <!-- pagination -->
          <div class="swiper-pagination !relative !bottom-1 lg:!-bottom-4"></div>

      </div><!--end swiper main container -->
 </div> <!-- //testimonials-->
<?php
get_footer();