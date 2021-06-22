<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
?>

<form method="post" id="category"> 
Category:
  <select name="category" id="category">
    <option disabled selected>-- Select Category --</option>
    <?php
        include("includes/connection.php");  // Using database connection file here
        $records = mysqli_query($connect, "SELECT DISTINCT bookCategory From tbl_books order by bookCategory asc;");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['bookCategory'] ."'>" .$data['bookCategory'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
        <input type="submit" name="Submit" value="Select Category" />  
</form>  




					<!--Admin -->
					<div class="box-content"  id="printablediv">

						<table class="table table-striped table-bordered">
						  <thead>
							  <tr>
								  <th>Class</th>
								  <th>Title</th>
								  <th>Author</th>
                                  <th>Category</th>
                                  <th>Accession No</th>
                                  <th>No of Copies</th>
							  </tr>
						  </thead>
						  <tbody>
							<?php
								include("includes/connection.php");

								if(isset($_POST["Submit"]))
								//changed single quote to double quote
								{
								   $getCategory=$_POST['category']	?? "";	

							   

								$sql = "SELECT *  FROM tbl_books WHERE bookCategory= '$getCategory'";
								$result=mysqli_query($connect, $sql); //rs.open sql,con

											while ($row=mysqli_fetch_array($result))
											{

												?><!--open of while -->
											<tr>
												<td><?php echo $row['Class']; ?></td>
												<td><?php echo $row['bookTitle']; ?></td>
												<td><?php echo $row['bookAuthor']?></td>
												<td><?php echo $row['bookCategory']?></td>
												<td><?php echo $row['AccessionNumber']?></td>
												<td><?php echo 1 ?></td>

											
											</tr>
											<?php
											} 
												//no results found
												//close of while
									}

							?>
						  </tbody>
					  </table>
					</div>
					<!--End Admin -->
					
					<button class="btn btn-primary" onclick="printDiv('printablediv')">Print</button>

						




						</div><!--/row-->

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


   
<?php
	get_footer();
?>