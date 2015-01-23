<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/library/css/main.css">
        <script src="<?php bloginfo("template_url"); ?>/library/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="container">

            <header>

                <nav id="main">

                    <a id="nav-bars" href="javascript:void(0);">
                        
                        <div class="nav-bar"></div>
                        <div class="nav-bar"></div>
                        <div class="nav-bar"></div>
                    
                    </a>

                    <div id="nav-item-container">

                        <?php 
                            
                            //get nav item data
                            $nav = wp_get_nav_menu_items( "site-menu"); 
                        
                            // loop through nav item data and create the nav
                            $nav_item_index = 0;
                    
                        ?>

                        <?php foreach($nav as $nav_item): ?>

                            <!-- on load first item should be set to active -->
                            <a href="<?php echo $nav_item->url; ?>" 
                                class="<?php echo $nav_item_index == 0 ?  'nav-home-active ' : ''; ?>btn-nav-home" 
                                data-nav-id="<?php echo $nav_item->object_id; ?>">

                                <?php echo $nav_item->title; ?>

                            </a>

                            <?php $nav_item_index++; ?>

                        <?php endforeach; ?>

                    </div>

                </nav>
            
            </header>

            <div id="content" class="clearfix">