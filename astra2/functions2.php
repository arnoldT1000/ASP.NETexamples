<?php

function load_stylesheets()
{
	wp_register_style('stylesheet', get_template_directory_uri() .'/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('stylesheet');

	wp_register_style('style', get_template_directory_uri() .'/css/style.css', array(), false, 'all');
	wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{
	wp_deregister_script('jquery');
	wp_register_style('jquery', get_template_directory_uri() .'/js/jquery-3.6.0.min.js', '', 1, true);
	add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs()
{
	wp_register_style('customjs', get_template_directory_uri() .'/js/scripts.js', '', 1, true);
	wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(array('top-menu' => __('Top Menu', 'theme'),'footer-menu' => __('Footer Menu', 'theme')));