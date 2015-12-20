<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
</div>
<section class="container" role="document">
<div class="row">
    <?php if( has_category( "spelbolag" ) ){ // check if post is spelbolag
        $classes = "small-12 large-8 columns";
    } else{
        $classes = "small-12 columns";
    }?>
	<div class="<?php echo $classes; ?>" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( "custom-single-post main-post-content" ) ?> id="post-<?php the_ID(); ?>">
				<header>
					<div class="small-7 column title-area">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php foundationpress_entry_meta(); ?>
					</div>
					<div class="small-5 column">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="post-thumbnail">

								<?php the_post_thumbnail( ); ?>

						</div>
					<?php endif; ?>
					</div>
					<hr/>
				</header>
				<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile;?>

		<?php do_action( 'foundationpress_after_content' ); ?>



	</div>
	<?php if( has_category( "spelbolag" ) ) :  // check if post is spelbolag ?>
        <div class="large-4 small-12 columns bonus-info">
            <ul class="bonus-table">
                <li class="bonus">
                <h4>Bonus</h4>
                    <?php if ( get_post_meta($post->ID, 'bonus', true)){
                        echo get_post_meta($post->ID, 'bonus', true);
                    } else{
                        echo "Ingen bonus";
                    }?>
                </li>
                <li class="bonus-code">
                <h4>Bonuskod</h4>
                    <?php if ( get_post_meta($post->ID, 'bonuscode', true)){
                        echo get_post_meta($post->ID, 'bonuscode', true);
                    } else{
                        echo "Ingen kod";
                    }?>
                </li>
                <li class="req">
                <h4>Omsättningskrav</h4>
                    <?php if ( get_post_meta($post->ID, 'req', true)){
                        echo "<b>" . get_post_meta($post->ID, 'req', true) . "x</b> bonusbeloppet";
                    } else{
                        echo "Inget krav";
                    }?>
                </li>
                <li class="bold minodds">
                <h4>Minsta odds</h4>
                    <?php if ( get_post_meta($post->ID, 'minodds', true)){
                        echo get_post_meta($post->ID, 'minodds', true);
                    } else{
                        echo "-";
                    }?>
                </li>
                <li class="get-bonus in-post">
                    <a href="<?php the_permalink(); ?>">
                        <button class="button">
                            Hämta bonus!
                        </button>
                    </a>
                </li>
            </ul>
            <?php get_sidebar(); ?>
        </div>

    <?php endif; ?>

</div>
<div class="row">
    <div class="small-12 columns">
        <?php get_template_part( 'parts/spelbolag-feed' );?>
        <?php get_template_part( 'parts/artiklar-feed' );?>
    </div>
</div>

<?php get_footer(); ?>