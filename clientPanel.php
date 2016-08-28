<?php include ('HEADER.php'); 

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
<div class="container ">

<div class="col-md-4 panel">
	<form action = '' method = 'POST'>
		<textarea class="form-control" rows = '4' cols = '50' name = 'comment' placeholder = 'Enter you Post Here'></textarea>
		<select class="form-control" name = 'specialization' style="margin-top:10px;">
		<option value = 'Administrative'>Administrative</option>
		<option value = 'Civil Litigation'>Civil Litigation</option>
		<option value = 'Constitutional Law'>Constitutional Law</option>
		<option value = 'Corporate and Commercial Law'>Corporate and Commercial Law</option>
		<option value = 'Environmental Law'>Environmental Law</option>
		<option value = 'Family Law'>Family Law</option>
		<option value = 'Immigration Law'>Immigration Law</option>
		<option value = 'Intellectual Property Law'>Intellectual Property Law</option>
		<option value = 'International Law'>International Law</option>
		<option value = 'Labour And Employment Law'>Labour And Employment Law</option>
		</select>
		<input style="margin-top:10px;" type = 'hidden' required="" value = '//kylepalagaydito un value ng id' name = 'client_id'>
		<input style="margin-top:10px;" class="btn btn-default" type = 'submit' value = 'POST' name = 'submit'>
	</form>
</div>


<div class="col-md-6 col-md-offset-1 ">
<form action="" method="POST">
<h4>PREVIOUS POSTS</h4>
	<?php 
	$getUserPosts = mysqli_query($conn, " SELECT * FROM tblpost WHERE userID LIKE '$_SESSION[userID]'  ");
	while($row = mysqli_fetch_assoc($getUserPosts))
	{
	?>
		<div class="panel">
			<?php echo $row['postDescription'] ."<br>" .$row['postTimeStamp']; ?> <button class="btn btn-default" type = 'submit' value = '<?php echo $row['postID']; ?>' name = 'view'> View</button>
			<hr>
			<div>
				<?php 
				$getBiddings = mysqli_query($conn, "SELECT * FROM tblbidding JOIN tbllawyer USING (lawyerID) WHERE postID = '$row[postID]' " );
				while($row2 = mysqli_fetch_assoc($getBiddings))
				{
				?>
				<div>
					<button class="btn btn-default" type="submit" value="<?php echo $row2['lawyerID']; ?>" name="viewProfile"><?php echo $row2['lawyerLastName'] .", " .$row2['lawyerFirstName'] ." " .$row2['lawyerMiddleName']; ?></button> <i class="glyphicon glyphicon-uploads"></i> Cases Won : <b><?php echo $row2['casesWon']; ?></b> <br> 
					<?php echo $row2['bidMessage']; ?> <br>
					<?php echo $row2['bidTime']; ?>
				</div>
				<br>
				<?php
				}
				?>
			</div>
		</div>

			
		<br>
		<hr>
	<?php
	}
	?>
</form>
</div>
</div>
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

	if(isset($_POST['view']))
	{
		$_SESSION['postID'] = $_POST['view']; 	
		//echo $_SESSION['postID'];
		header('Location: clientSingleFile.php');
	}
	if(isset($_POST['viewProfile']))
	{
		$_SESSION['viewProfile'] = $_POST['viewProfile'];
		header('Location: lawyerProfile.php');
	}

?>