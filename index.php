<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php get_template_part( 'parts/hero' ); ?>

<section class="container" role="document">
<div class="row">
	<?php get_template_part( 'parts/check-if-sidebar-exist' ); ?>

	<?php if ( have_posts() ) : ?>

		<?php do_action( 'foundationpress_before_content' ); ?>

		<!-- bonus table -->
		<section id="bonus-table-area">
        	<?php get_template_part( 'parts/bonus-table' ); ?>
		</section>



	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>

<!--		--><?php //do_action( 'foundationpress_before_pagination' ); ?>

	<?php endif;?>
	<?php do_action( 'foundationpress_before_pagination' ); ?>


	<!-- latest posts with category spelbolag -->
	<?php wp_reset_query(); // reset query to get only the company posts ?>
	<?php
	$args = array( 'category_name' => 'spelbolag',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => 2
	);
	query_posts( $args ); ?>
	<div class="column large-6 small-12">
		<div class="puff-title">Spelbolag</div>
		<div>
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
	</div>

<!-- latest posts with category artiklar -->
	<?php wp_reset_query(); // reset query to get only the articles posts ?>
	<?php
	$args = array(
		'category_name' => 'artiklar',
		'orderby' => 'date',
		'order' => 'DESC'
	);
	query_posts( $args ); ?>
	<div class="large-6 small-12 column">
		<div class="puff-title">Artiklar</div>
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


	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
<!--	--><?php //get_sidebar(); ?>
<?php get_footer(); ?>
