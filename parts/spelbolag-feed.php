<?php
/**
 * Display feed with the latest posts with category spelbolag
 * Created by PhpStorm.
 * User: Erik
 * Date: 2015-12-20
 * Time: 14:47
 */



wp_reset_query(); // reset query to get only the company posts
$categoryName = 'spelbolag';
$args = array(
    'category_name' => $categoryName,
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 2 // show only n posts
);

query_posts( $args ); ?>
<div class="column large-6 small-12">
    <a href="<?php echo get_category_link( get_cat_ID( $categoryName ) ); ?>">

        <div class="puff-title"><?php echo strtoupper( $categoryName ) ?></div>
    </a>
    <div class="post-feed">
        <?php if (have_posts()) : while ( have_posts() ) : the_post(); // new loop for only companies ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile;
        else : ?>
            <?php get_template_part( 'content', 'none' );
        endif; ?>
        <?php do_action( 'foundationpress_before_pagination' ); ?>
    </div>
</div>