<?php

function example_form () {

    $content = '';
    $content .='<form method="post" action="http://tech999.epizy.com/thank-you/">';
    $content .='<h2>Contact Us!</h2>';
    $content .='<label for="your_name">Name:</label>';
    $content .='<input type="text" name="your_name" class="form-control" placeholder="Enter your name" />';
    $content .='<label for="your_email">Email:</label>';
    $content .='<input type="email" name="your_email" class="form-control" placeholder="Enter your email" /><br /><br />';
    $content .='<input type="submit" name="btn_submit" class="btn btn-md btn-primary" value="Submit" />';
    $content .='</form>';

    return $content;
}

add_shortcode('ex_form','example_form');

function theme_supporting() {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','theme_supporting');



// Load Stylesheets
function load_css()
{
        wp_register_style('w3c', "https://www.w3schools.com/w3css/4/w3.css", array(), false, 'all' );
		wp_enqueue_style('w3c');
        wp_register_style('font-lato', "https://fonts.googleapis.com/css?family=Lato", array(), false, 'all' );
		wp_enqueue_style('font-lato');
		wp_register_style('font-montserrat', "https://fonts.googleapis.com/css?family=Montserrat", array(), false, 'all' );
		wp_enqueue_style('font-montserrat');


		wp_register_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), false, 'all' );
		wp_enqueue_style('font-awesome');

        
		wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
		wp_enqueue_style('main');


	
}
add_action ('wp_enqueue_scripts', 'load_css');


// Load Javascript
function load_js()
{	
		wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery.js');
        wp_enqueue_script('my-js', get_template_directory_uri().'/js/script.js', array('jquery'), '', false);


		wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/main.js', array(),'1', true);
		

}
add_action('wp_enqueue_scripts', 'load_js');

function include_jquery () {
    wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js",array(),'3.4.1',true);
    add_action('wp_enqueue_scripts','jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');


// Load Javascript


	
	

/* Theme Options */


// Menus
register_nav_menus(

		array(

			'top-menu' => 'Top Menu Location',
			'mobile-menu' => 'Mobile Menu Location',
			'footer-menu' => 'Footer Menu Location',
        )
);


// Custom Image Sizes
add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 300, 200, true);

// Register Sidebars
function my_sidebars()
{


			register_sidebar(

						array(

								'name' => 'Footer Widget Area',
								'id' => 'footer-widgets',
								'before_title' => '<h3 class="widget-title">',
								'after_title' => '</h3>'

						)

			);


			register_sidebar(

						array(

								'name' => 'Blog Sidebar',
								'id' => 'blog-sidebar',
								'before_title' => '<h3 class="widget-title">',
								'after_title' => '</h3>'

						)

			);



}
add_action('widgets_init','my_sidebars');
?>
