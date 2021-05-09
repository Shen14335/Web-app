<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
?>
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

								$sql = "SELECT *  FROM tbl_books ORDER BY id";
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
<?php
	get_footer();
?>