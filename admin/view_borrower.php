<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_borrower();
?>

<button class="btn btn-primary" onclick="exportTableToCSV('Borrowers.csv')" style="margin-bottom:1em" >Export CSV</button>	
<button class="btn btn-primary" onclick="printDiv('printablediv')" style="margin-bottom:1em">Print</button>
<a class="btn btn-success" href="view_all_borrowers.php" style="margin-bottom:1em">Full Detail Borrower List</a>
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

						<table class="table table-striped table-bordered bootstrap-datatable datatable" >
						  <thead>
							  <tr>
							  	  <th>ID Number</th>
								  <th>Borrowers Name</th>
								  <th>User type</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								$sql = "SELECT * FROM borrowers ORDER BY lname";
								//$result -> query($sql);
								$result=mysqli_query($connect, $sql); //rs.open sql,con

									while ($row=mysqli_fetch_array($result))
										{ ?><!--open of while -->
											<tr>
												<td><?php echo $row['preid']; ?></td>
												<td><?php echo $row['lname'].",".$row['fname']; ?></td>
												<td><?php echo $row['utype']; ?></td>
												<td class="center">
													<a class="btn btn-info" alt="test" href="edit_data.php?uID=<?php echo $row['id']; ?>">
														<i class="halflings-icon white edit"></i>
													</a>
													<a class="btn btn-danger" onclick="return confirmDel()" href="delete_data.php?delID=<?php echo $row['id'];?>">
														<i class="halflings-icon white trash"></i>
													</a>
												</td>
											</tr>
									<?php
										} //close of while
									?>
							</tbody>
					  </table>
					</div>
							<!--End Admin -->
					</div>

			</div><!--/row-->


<!--/row-->
<?php
	get_footer();
?>
