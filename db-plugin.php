<?php 
/**
* Plugin Name: db plugin 
* Description: Plugin to create db table on activation
**/

include_once("DBP_db_file.php");

register_activation_hook(__FILE__,"DBP_tb_create");
?>