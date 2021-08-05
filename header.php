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
<?php

if ( is_page_template('templates/services.php') ){
    $page_type = 'services_page';
    $header_class = 'services_header';
    $sticky_class = 'services_sticky';
}
else {
    $header_class= 'home_header';
    $page_type = 'home_page';
    $sticky_class = '';
}

?>
<div id="preloader">
    <div class="preloader">
        <div class="position-center-center">
            <figure>
                <img src="<?php echo MBN_ASSETS_URI ?>/img/preloader.png" alt="" width="150">
            </figure>
            <div class="loading">
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        </div>
    </div>
</div>
<div id="wrapper"> 
    <header id="header" class="<?php //echo esc_attr($header_class); ?>" data-sticky-container data-toggler=".show-menu">
        <div class="hsnav-s5 sticky <?php //echo esc_attr($sticky_class); ?>" data-sticky data-options="marginTop:0">
            <div class="navbar">
                <div class="grid-container">
                    <a class="navlogo" href="<?php echo get_home_url(); ?>">
                        <figure>
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/ElleBe_logo.png" alt="">
                        </figure>
                        <span class="navtitle desktop_only">Be comfortable. Be confident.<br/>
                        Be beautiful. Be you.</span>
                    </a>
                    <span class="navicon hide-for-large" data-toggle="header">mobile menu</span>
                    <nav class="navmenu show-for-large">                        
                        <ul class="menu align-right dropdown" data-dropdown-menu data-smooth-scroll data-offset="500">
                            <li><a href="<?php echo home_url();?>">Home</a></li>
                            <li><a href="<?php echo home_url("/services/");?>">Services</a>
                                <ul>
                                    <li class="menu_item scroll_link"><a href="<?php echo home_url().'/services/#botox' ?>">Botox/Dysport</a></li>
                                    <li class="menu_item scroll_link"><a href="<?php echo home_url().'/services/#dermafiller';  ?>">Dermal filler (Juvederm/Restylane)</a></li>
                                    <li class="menu_item scroll_link"><a href="<?php echo home_url().'/services/#pdo'; ?>">PDO Thread Lift</a></li>
                                    <li class="menu_item scroll_link"><a href="<?php echo home_url().'/services/#prf'; ?>">PRF</a></li>
                                    <li class="menu_item scroll_link"><a href="<?php echo home_url().'/services/#kybella'; ?>">Kybella</a></li>
                                    <li class="menu_item scroll_link"><a href="<?php echo home_url().'/services/#microneedling';?>">Microneedling</a></li>
                                </ul>
                            </li>
                            <li class="menu_item"><a href="<?php echo esc_url('#contact');?>" data-smooth-scroll>Contact</a></li>
                            <li class="nav-cta"><a href="https://ellebe.myaestheticrecord.com/book/appointments" target="_blank" >SCHEDULE SERVICES</a></li>
                        </ul>
                    </nav>
                    <nav class="mobmenu hide-for-large">     
                         <ul class="menu">
                            <li class="menu_item"><a href="<?php echo home_url();?>">Home</a></li>
                            <li class="menu_item"><a href="<?php echo home_url(). '/services';?>">Services</a>
                                <ul class="submenu" data-offset="550">
                                    <li class="menu_item scroll_link" data-anchor="botox"><a href="<?php echo home_url().'/services/#botox' ?>">Botox/Dysport</a></li>
                                    <li class="menu_item scroll_link" data-anchor="dermafiller"><a href="<?php echo home_url().'/services/#dermafiller';  ?>">Dermal filler (Juvederm/Restylane)</a></li>
                                    <li class="menu_item scroll_link" data-anchor="pdo"><a href="<?php echo home_url().'/services/#pdo'; ?>">PDO Thread Lift</a></li>
                                    <li class="menu_item scroll_link" data-anchor="prf"><a href="<?php echo home_url().'/services/#prf'; ?>">PRF</a></li>
                                    <li class="menu_item scroll_link" data-anchor="kybella"><a href="<?php echo home_url().'/services/#kybella'; ?>">Kybella</a></li>
                                    <li class="menu_item scroll_link" data-anchor="microneedling"><a href="<?php echo home_url().'/services/#microneedling';?>">Microneedling</a></li>
                                    <li class="menu_item">
                                        <a href="https://ellebe.myaestheticrecord.com/book/appointments"  target="_blank" class="button primary"><?php echo esc_html('Schedule Services'); ?> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu_item scroll_link"><a href="<?php echo esc_url('#contact');?>">Contact</a></li>
                            <li class="menu_item nav-cta"><a href="tel:4806857380">(480) 685 7380</a></li>
                        </ul>
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