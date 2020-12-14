<?php
/**
 * Plugin Name: My Plugin
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://www.mywebsite.com
 */


function example_sc()
{
  $information = "This is basic plugin.";
  return $information;
}
add_shortcode('example','example_sc');
?>