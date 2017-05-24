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
add_theme_support('post-thumbnails');

//
add_image_size('icon', 140, 140, true);
	
?>