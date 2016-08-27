<?php

	$connection_string = mysqli_connect("localhost","root","richard","hackathon_db");
	$use_db = "";
	
	if($connection_string)
	{
		$post_id = $_POST['post_id'];
		//echo "$post_id";
		$get_post = "select * from tblpost where postID = '$post_id'";
		
		$result = mysqli_query($connection_string,$get_post);
		while($row = mysqli_fetch_assoc($result))
		{
		
		$user = "Anonymous";
		$post_desc = $row['postDescription'];
		$post_time_stamp = $row['postTimeStamp'];
		?>
		
		<table align = 'center'>
				<tr>
				<td>
				<?php echo $row['postDescription']; ;?>
				</td>
				</tr>
				<tr>
				<td>
				<font color = 'black'>$post_desc</font>
				</td>
				</tr>
				<tr>
				<td>
				$post_time_stamp
				</td>
				</tr>
		      </table>
		<?php
		}
	}	
	else
	{
		
	}
	
?>