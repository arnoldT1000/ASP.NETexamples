<?php 
global $wpdb;
$ndb= new wpdb('epiz_27737563','dBwY0IdTHGzW','epiz_27737563_w405','sql109.epizy.com');
$ndb->set_prefix('wpup_');
//$table_name="wpup_posts";
$table_name=$ndb->prefix.'test';
$res=$ndb->query("ALTER TABLE $table_name ADD img varchar(100)");


?>

<div><?php $id=$res->id;
$usr=$res->username;
$em=$res->email;
//$comment=$res->post_content;

//echo $id;

//echo $usr;
//echo $em;
//echo $comment;

?></div>

</div>

