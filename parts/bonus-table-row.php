<?php
/**
 * Template for part of the bonus table
 *
 * User: Erik
 * Date: 2015-10-05
 * Time: 00:34
 */

?>

<div class="bonus-table-row">
    <table class="bonus-table">
        <tr id="company-<?php the_ID(); ?>" <?php post_class(); ?>>
            <td width="30">
                <?php the_post_thumbnail( 'thumbnail' ); ?>
            </td>
            <td class="bold table-row-main" width="120">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </td>
            <td width="170">
                <?php echo get_post_meta($post->ID, 'bonus', true); ?>
            </td>
            <td width="100">
                <?php if ( get_post_meta($post->ID, 'bonuscode', true)){
                    echo get_post_meta($post->ID, 'bonuscode', true);
                } else{
                    echo "Ingen kod";
                }?>
            </td>
            <td width="150">
                <?php if ( get_post_meta($post->ID, 'req', true)){
                    echo get_post_meta($post->ID, 'req', true);
                } else{
                    echo "Inget krav";
                }?>
            </td>
            <td class="bold" width="100">
                <?php if ( get_post_meta($post->ID, 'minodds', true)){
                    echo get_post_meta($post->ID, 'minodds', true);
                } else{
                    echo "-";
                }?>
            </td>
            <td class="get-bonus" width="100">
                <a href="<?php the_permalink(); ?>">
                    <button class="button">
                        Hämta bonus
                    </button>
                </a>
            </td>
            <!--    <div class="entry-content">-->
            <!--        --><?php //the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
            <!--    </div>-->
            <!--    <footer>-->
            <!--        --><?php //$tag = get_the_tags(); if ( $tag ) { ?><!--<p>--><?php //the_tags(); ?><!--</p>--><?php //} ?>
            <!--    </footer>-->
            <!--    <hr />-->
        </tr>
    </table>
</div>