<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flatfy</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/bootstrap/dist/css/bootstrap.min.css';?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/bootstrap/dist/css/bootstrap-theme.min.css';?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/static/external/font-awesome/css/font-awesome.min.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>" >
        <?php wp_head(); ?>
    </head>
    <body>

        <header>
            <div class="container">
                <div class="flatfy">
                    <h1>Flatfy</h1>
                    <p>Clean & minimal Theme</p>
                    <button type="button" name="button" class="">Twitter</button>
                    <button type="button" name="button" class="">Free Download</button>
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri() . '/static/img/circle.png';?>" alt="img">
                    </figure>
                </div>

                <?php require_once('wp-bootstrap-navwalker.php'); ?>


                <div class="nav_menu navbar navbar-default">
                    <div class="col-lg-3 col-md-3 col-sm-2 col-xs-6">
                        <p>Flatfy</p>
                    </div>
                    <nav class="col-lg-9 col-md-9 col-sm-10 col-xs-6">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                <a class="navbar-brand" href="#"><img src="./static/img/brand-white.png" alt=""></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <?php
                            $args = array (
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                'menu_class' => 'nav navbar-nav',
                                'menu' => 'navbar_header',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker());

                                wp_nav_menu($args)
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
