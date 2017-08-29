    <?php get_header(); ?>
    <main>
        <div class="whatis">
            <div class="row">
                <?php

                $args = array(
                    'posts_per_page'   => 6,
                    'category_name'    => 'What is?'
                );

                ?>
                <div class="">
                <?php
                    $posts = get_posts($args);

                    echo '<h2>'.get_cat_name(3).'</h2>';
                    echo '<h4>'.category_description(3).'</h4>';
                    get_template_part( 'template-parts/content_loop_whatis'); ?>
                </div>
            </div>

        </div>

        <div class="fullresponsive">
            <div class="row">
                <?php

                $args = array(
                    'category_name'    => 'Full Responsive'
                );

                ?>
                <div class="">
                <?php
                    $posts = get_posts($args);

                    echo '<h2>'.get_cat_name(4).'</h2>';
                    echo '<h4>'.category_description(4).'</h4>';
                    get_template_part( 'template-parts/content_loop_2col'); ?>
                </div>
            </div>
            <button type="button" name="button" class="details">Views Details</button>
            <button type="button" name="button" class="website">Vist Website</button>
        </div>

        <div class="DragGallery">
            <div class="row">
                <?php get_template_part( 'template-parts/content_loop_dragGallery'); ?>
                </div>
            </div>

        </div>

        <div class="FontAwesomeGlyphicon">
            <div class="row">
                <?php

                $args = array(
                    'category_name'    => 'Font Awesome & Glyphicon'
                );

                ?>
                <div class="">
                <?php
                    $posts = get_posts($args);

                    echo '<h2>'.get_cat_name(6).'</h2>';
                    echo '<h4>'.category_description(6).'</h4>';
                    get_template_part( 'template-parts/content_loop_2col'); ?>
                </div>
            </div>

        </div>


        <div class="ScreenApp">
            <div class="row">
                <?php

                $args = array(
                    'category_name'    => 'Screen App'
                );

                ?>
                <div class="">
                <?php
                    $posts = get_posts($args);

                    echo '<h2>'.get_cat_name(7).'</h2>';
                    echo '<h4>'.category_description(7).'</h4>';
                    get_template_part( 'template-parts/content_loop_whatis'); ?>
                </div>
            </div>

        </div>

        <div class="GetLiveUpdates">
            <div class="row">
                <?php

                $args = array(
                    'category_name'    => 'Get Live Updates'
                );

                ?>
                <div class="">
                <?php
                    $posts = get_posts($args);

                    echo '<h2>'.get_cat_name(8).'</h2>';
                    echo '<h4>'.category_description(8).'</h4>';
                    get_template_part( 'template-parts/content_loop_2col'); ?>
                    <button type="button" name="button">Subscribte to our Newsletter</button>
                </div>
            </div>

        </div>

        <div class="Credits">
            <div class="row">
                <?php

                $args = array(
                    'category_name'    => 'Credits'
                );

                ?>
                <div class="">
                <?php
                    $posts = get_posts($args);

                    echo '<h2>'.get_cat_name(9).'</h2>';
                    echo '<h4>'.category_description(9).'</h4>';
                    get_template_part( 'template-parts/content_loop_credits'); ?>
                </div>
            </div>

        </div>
        <div class="DownloadFree">
            <div class="row">
                <?php

                $args = array(
                    'category_name'    => 'Download Free'
                );

                ?>
                <div class="">
                <?php
                    $posts = get_posts($args);

                    echo '<h2>'.get_cat_name(10).'</h2>';
                    echo '<h4>'.category_description(10).'</h4>';
                    get_template_part( 'template-parts/content_loop_2col'); ?>
                    <button type="button" name="button">Pay With A tweet</button>
                </div>
            </div>

        </div>
    </main>

<?php get_footer();?>
