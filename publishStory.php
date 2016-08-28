<?php include ('HEADER.php'); ?>

<?php 

if(isset($_SESSION['usertype'])==false)
		header("location:index.php");


?>
<style>
body{
	color:white;
}
.panel{
	background: url('images/tile.png');
	padding:10px;
}
</style>

<div class=" panel col-md-5 col-md-offset-3">
<h4>Enter your story</h4>
<form action = '' method = 'POST'>
		<input class="form-control" type = 'text' name = 'title' placeholder = 'Enter a Title For Your Story'><br>
		<textarea class="form-control" name = 'story' rows = '10' cols = '30' placeholder='Enter your story here'>
		</textarea>
		<br/>
		
		<input class="btn btn-default" type = 'submit' value = 'Submit' name = 'Publish'>
</form>
</div>
	

<?php


	if(isset($_POST['Publish']))
	{	

		$story = $_POST['story'];
		$title = $_POST['title'];
		$user_id = $_SESSION['userID'];
		
		$sql_insert = "insert into tblpublish(userID,publishTitle,publishDescription,timestamp) values
		                                     ('$user_id','$title','$story',now())";
		mysqli_query($conn, $sql_insert);	
		header('Refresh:0');	                                  
	}

?>