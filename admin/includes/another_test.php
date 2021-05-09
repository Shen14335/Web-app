
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
