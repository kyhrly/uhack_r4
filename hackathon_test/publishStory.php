<?php

	$connection_string = mysqli_connect("localhost","root","richard","hackathon_db");

	
	if(isset($_POST['Publish']))
	{	

	$story = $_POST['story'];
	$title = $_POST['title'];
	$user_id = $_POST['user_id'];
	
	$sql_insert = "insert into tblpublish(userID,publishTitle,publishDescription,timestamp) values
	                                     ('$user_id','$title','$story',now())";
										 
	if(mysqli_query($connection_string,$sql_insert))
	{
		
		?>
			
	
		<html>

	<title> Publish Your Story </title>
	
	<center>
	
	<form action = '' method = 'POST'>
		<input type = 'text' name = 'title' placeholder = 'Enter a Title For Your Story'><br>
		<textarea name = 'story' rows = '20' cols = '60' placeholder='Enter your story here'>
		</textarea>
		<br/>
		<input type = 'hidden' name = 'user_id' value = 'user_id'> <!-- dito un user id -->
		<input type = 'submit' value = 'Submit' name = 'submit'>
	</form>
	<form action = 'viewStories.php' method = 'POST'>
		<input type = 'hidden' name = 'user_id' value = 'user_id'> <!-- dito un user id -->
		<input type = 'submit' value = 'View Stories Page'>
	</form>
		<form action = '' method = 'POST'> <!-- pabalik sa pinanggalingan !-->
		<input type = 'hidden' name = 'user_id' value = 'user_id'> <!-- dito un user id -->
		<input type = 'submit' value = 'Back to Main'>
	</form>
	</center>

	</html>
	<?php echo "<center>The story will be published after the admin has reviewed your statements</center>" ?>
	
	
	<?php
	}
	else
	{
		echo "".mysqli_error($connection_string);
	}
}
else
{
	?>
	
	
	<html>

	<title> Publish Your Story </title>
	
	<center>
	
	<form action = '' method = 'POST'>
		<input type = 'text' name = 'title' placeholder = 'Enter a Title For Your Story'>
		<br>
		<textarea name = 'story' rows = '20' cols = '60' placeholder='Enter your story here'>
		</textarea>
		<br/>
		<input type = 'hidden' name = 'user_id' value = 'user_id'><!-- dito un user id -->
		<input type = 'submit' value = 'Submit' name = 'Publish'>
	</form>
	
	</center>

</html>

	<?php
	
	}



?>
