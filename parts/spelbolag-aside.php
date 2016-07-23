<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 2016-01-08
 * Time: 18:22
 */
?>

<aside class="large-4 small-12 columns">
                <div class="small-12 bonus-info">
                    <ul>
                        <li class="bonus">
                        <h4>Bonus</h4>
                            <?php if ( get_post_meta($post->ID, 'bonus', true)){
    echo get_post_meta($post->ID, 'bonus', true);
} else{
    echo "Ingen bonus";
}?>
<hr/>
</li>

<li class="bonus-code">
    <h4>Bonuskod</h4>
    <?php if ( get_post_meta($post->ID, 'bonuscode', true)){
        echo get_post_meta($post->ID, 'bonuscode', true);
    } else{
        echo "Ingen kod";
    }?>
    <hr/>
</li>
<li class="req">
    <h4>Omsättningskrav</h4>
    <?php if ( get_post_meta($post->ID, 'req', true)){
        echo "<b>" . get_post_meta($post->ID, 'req', true) . "x</b> bonusbeloppet";
    } else{
        echo "Inget krav";
    }?>
    <hr/>
</li>
<li class="bold minodds">
    <h4>Minsta odds</h4>
    <?php if ( get_post_meta($post->ID, 'minodds', true)){
        echo get_post_meta($post->ID, 'minodds', true);
    } else{
        echo "-";
    }?>
    <hr/>
</li>
<li class="get-bonus in-post">
    <a href="<?php echo get_post_meta( $post->ID, 'refurl', true); ?>">
        <button class="button">
            Hämta bonus!
        </button>
    </a>
</li>
</ul>
</div>
<?php get_sidebar(); ?>
</aside>