<!DOCTYPE html>
<html>
    
    <head>
        
        <meta charset="UTF-8">
        <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        
        <!-- style starts here -->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all">
        <link href="<?php bloginfo('template_directory'); ?>/flexslider.css" rel="stylesheet" type="text/css">
        <!-- style ends here -->
        
        <!-- start script -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/jquery.flexslider.js"></script>
        <!-- end script -->
        
        <!-- initialize flex -->
        <script type="text/javascript" charset="utf-8">
            $(window).load(function() {
                $('.flexslider').flexslider({ 
                    animation: "slide"
                });
            });
        </script>
        <!-- end flex -->
        
        <!-- wp header function -->
        <?php wp_head(); ?>
        <!-- end of wp header function -->
        
    </head>
    
    <body <?php body_class(); ?> >

        <!-- header starts here -->
        <div id="header">
        
            <!-- display logo and maybe name -->
            <a href="<?php echo get_option('home'); ?>">
                <img id="logo" src="<?php bloginfo('template_directory'); ?>/images/mylogo3.png" alt="Pierre D."><h1>Pierre D.</h1>
            </a>
            <!-- logo ends -->
            
            <!-- nav div starts here 
            <div id="navigation">
               	<ul id="navigation">
               	<li><a href="#">About</a></li>
               	<li><a href="#">Portfolio</a></li>
               	<li><a href="#">Blog</a></li>
               	<li><a href="#">Conact</a></li>
				</ul>
            </div>
            nave div ends here -->
            
            <!-- wp menu -->
            <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation') ); ?>
                
            <!-- <?php wp_nav_menu(); ?> -->
            <!-- end wp menu -->
            
            
        </div>
        <!-- header ends here -->
        
        <!-- main content starts here -->
        <div id="container">
        
            