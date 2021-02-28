<?php 
global $wpdb;
$table _name=$wpdb->prefix. 'posts';
$res=$wpdb->get_row("SELECT * FROM $table_name WHERE id=1");
?>

<div><?php $id=$res->id;
$comment=$res->post_content;

echo $id;
echo $comment;
?></div>