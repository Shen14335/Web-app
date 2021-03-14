<?php
session_start();
if(isset($_SESSION['LOGIN'])){
	header("location:admin/");
	die;
	}
