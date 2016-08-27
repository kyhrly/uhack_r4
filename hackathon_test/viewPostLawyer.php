<?php
	
	$connection_string = mysqli_connect("localhost","root","richard","hackathon_db");
	$use_db = "";
	
	if($connection_string)
	{	
			$lawyer_id = 1; //$_POST['1'];
			
			$find_record = "select * from tbllawyer where lawyerID = '$lawyer_id'";
			$result = mysqli_query($connection_string,$find_record);
			$row = mysqli_fetch_assoc($result);
			
			//db_id = $row['lawyerID'];
			$db_last_Name = $row['lawyerLastName'];
			$db_first_Name = $row['lawyerFirstName'];
			$db_middle_name = $row['lawyerMiddleName'];
			$db_lawyer_specialization = $row['specialization'];
			
			$searchPost = "select * from tblpost where postSpecialization = '$db_lawyer_specialization' order by postID desc";
			$searchResult = mysqli_query($connection_string,$searchPost);
			if(mysqli_num_rows($searchResult) > 0)
			{
				while($row = mysqli_fetch_assoc($searchResult))
				{
					$post_id = $row['userID'];
					$name = "Anonymous";
					$post = $row['postDescription'];
					$time_set = $row['postTimeStamp'];
					
					echo "<table align = 'center'>
							<tr><td colspan = '2'>$name</td></tr>
							<tr><td></td><td>$post</td></tr>
							<tr><td colspan = '2'>$time_set</td></tr>
							<tr>
							<td colspan = '2'>
							<form action = 'singleViewPost.php' method = 'POST'>
							<input type = 'hidden' name = 'post_id' value = '$post_id'>
							<input type = 'submit' value = 'BID'>
							</form>
							</td>
							</tr>
						  </table>
						  <br><br>";
					
				}
			}
			else
			{
				echo "".mysqli_error($connection_string);
			}
			
			
	}
	else
	{
		echo "".mysqli_error($connection_string);
	}

?>