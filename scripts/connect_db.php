<?php 

$db_host = "mysql7.000webhost.com";
// Place the username for the MySQL database here
$db_username = "a9684151_root"; 
// Place the password for the MySQL database here
$db_pass = "password123"; 
// Place the name for the MySQL database here
$db_name = "a9684151_mytest";

// Run the connection here 
mysql_connect("$db_host","$db_username","$db_pass") or die (mysql_error());
mysql_select_db("$db_name") or die ("no database");

?>