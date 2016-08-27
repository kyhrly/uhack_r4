<?php include ('HEADER.php'); ?>
<?php 
	if(isset($_SESSION['usertype'])==false)
		header("location:index.php");
	
?>

<form action = '' method = 'POST'>
	<table>
		<tr>
		<td>Input your comment</td><td><textarea rows = '4' cols = '50' name = 'comment' placeholder = 'Enter you Post Here'></textarea></td></tr>
		<tr><td></td><td><select name = 'specialization'>
		<option value = 'Administrative'>Administrative</option>
		<option value = 'Civil Litigation'>Civil Litigation</option>
		<option value = 'Constitutional Law'>Constitutional Law</option>
		<option value = 'Corporate and Commercial Law'>Corporate and Commercial Law</option>
		<option value = 'Environmental Law'>Environmental Law</option>
		<option value = 'Family Law'>Family Law</option>
		<option value = 'Immigration Law'>Immigration Law</option>
		<option value = 'Intellectual Property Law'>Intellectual Property Law</option>
		<option value = 'International Law'>International Law</option>
		<option value = 'Labour And Employment Law'>International Law</option>
		<option value = 'International Law'>International Law</option>
		</select>
		<input type = 'hidden' required="" value = '//kylepalagaydito un value ng id' name = 'client_id'>
		<tr><td></td><td><input type = 'submit' value = 'POST' name = 'submit'></td>
		</td>
		</tr>
	</table>
</form>

<form action="clientSingleFile.php" method="POST">
PREVIOUS POSTS
	<?php 
	$getUserPosts = mysqli_query($conn, " SELECT * FROM tblpost WHERE userID LIKE '$_SESSION[userID]'  ");
	while($row = mysqli_fetch_assoc($getUserPosts))
	{
	?>
		<div>
			<?php echo $row['postDescription'] ."<br>" .$row['postTimeStamp']; ?>
		</div>
			<input type = 'submit' value = 'VIEW' name = 'submit'>
			<input type = 'hidden' value = '<?php echo $row['postID']; ?>' name = 'client_id'>
		<br>
		<hr>
	<?php
	}
	?>
</form>

<?php 

	if(isset($_POST['submit']))
	{
		//$
		$comment = $_POST['comment'];
		$specialization = $_POST['specialization'];
		// kyle palagay dito un value ng user_id
		$user_id = $_SESSION['userID'];
		//$date = "now()";

		$insert = "insert into tblpost(userID,postDescription,postTimeStamp,postSpecialization)
		                 values ($user_id,'$comment',now(),'$specialization')";
		mysqli_query($conn,$insert);
		header("Refresh:0");

	}


?>