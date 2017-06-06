<?php

/*
Theme Name: Final Demo Theme for Web 170 Spring 2017
Theme URI: https://github.com/adoboeater415/web170/tree/master/templates
Author: Pierre Dayag
Author URI: http;//pierredayag.com
Description: This is my Demo Theme for my Web 170 class in the Spring Quarter 2017
Version: 42.0
*/

// register menus
register_nav_menus(array('main-menu' => __('Main Menu'), 'footer-menu' => __('Footer Menu'),));
//

// this is needed for thumbnails to show up
add_theme_support('post-thumbnails');
//

// set thumbnail image dimen
add_image_size('icon', 140, 140, true);

// register sidebar
register_sidebars(2, array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));
register_sidebar(array('name' => __('cupcake', 'fruitloop')));
//

?>