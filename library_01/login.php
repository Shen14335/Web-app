<?php
include "include/dbconn.php";
if(isset($_POST['username']) && isset($_POST['password'])){

	$username=$_POST['username'];
	$password=$_POST['password'];


	$sql=mysqli_query($connect, "select * from admin");
	while($row = $sql->fetch_array()){
		if($row['username']==$username && $row['password']==$password){
			session_start();
			$_SESSION['LOGIN']=$row['id'];
			header("location:admin/index.php?id=".$row['id']."");
			die();
			}
		}

	header("location:index.php?error");

	}
