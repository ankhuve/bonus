<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 2015-12-17
 * Time: 16:39
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="feed-post">
        <div class="small-12 columns left-side">
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
    </div>
</article>
