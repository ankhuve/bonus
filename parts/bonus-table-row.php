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
<!--            <td width="30">-->
<!--                --><?php //the_post_thumbnail( 'thumbnail' ); ?>
<!--            </td>-->
            <td class="bold table-row-main" width="120">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </td>
            <td width="170" class="bonus">
                <?php if ( get_post_meta($post->ID, 'bonus', true)){
                    echo get_post_meta($post->ID, 'bonus', true);
                } else{
                    echo "Ingen bonus";
                }?>
            </td>
            <td width="100">
                <?php if ( get_post_meta($post->ID, 'bonuscode', true)){
                    echo get_post_meta($post->ID, 'bonuscode', true);
                } else{
                    echo "Ingen kod";
                }?>
            </td>
            <td width="150" class="req">
                <?php if ( get_post_meta($post->ID, 'req', true)){
                    echo "<b>" . get_post_meta($post->ID, 'req', true) . "x</b> bonusbeloppet";
                } else{
                    echo "Inget krav";
                }?>
            </td>
            <td class="bold minodds" width="100">
                <?php if ( get_post_meta($post->ID, 'minodds', true)){
                    echo get_post_meta($post->ID, 'minodds', true);
                } else{
                    echo "-";
                }?>
            </td>
            <td class="get-bonus" width="100">
                <a href="<?php echo get_post_meta( $post->ID, 'refurl', true); ?>">
                    <button class="button">
                        Hämta bonus!
                    </button>
                </a>
            </td>
        </tr>
    </table>
</div>