<?php
/**
 * The content in archive blog
 *
 * @package Boilerplate
 */
?>


<div class="bg-white flex flex-col items-center justify-start w-full h-auto md:w-2/5 md:mx-2 md:mr-6 lg:w-[30%] lg:mx-4 rounded-lg pb-3 my-8 shadow-card">

    <div class="w-full">
        <img class="w-full rounded-t opacity-70 hover:opacity-100 transition-opacity duration-300" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, array(290,290))); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
    </div>
    <div class="flex flex-col justify-between items-center h-full">
        <div class="flex flex-row flex-wrap font-poppins text-text text-xs w-full pl-2 pt-2 pb-3">
            <p class="text-text text-sm mb-0">Posted by <?php esc_html(the_author_posts_link()); ?> | <?php echo esc_html(get_the_date('j F,Y')); ?> | <?php echo get_the_category_list(', '); ?></p>
        </div>
        <div class="px-2 text-left">
            <h2 class="text-text text-[24px] font-semibold mb-0"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a></h2>

        </div>
    </div>
</div>


