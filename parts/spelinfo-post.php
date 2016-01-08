<?php
/**
 * Get spelinfo post
 * Created by PhpStorm.
 * User: Erik
 * Date: 2016-01-08
 * Time: 17:53
 */

wp_reset_query(); // reset query to get only the articles posts
$categoryName = 'spelinfo';
$args = array(
    'category_name' => $categoryName,
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 2 // show only n posts
);

query_posts( $args ); ?>

<div class="small-12 columns">
<!--    <a href="--><?php //echo get_category_link( get_cat_ID( $categoryName ) ); ?><!--">-->

    <div class="puff-title"><?php echo strtoupper( $categoryName ) ?></div>
<!--    </a>-->
    <div class="post-feed">
        <?php if (have_posts()) : while ( have_posts() ) : the_post(); // new loop for only articles ?>
            <?php get_template_part( 'content-full-width', get_post_format() ); ?>
        <?php endwhile;
        else : ?>
            <?php get_template_part( 'content-full-width', 'none' );
        endif; ?>
        <?php do_action( 'foundationpress_before_pagination' ); ?>
    </div>
</div>