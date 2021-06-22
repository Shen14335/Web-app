<?php
  session_start();
  $id = $_SESSION['LOGIN'];
  if(!isset($_SESSION['LOGIN']))
  {
    header('location:login.php');
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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
---------------------------------------------------------------->
        <script type="text/javascript" src="dist/jautocalc.js"></script>
        <script type="text/javascript">
        <!--
            $(document).ready(function() {

                function autoCalcSetup() {
                    $('form[name=cart]').jAutoCalc('destroy');
                    $('form[name=cart] tr[name=line_items]').jAutoCalc({keyEventsFire: true, decimalPlaces: 2, emptyAsZero: true});
                    $('form[name=cart]').jAutoCalc({decimalPlaces: 2});
                }
                autoCalcSetup();


                $('button[name=remove]').click(function(e) {
                    e.preventDefault();

                    var form = $(this).parents('form')
                    $(this).parents('tr').remove();
                    autoCalcSetup();

                });

                $('button[name=add]').click(function(e) {
                    e.preventDefault();

                    var $table = $(this).parents('table');
                    var $top = $table.find('tr[name=line_items]').first();
                    var $new = $top.clone(true);

                    $new.jAutoCalc('destroy');
                    $new.insertBefore($top);
                    $new.find('input[type=text]').val('');
                    autoCalcSetup();

                });

            });
        //-->
        </script>


<----------------------------------------------------------------
				<script>
					function downloadCSV(csv, filename) {
						var csvFile;
						var downloadLink;

						// CSV file
						csvFile = new Blob([csv], {type: "text/csv"});

						// Download link
						downloadLink = document.createElement("a");

						// File name
						downloadLink.download = filename;

						// Create a link to the file
						downloadLink.href = window.URL.createObjectURL(csvFile);

						// Hide download link
						downloadLink.style.display = "none";

						// Add the link to DOM
						document.body.appendChild(downloadLink);

						// Click download link
						downloadLink.click();
					}
				</script>
---------------------------------------------------------------->
	<script>
		function exportTableToCSV(filename) {
			var csv = [];
			var rows = document.querySelectorAll("table tr");
			
			for (var i = 0; i < rows.length; i++) {
				var row = [], cols = rows[i].querySelectorAll("td, th");
				
				for (var j = 0; j < cols.length; j++) 
					row.push(cols[j].innerText);
				
				csv.push(row.join(","));        
			}

			// Download CSV file
			downloadCSV(csv.join("\n"), filename);
		}
	</script>
---------------------------------------------------------------->
								
<script>
	function printDiv(divID) {
		//Get the HTML of div
		var divElements = document.getElementById(divID).innerHTML;
		//Get the HTML of whole page
		var oldPage = document.body.innerHTML;
		//Reset the page's HTML with div's HTML only
		document.body.innerHTML = "<html><head><title></title></head><body>" + 	divElements + "</body>";
		//Print Page
		window.print();
		//Restore orignal HTML
		document.body.innerHTML = oldPage;
	}
</script>
---------------------------------------------------------------->
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
				<a class="brand" href="index.php" style="font-family: Cooper black"><span>IDS Library System </span></a>
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