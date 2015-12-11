<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 2015-12-11
 * Time: 21:58
 */

if( ! function_exists( 'new_excerpt_more' ) ){
    function new_excerpt_more( $more ) {
        return ' . . .<a href="' . get_permalink( get_the_ID() ) . '">' . ' <i class="fa fa-caret-right"></i></a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');
}