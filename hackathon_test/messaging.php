<?php

	$connection_string = mysqli_connect("localhost","root","richard","hackathon_db");
	$use_db = "";

	if($connection_string)
	{
		
		
		
		if(isset($_POST['SEND_MESSAGE']))
			{	$message = $_POST['message'];
				$insert = "insert into tblconversation(userID,lawyerID,message,timestamp) values ('1','1','$message',now())";
				
				if(mysqli_query($connection_string,$insert))
				{
					$qry = "select * from tblconversation where userid = '1' and lawyerID = '1' order by timestamp desc";
					$searchResult = mysqli_query($connection_string,$qry);
					
							while($row = mysqli_fetch_assoc($searchResult))
							{
								$user_id = $row['userID'];
								$lawyer_id = $row['lawyerID'];
								$message = $row['message'];
								$timestamp = $row['timestamp'];
								
								echo "<table align = 'center'>
										<tr>
											<td>User Id</td><td>$user_id</td>
										</tr>
										<tr>
										<td>Lawyer ID </td><td>$lawyer_id</td>
										</tr>
										<tr>
										<td>Message </td><td>$message</td>
										</tr>
										<td>Time Send </td><td>$timestamp</td>
										</tr>
								      </table><br><br>"
									  ;
							}
					
					
					
				?>	
				<html>
					<form action = '' method = 'POST'>
						<table>
							<tr>
							<td><textarea name = 'message' colspan = '2'></textarea></td>
							</tr>
							<tr>
							<td>
							<input type = 'submit' value = 'SEND' name = 'SEND_MESSAGE'>
							</td>
							</tr>
						</table>
					</form>
				</html>
				<?php
				}
				else
				{
					echo "".mysqli_error($connection_string);
				}
			}
			else
			{	?>
				<?php
					//$qry = "select * from tblconversation where userid = '1' and lawyerID = '1' orderby timestamp desc";
					
					?>
				<html>
					<form action = '' method = 'POST'>
						<table>
							<tr>
							<td><textarea name = 'message' colspan = '2'></textarea></td>
							</tr>
							<tr>
							<td>
							<input type = 'submit' value = 'SEND' name = 'SEND_MESSAGE'>
							</td>
							</tr>
						</table>
					</form>
				</html>
				
				
		<?php
			}
		?>
		
		
		
<?php		
	
?>


<?php
	}else
	{
		echo "".mysqli_error($connection_string);
	}
?>