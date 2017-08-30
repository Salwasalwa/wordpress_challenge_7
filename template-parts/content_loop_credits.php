<?php

foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    $icons = get_post_meta($post->ID, 'icon', true);
    ?>
        <article class="col-md-6 col-sm-6 credits">
            <div class="">

                <?php echo '<i class="fa '.$icons.'" aria-hidden="true"></i></div>'
                ?>

            <div>
                <h3><?php the_title();?></h3>
                <?php the_content(); ?>
            </div>
        </article>
    <?php
}
