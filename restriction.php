<?php
session_start();

if(isset($_SESSION['LOGIN'])){
	header("location:admin/");
	die;
	}

else if(isset($_SESSION['SUPER_LOGIN'])){
	header("location:super_admin/");
	die;
	}