<?php 
global $wpdb;
$ndb= new wpdb('epiz_27737563','dBwY0IdTHGzW','epiz_27737563_w405','sql109.epizy.com');
$ndb->set_prefix('wpup_');
//$table_name="wpup_posts";
$table_name=$ndb->prefix.'test';
$res=$ndb->delete(
$table_name, 
array(
   "id"=2
)
);
?>







