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
        
    </head>
    
    <body>

        <!-- header starts here -->
        <div id="header">
        
            <!-- display logo and maybe name -->
            <a href="<?php echo get_option('home'); ?>">
                <img id="logo" src="<?php bloginfo('template_directory'); ?>/images/mylogo3.png" alt="Pierre D."><h1>Pierre D.</h1>
            </a>
            <!-- logo ends -->
            
            <!-- nav div starts here -->
            <div id="navigation">
            
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation',)); ?>
                
            </div>
            <!-- nave div ends here -->
            
        </div>
        <!-- header ends here -->
        
        <!-- main content starts here -->
        <div id="container">
        
            