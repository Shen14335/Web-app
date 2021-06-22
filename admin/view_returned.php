<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
?>


<button class="btn btn-primary" onclick="exportTableToCSV('returned.csv')" style="margin-bottom:1em" >Export CSV</button>
					
<button class="btn btn-primary" onclick="printDiv('printablediv')" style="margin-bottom:1em">Print</button>
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
					<div class="box-content" id="printablediv">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Book Title</th>
								  <th>Borrower ID</th>
								  <th>Borrower</th>
								  <th>Date Borrowed</th>
								  <th>Date Returned</th>
							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								$sql = "SELECT borrowed_books.id as main_id, borrowers.id as bor_id, tbl_books.bookTitle as booktitle,borrowers.preid as preid, borrowers.fname as fname, borrowers.lname as lname, borrowed_books.return_date as return_date, borrowed_books.borrowed_date as borrowed_date, borrowed_books.due_date as due_date, borrowed_books.return_date as return_date 
								FROM borrowed_books 
                                join tbl_books on borrowed_books.book_id = tbl_books.id
                                join borrowers on borrowed_books.borrower_id = borrowers.preid
								where return_date != 'NULL'
                                ORDER BY tbl_books.id";
								$result=mysqli_query($connect, $sql); //rs.open sql,con

							while ($row=mysqli_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['booktitle']; ?></td>
								<td><?php echo $row['preid']; ?></td>
								<td><?php echo $row['fname'].' '.$row['lname'] ; ?></td>
                                <td><?php echo $row['borrowed_date']; ?></td>
								<td><?php echo $row['return_date']; ?></td>
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
<?php
	get_footer();
?>
