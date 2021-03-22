<?php 
global $wpdb;
$ndb= new wpdb('epiz_27737563','dBwY0IdTHGzW','epiz_27737563_w405','sql109.epizy.com');
$ndb->set_prefix('wpup_');
//$table_name="wpup_posts";
$table_name=$ndb->prefix.'posts';
$res=$ndb->get_row("SELECT * FROM $table_name WHERE id=1");
?>

<div><?php $id=$res->id;
$comment=$res->post_content;

echo $id;
echo $comment;

?></div>

