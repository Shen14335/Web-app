<?php
date_default_timezone_set("Asia/Hong_Kong");
$username="root";
$password="";
$db="library_01";

$mysqli=mysqli_connect("localhost", $username, $password);
//edited this line from mysql to mysqli because it shows 404 error
//user should not have access when viewing webpage of another user

$connect=mysqli_connect("localhost",$username, $password);
$select_db=mysqli_select_db($mysqli,$db);
//changed mysql to mysqli

if(!$select_db){
	echo "Can't connect to your database!";
	}