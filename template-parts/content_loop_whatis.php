
<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
        <article class="col-md-4 col-sm-6">

            <?php the_post_thumbnail() ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </article>
        <?php };?>
