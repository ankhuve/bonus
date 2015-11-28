<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 2015-10-05
 * Time: 00:10
 */

?>

<table class="bonus-table bonus-table-header">
    <thead>
    <tr>
        <th width="30"></th>
        <th width="120">Spelbolag</th>
        <th width="170">Bonus</th>
        <th width="100">Bonuskod</th>
        <th width="150">Omsättningskrav</th>
        <th width="100">Min odds</th>
        <th width="100"></th>
    </tr>
    </thead>
</table>

    <!-- get bonus list items -->
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'parts/bonus-table-row' ); ?>
    <?php endwhile; ?>
