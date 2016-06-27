<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title><?php bloginfo('name'); ?></title>
    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>


</head>
<body <?php body_class('main-body'); ?> >

<div id="nav" class="">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<!--                <a class="navbar-brand animated infinite pulse" href="--><?php //bloginfo('url'); ?><!--"><img class="logo" src="--><?php //bloginfo('template_directory'); ?><!--/img/logo.png" alt="" /></a>-->

                <?php #get_search_form() ?>

            </div>


            <?php
            wp_nav_menu( array(
                    'menu'              => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'navbar-collapse collapse',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
            );
            ?>




        </div><!-- /.container-fluid -->
    </nav>
</div><!-- #nav -->
