<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
?>
	

<button class="btn btn-primary" onclick="exportTableToCSV('Borrowers.csv')" style="margin-bottom:1em" >Export CSV</button>	
<button class="btn btn-primary" onclick="printDiv('printablediv')" style="margin-bottom:1em">Print</button>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Borrowers</h2>

						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<!--Admin -->
					<div class="box-content" id="printablediv">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Borrower ID</th>
								  <th>Last Name</th>
								  <th>First Name</th>
								  <th>Middle Initial</th>
								  <th>Semester</th>
                                  <th>Course</th>
                                  <th>Year</th>
                                  <th>Contact #</th>
                                  <th>Address</th>
                                  <th>User Type</th>
							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								$sql = "SELECT *  FROM borrowers ORDER BY id asc";
								//sql query
								$result=mysqli_query($connect, $sql); //rs.open sql,con

							while ($row=mysqli_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['preid']; ?></td>
								<td><?php echo $row['lname']; ?></td>
                                <td><?php echo $row['fname']; ?></td>
								<td><?php echo $row['midint'] ?></td>
								<td><?php echo $row['semester']?></td>
								<td><?php echo $row['course']?></td>
								<td><?php echo $row['yns']?></td>
								<td><?php echo $row['contactNo']?></td>
								<td><?php echo $row['Address']?></td>
								<td><?php echo $row['utype']?></td>
							</tr>
							<?php
							   } //close of while
							?>
						  </tbody>
					  </table>
					</div>
					<!--End Admin -->

				</div>

`
			</div><!--/row-->

	<script src="js/jquery.ui.touch-punch.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/jquery.dataTables.min.js'></script>
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script> 
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<script src="js/jquery.chosen.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.cleditor.min.js"></script>
	<script src="js/jquery.noty.js"></script>
	<script src="js/jquery.elfinder.min.js"></script>
	<script src="js/jquery.raty.min.js"></script>
	<script src="js/jquery.iphone.toggle.js"></script>
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<script src="js/jquery.gritter.min.js"></script>
	<script src="js/jquery.imagesloaded.js"></script>
	<script src="js/jquery.masonry.min.js"></script>
	<script src="js/jquery.knob.modified.js"></script>
	<script src="js/jquery.sparkline.min.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/retina.js"></script>
	<script src="js/custom.js"></script>
	</body>
</html>