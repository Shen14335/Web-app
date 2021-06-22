<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
?>
	
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Books</h2>

						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<!--Admin -->
					<div class="box-content">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Accession Number</th>
								  <th>Date Received</th>
								  <th>Class</th>
								  <th>Author</th>
                                  <th>Title</th>
                                  <th>Edition</th>
                                  <th>Volumes</th>
                                  <th>Pages</th>
                                  <th>Source of Fund</th>
                                  <th>Cost Price</th>
                                  <th>Pulisher</th>
                                  <th>Year</th>
								  <th>Availability</th>
                                  <th>Remarks</th>
                                  <th>Action</th>
							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								$sql = "SELECT *  FROM tbl_books ORDER BY id asc";
								$result=mysqli_query($connect, $sql); //rs.open sql,con

							while ($row=mysqli_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['AccessionNumber']; ?></td>
								<td><?php echo $row['DateRecieved']; ?></td>
                                <td><?php echo $row['Class']; ?></td>
								<td><?php echo $row['bookAuthor']?></td>
								<td><?php echo $row['bookTitle']?></td>
								<td><?php echo $row['Edition']?></td>
								<td><?php echo $row['Volume']?></td>
								<td><?php echo $row['Pages']?></td>
								<td><?php echo $row['SourceOfFund']?></td>
								<td><?php echo $row['CostPrice']?></td>
								<td><?php echo $row['pubisherID']?></td>
								<td><?php echo $row['YearBook']?></td>
								<td><?php echo $row['book_status']?></td>
								<td><?php echo $row['Remarks']?></td>
								<td class="center">
									<a class="btn btn-info" href="edit_book.php?bID=<?php echo $row['id']; ?>">
										Update
									</a>
									<a class="btn btn-success" href="borrow_book.php?bID=<?php echo $row['id']; ?>">
									Borrow
									</a>
									<a class="btn btn-danger" onclick="return confirmDel()" href="delete_book.php?delID=<?php echo $row['id'];?>">
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
				<a class="btn btn-primary" href="add_new_book.php">Add</a> <a class="btn btn-success" href="view_book.php">View</a>
				
				
				

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