<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 2015-12-17
 * Time: 16:39
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="feed-post" id="info">
        <div class="small-12 columns left-side">

            <div class="entry-content">
                <?php the_content(); ?>

            </div>
        </div>
    </div>
</article>
