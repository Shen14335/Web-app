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
								  <th>ISBN</th>
								  <th>Book Title</th>
								  <th>Book Category</th>
								  <th>Book Author</th>
								  <th>Availability</th>
							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								$sql = "SELECT COUNT(id) as total_available, bookTitle, bookIsbn,bookCategory,bookAuthor,book_status  FROM tbl_books where book_status = 'Available' GROUP BY bookTitle ORDER BY id";
								$result=mysqli_query($connect, $sql); //rs.open sql,con

							while ($row=mysqli_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['bookIsbn']; ?></td>
								<td><?php echo $row['bookTitle']; ?></td>
								<td><?php echo $row['bookCategory']; ?></td>
                                <td><?php echo $row['bookAuthor']; ?></td>
								<td><?php echo $row['total_available'].' Available'; ?></td>
							</tr>
							<?php
							   } //close of while
							?>
						  </tbody>
					  </table>
					</div>
					<!--End Admin -->

				</div>
				<a class="btn btn-primary" href="add_new_book.php">Add</a> <a class="btn btn-success" href="view_all_books.php">Booklist</a>
				
				
				

			</div>
			<!--/row-->


<?php
	get_footer();
?>
