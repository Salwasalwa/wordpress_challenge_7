<?php get_header(); ?>

<main>
    <div class="container">
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

        <div class="dragGallery">
            <div class="row">
                <?php get_template_part( 'template-parts/content_loop_dragGallery'); ?>
                </div>
            </div>

        </div>

        <div class="fontAwesomeGlyphicon">
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


        <div class="screenApp">
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
                    get_template_part( 'template-parts/content_loop_sreen'); ?>
                </div>
            </div>

        </div>

        <div class="getLiveUpdates">
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

        <div class="credit">
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
        <div class="downloadFree">
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

        <div class="contact">
            <h2>Contact Us</h2>
            <p class="subtitle">Lorem ipsum dolor sit amet.</p>
            <section class="row">
                <form class="col-md-8 col-sm-6" action="index.html" method="post">
                    <p><label for="">Your Name</label></p>
                    <input type="text" name="" value="" placeholder="Entre Name">
                    <p><label for="">Your Email</label></p>
                    <input type="text" name="" value="" placeholder="Entre Email">
                    <p><label for="">Message</label></p>
                    <textarea name="name" rows="8" cols="50"></textarea>
                    <p><button type="button" name="button">Submit</button></p>
                </form>
                <article class="col-md-4 col-sm-6">
                    <h3>Office Locatiob</h3>
                    <div class="">
                        <p>Lorem ipsum</p>
                        <p>Lorem ipsum</p>
                        <p>Lorem ipsum</p>
                        <p>Lorem ipsum</p>
                    </div>
                    <h3>Social</h3>
                    <ul id="social_nav">
                        <li>
                            <a href="#" target="blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" target="blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" target="blank"><i class="fa fa-google-plus-official"></i></a>
                        </li>
                        <li>
                            <a href="#" target="blank"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li>
                    </ul>
                </article>
            </section>
        </div>
    </div>
</main>

<?php get_footer();?>
