<?php
/**
 * The content in single posts
 *
 * @package Boilerplate
 */
?>


<div class="mb-16 px-12">

<p class="">
    <?php echo get_the_content(); ?>
</p>

</div>
<?php
                    $obj = get_queried_object();
                    $post_categories = wp_get_post_categories(get_the_ID());

                    if ($obj->post_type === 'post') {
                        $postid = $obj->ID;
                    }

                    $args = array(
                        'post_type'                 => 'post',
                        'posts_per_page'            => 3,
                        'post__not_in'              => array($postid),
                        'category__in'              => $post_categories
                    );

                    $relatedPosts = new WP_Query($args);

                    if( $relatedPosts->have_posts() ) { ?>
                    <h2 class="text-center text-3xl font-bold lg:mt-12 lg:!mb-12 pt-8 border-t-2 border-solid border-[#7D8D9E] lg:w-1/4 w-[65%] mx-auto">Related posts</h2>
                    <div class="flex flex-row justify-evenly items-strecht flex-wrap">


                    <?php  if ($relatedPosts->have_posts()) :
                            while ($relatedPosts->have_posts()) : $relatedPosts->the_post(); ?>

                                <div class="bg-white flex flex-row flex-wrap items-start justify-evenly w-full basis-full md:basis-1/2 lg:basis-[30%] md:mr-6 h-auto rounded-lg my-8 lg:my-0 shadow-card">

                                    <div class="w-full h-full relative basis-1/2 group">
                                        <a href="<?php the_permalink(); ?>">
                                            <img class="w-full h-full object-cover rounded-t" src="<?php echo get_the_post_thumbnail_url($post->ID, 'bannerDog'); ?>" alt="<?php echo get_the_title(); ?>">
                                            <span class="absolute top-0 left-0 right-0 h-full w-full bg-[rgba(0,0,0,.5)] group-hover:bg-[rgba(0,0,0,.05)] transition-all duration-500 ease-in-out"></span>
                                        </a>
                                    </div>
                                    <div class="basis-1/2">
                                        <h3 class="text-start hover:text-primary transition-all ease-in duration-300 text-lg font-semibold px-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="text-primary text-start  text-sm px-2"><?php echo get_the_date('j F,Y'); ?></p>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <?php } //enf first if