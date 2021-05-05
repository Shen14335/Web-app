<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
?>

<form method="post"> 
Category:
  <select name="category" id="category">
    <option disabled>-- Select Category --</option>
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

<?php
 if(isset($_POST['Submit']))
 {
    $getCategory=$_POST['category'];
    echo $getCategory;
}
?>
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

								$sql = "SELECT *  FROM tbl_books WHERE bookCategory= '$getCategory'";
								$result=mysqli_query($connect, $sql); //rs.open sql,con

							while ($row=mysqli_fetch_array($result))
							{ ?><!--open of while -->
							<tr>
								<td><?php echo $row['Class']; ?></td>
								<td><?php echo $row['bookTitle']; ?></td>
								<td><?php echo $row['bookAuthor']?></td>
                                <td><?php echo $row['bookCategory']?></td>
								<td><?php echo $row['AccessionNumber']?></td>
                                <td><?php echo 1 ?></td>

							
							</tr>
							<?php
							   } //close of while
							?>
						  </tbody>
					  </table>
					</div>
					<!--End Admin -->

   
<?php
	get_footer();
?>