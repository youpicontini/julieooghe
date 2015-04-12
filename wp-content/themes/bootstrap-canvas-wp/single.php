<?php
/**
 * Template for displaying all single posts
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

get_header(); ?>

<div class="row">

    <div class="col-sm-8 blog-main text-format">

        <?php get_template_part( 'loop', 'single' ); ?>

    </div><!-- /.blog-main -->


    <div class="col-sm-4 description_article text-format" style="font-size: 11px">
        <?php $key="description";get_post_custom_values($key);?>
        <?php the_meta(); ?>
    </div>

</div><!-- /.row -->



<?php get_footer(); ?>
