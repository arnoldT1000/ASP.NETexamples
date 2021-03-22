<?php 
global $wpdb;
$ndb= new wpdb('epiz_27737563','dBwY0IdTHGzW','epiz_27737563_w405','sql109.epizy.com');
$ndb->set_prefix('wpup_');
//$table_name="wpup_posts";
$table_name=$ndb->prefix.'test2';
	$sql= "CREATE TABLE $table_name (id mediumint(9) NOT NULL AUTO_INCREMENT, PRIMARY KEY  (id));";
 
require_once (ABSPATH .'wp-admin/includes/upgrade.php');
dbDelta($sql);
//$res=$ndb->query("ALTER TABLE $table_name ADD img varchar(100)");


?>


