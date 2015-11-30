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
<?php $posts = get_and_sort_by( 'req' ); ?>
<?php if( $posts ): ?>

    <div id="bonus-table-rows">
        <button class="sort" data-sort="req">
            Sort by req
        </button>
        <button class="sort" data-sort="minodds">
            Sort by minodds
        </button>
        <ul class="list">

        <?php foreach( $posts as $post ):
            if ( $post ) :
                setup_postdata( $post ); ?>
                <li>
                    <?php get_template_part( 'parts/bonus-table-row' );?>
                </li>
            <?php endif;
        endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
