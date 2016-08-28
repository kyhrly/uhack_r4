<?php

	$user_id = $_POST['user_id'];
	$connection_string = mysqli_connect("localhost","root","richard","hackathon_db");
	$select = "select * from tblpublish where status = 'Active'";
	$result = mysqli_query($connection_string,$select);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$user_id = $row['userID'];
			$publishTitle = $row['publishTitle'];
			$publishDescription = $row['publishDescription'];
			$time_stamp = $row['timestamp'];
			
			echo "<table align = 'center'>
					<tr><td>Title : $publishTitle</td></tr>
					<tr><td colspan = '3' rowspan = '4'>$publishDescription</td></tr>
					<tr><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td></tr>
					<tr><td>Date Sent</td><td>$time_stamp</td></tr>
			      </table>";
		}
	}
	else
	{
		echo "No Stories have been approved yet or added";
	}
	

?>