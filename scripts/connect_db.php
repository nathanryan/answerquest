<?php 

$db_host = "mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/";
// Place the username for the MySQL database here
$db_username = "adminv2p79rR"; 
// Place the password for the MySQL database here
$db_pass = "bMlyIkEbj4GU"; 
// Place the name for the MySQL database here
$db_name = "answerquest";

// Run the connection here 
mysql_connect("$db_host","$db_username","$db_pass") or die (mysql_error());
mysql_select_db("$db_name") or die ("no database");

?>