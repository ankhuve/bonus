<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="feed-post">
        <div class="small-8 columns left-side">
            <header>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-sub-title"><?php the_date( 'Y-m-d' ) ?></div>
            </header>

            <div class="entry-content">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">
                    <button class="button read-more">
                        Läs mer..
                    </button>
                </a>
            </div>
        </div>
        <div class="small-4 columns right-side">
            <div class="get-bonus-button">
                <a href="<?php the_permalink(); ?>">
                    <button class="button get-bonus small-12">
                        Hämta bonus!
                    </button>
                </a>
            </div>
            <?php if (has_post_thumbnail() ): ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail( ); ?>

                    </div>
                </a>
            <?php endif; ?>
        </div>
    </div>
</article>
