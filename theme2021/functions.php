<?php


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


		wp_register_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), false, 'all' );
		wp_enqueue_style('bootstrap');


		wp_register_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), false, 'all' );
		wp_enqueue_style('font-awesome');

        
		wp_register_style('main', get_template_directory_uri() . '/css/main.css', array('bootstrap'), false, 'all' );
		wp_enqueue_style('main');


	
}
add_action ('wp_enqueue_scripts', 'load_css');


// Load Javascript
function load_js()
{	
		wp_enqueue_script('jquery');

		wp_register_script('popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1', true);
		wp_enqueue_script('popper');

		wp_register_script('bootstrapjs', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '1', true);
		wp_enqueue_script('bootstrapjs');


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

								'name' => 'Page Sidebar',
								'id' => 'page-sidebar',
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