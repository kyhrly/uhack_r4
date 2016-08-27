<?php include ('HEADER.php'); 

	if(isset($_SESSION['usertype'])==false)
		header("location:index.php");		
?>



<form action="" method="POST">
	<?php
	$getSinglePost = "SELECT * FROM tblpost JOIN tblusers USING(userID) WHERE postID = '$_SESSION[postID]' ";
	$result = mysqli_query($conn,$getSinglePost);
	while($row = mysqli_fetch_assoc($result))
	{
	?>
		<?php echo $row['postID']; ?>
		<?php echo $row['lastName']; ;?>
		<?php echo $row['postDescription']; ;?>
		<br>
		<input type="text" name="bidMessage" placeholder="Bid">
		<br>
		<button type="submit" name="bidSingle">SUBMIT</button>
	<?php
	}	
	?>
</form>

	<?php
	$getBids = mysqli_query($conn, " SELECT * FROM tblbidding JOIN tbllawyer USING(lawyerID) WHERE postID LIKE '$_SESSION[postID]'  ");
	while($row = mysqli_fetch_assoc($getBids))
	{
	?>	
		<div>
			<?php echo $row['lawyerLastName'] .", " .$row['lawyerFirstName'] ." " .$row['lawyerMiddleName']; ?> : 
			<?php echo $row['bidMessage']; ?> <br>
			<?php echo $row['bidTime']; ?>
		</div>
		<hr>
	<?php
	}
	?>


<?php 

if(isset($_POST['bidSingle']))
{
	$bidMessage = $_POST['bidMessage'];
	mysqli_query($conn, " INSERT INTO tblbidding (postID, lawyerID, bidMessage) 
						VALUES ('$_SESSION[postID]','$_SESSION[userID]','$bidMessage')  ");

	header('Refresh: 0');
}

?>