<?php
  session_start();
  $id = $_SESSION['LOGIN'];
  if(!isset($_SESSION['LOGIN']))
  {
    header('location:../admin/logout.php');
    //finally found the code to set the default page when accessing from a different user priviledge
    //changed to logout.php as index.php just reloads the page, this is just to mess with the tinkerers
    //can't force the session to logout as session becomes active from somwhere, probably the logout.php
    //stuck with just refreshing the page, which should be enough to deter people tinkering with the system
    //finally made the code to make the system kill the session if user tries to access the system via URL, just had to set the session ID to both superlogin & login
  }
include "../include/dbconn.php";
$sql = "SELECT lname, fname, id FROM admin where id = $id";
            $result = $connect->query($sql);
            while($row = $result->fetch_assoc()){
              	$lname = $row['lname'];
				$fname = $row['fname'];
				$id = $row['id'];
    
            }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.:: Administrator Panel ::.</title>
	<script type="text/javascript">
	function confirmDel()
	{
		var x = confirm("Are you sure?");

		if (x==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function confirmAdd()
	{
		var a = confirm("Do you want to add this data?");

		if(a==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function confirmUpdate()
	{
		var b = confirm("Are you sure you want to update this data?");

		if(b==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function confirmUpdateAdmin()
	{
		var c = confirm("Are you sure you want to change password?");

		if(c==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/my_style.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="../../plugins/morris/morris.css">
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span> </span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">

						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo "Welcome  ".$lname.", ".$fname ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="edit_lib.php?uID=<?php echo $id; ?>"><i class="halflings-icon cog"></i> Profile</a></li>
								<li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
								
							  
							</ul>
						</li>
						<!-- end: User Dropdown -->
						
		
						
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->