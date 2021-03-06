<?php

foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
        <article class="">
            <div class="col-md-6 col-sm-6">
                <?php the_content(); ?>
            </div>
            <div class="col-md-6 col-sm-6">
                <?php the_post_thumbnail() ?>
            </div>
        </article>
        <?php
}
