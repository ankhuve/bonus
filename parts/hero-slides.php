<?php
/**
 * Get all hero slides
 * Created by PhpStorm.
 * User: Erik
 * Date: 2016-01-09
 * Time: 17:03
 */

wp_reset_query(); // reset query to get only the articles posts
$categoryName = 'hero-slides';
$args = array(
    'category_name' => $categoryName,
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 4 // show only n posts
);

query_posts( $args ); ?>

<?php if (have_posts()) : while ( have_posts() ) : the_post(); // new loop for only articles ?>
    <div class="gallery-cell hero">
        <div>
            <?php the_content() ;?>
        </div>
    </div>

<?php endwhile;
else : ?>
    <div class="gallery-cell hero">
        <div>
            <h1>Inga slides är skapade</h1>
            <h5>Nedan är en exempelbild för att visa storlek för en heroslide.</h5>
            <img src="https://placehold.it/768x270" alt="">
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
