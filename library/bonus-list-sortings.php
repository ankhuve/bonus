<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 2015-11-29
 * Time: 20:19
 */

if ( ! function_exists( 'get_and_sort_by' ) ) {
    function get_and_sort_by( $sortby )
    {
        $args = array(
            'category' => 'spelbolag',
            'posts_per_page' => -1,
            'meta_key' => $sortby,
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        );

        $posts = get_posts( $args );

        return $posts;
    }
}