<?php

$args = array(
    'category_name'    => 'Drag Gallery'
);

?>
<div class="">
<?php
    $posts = get_posts($args);

    $catg = '<h2>'.get_cat_name(5).'</h2>';
    $descpCatg = '<h4>'.category_description(5).'</h4>';

foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
        <article class="">
            <div class="col-md-6 col-sm-6">
                <?php the_post_thumbnail() ?>
            </div>
            <div class="col-md-6 col-sm-6">
                <?php
                    echo $catg;
                    echo $descpCatg;
                ?>

                <?php the_content(); ?>
                <button type="button" name="button" class="details">Views Details</button>
                <button type="button" name="button" class="website">Vist Website</button>
            </div>
        </article>
    <?php
}
