<?php
function DBP_tb_create() {

global $wpdb;

$DBP_tb_name=$wpdb->prefix .'dbp_tb_login';

$DBP_query="CREATE  TABLE wpgf_test1(id int(10) NOT NULL AUTO INCREMENT,
      user_name varchar (100) DEFAULT '',
      password varchar (100) DEFAULT '', 
      email varchar (100) DEFAULT '', 
      PRIMARY KEY (id)
)";

require_once(ABSPATH .'wp-admin/includes/upgrade.php');
dbDelta($DBP_query);

}