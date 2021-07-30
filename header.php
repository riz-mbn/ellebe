<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="icon" type="image/png" href="<?php echo MBN_ASSETS_URI ?>/img/favicon.png"> -->
    <!-- <title><?php bloginfo('title') ?></title> -->

    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>

<div id="wrapper"> 
    <header id="header" data-sticky-container data-toggler=".show-menu">
        <div class="hsnav-s5 sticky" data-sticky data-options="marginTop:0">
            <div class="navbar">
                <div class="grid-container">
                    <a class="navlogo" href="<?php echo get_home_url(); ?>">
                        <figure>
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/ElleBe_logo.png" alt="">
                        </figure>
                    </a>
                    <span class="navicon hide-for-large" data-toggle="header">mobile menu</span>
                    <nav class="navmenu show-for-large">                        
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'main-menu',
                                'depth'          => 1,
                                'menu'         => '',
                                'container'    => 'ul',
                                'items_wrap' => '<ul class="menu align-right dropdown" data-dropdown-menu>%3$s</ul>' ,
                                'menu_class'   => 'menu align-right dropdown',
                            ));
                        ?>  
                    </nav>
                    <nav class="mobmenu hide-for-large">     
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'mobile-menu',
                                'menu'       => '',
                                'container'  => '',
                                'items_wrap' => '<ul class="menu">%3$s</ul>' 
                            ));
                        ?> 
                    </nav>
                </div>
            </div>
        </div>            
    </header>    
    <button class="btn_floating"><a class="button" href="https://ellebe.myaestheticrecord.com/book/appointments" target="_blank">Schedule Services</a></button>
    <button data-scroll="up" class="btn_scroll_up"><span>UP</span></button>
    <main id="content" class="content">
        <?php 
             //get_template_part( 'templates/page-head' );
        ?>