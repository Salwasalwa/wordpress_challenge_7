<?php

foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
        <article class="col-md-6 col-sm-6 credits">
            <div class="">
                <i class="fa fa-desktop" aria-hidden="true"></i>
            </div>

            <div>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
        </article>
    <?php
}
