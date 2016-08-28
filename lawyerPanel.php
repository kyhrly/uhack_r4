<?php include ('HEADER.php'); 
	if(isset($_SESSION['usertype'])==false)
		header("location:index.php");

?>

<style>
	.panel{
	background: url('images/tile.png');
	padding:10px;
}
</style>
<div class="col-md-5 col-md-offset-3">
<form action="" method="POST">
	<?php
	$getPostsForLawyer =  mysqli_query($conn, "SELECT * FROM tblpost JOIN tblusers USING (userID) WHERE postSpecialization LIKE '%$_SESSION[specialization]%' ORDER BY tblpost.postID ");
	while($row = mysqli_fetch_assoc($getPostsForLawyer))
	{
	?>
		<div class="panel">
			<b><?php echo $row['lastName'] .", " .$row['firstName'] ." " .$row['middleName']; ?><br></b>
			<?php echo $row['postDescription']; ?> <br>
			<?php echo $row['postTimeStamp']; ?><br>
			<br>
			<button class="btn btn-default" type="submit" value="<?php echo $row['postID']; ?>" name="bid">BID</button>
			<br>
				<?php 
				$getBiddings = mysqli_query($conn, "SELECT * FROM tblbidding JOIN tbllawyer USING (lawyerID) WHERE postID = '$row[postID]' " );
				while($row2 = mysqli_fetch_assoc($getBiddings))
				{
				?>
				<br>
				<div>
					<b><?php echo $row2['lawyerLastName'] .", " .$row2['lawyerFirstName'] ." " .$row2['lawyerMiddleName']; ?> <br> </b>
					<?php echo $row2['bidMessage']; ?> <br>
					<?php echo $row2['bidTime']; ?>
				</div>

				
				<?php
				}
				?>
		</div>
		
	<?php
	}
	?>
</form>
</div>

<?php

	if(isset($_POST['bid']))
	{	
		$_SESSION['postID'] = $_POST['bid'];
		header('Location: lawyerSingleFile.php');
	}


?>
