
<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
        <article class="">
            <div class="col-md-12 col-sm-12">
                <?php the_content(); ?>

            </div>
        </article>
        <?php };?>
