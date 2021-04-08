<?php
date_default_timezone_set("Asia/Hong_Kong");
$username="root";
$password="";
$db="library_01";

$connect=mysql_connect("localhost",$username, $password);
$select_db=mysql_select_db($db,$connect);
if(!$select_db){
	echo "Can't connect to your database!";
	}