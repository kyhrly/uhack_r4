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
<div class="col-md-7 col-md-offset-1">

<form action="" method="POST">
	<?php
	$getSinglePost = "SELECT * FROM tblpost JOIN tblusers USING(userID) WHERE postID = '$_SESSION[postID]' ";
	$result = mysqli_query($conn,$getSinglePost);
	while($row = mysqli_fetch_assoc($result))
	{
	?>	
		<div class="panel">
			<?php echo $row['postID']; ?>
			<?php echo $row['lastName']; ;?>
			<?php echo $row['postDescription']; ;?>
			<br>
			<input class="form-control" style="margin-top:10px;" type="text" name="bidMessage" placeholder="Bid">
			<br>
			<button class="btn btn-default" type="submit" name="bidSingle">Submit Bidding</button>
		</div>
	<?php
	}	
	?>
</form>

	<?php
	$getBids = mysqli_query($conn, " SELECT * FROM tblbidding JOIN tbllawyer USING(lawyerID) WHERE postID LIKE '$_SESSION[postID]'  ");
	while($row = mysqli_fetch_assoc($getBids))
	{
	?>	
		<div class="panel">
			<b><?php echo $row['lawyerLastName'] .", " .$row['lawyerFirstName'] ." " .$row['lawyerMiddleName']; ?> </b> 
			<br><?php echo $row['bidMessage']; ?> <br>
			<?php echo $row['bidTime']; ?>
		</div>
		<hr>
	<?php
	}
	?>

</div>
<?php 

if(isset($_POST['bidSingle']))
{
	$bidMessage = $_POST['bidMessage'];
	mysqli_query($conn, " INSERT INTO tblbidding (postID, lawyerID, bidMessage) 
						VALUES ('$_SESSION[postID]','$_SESSION[userID]','$bidMessage')  ");

	header('Refresh: 0');
}

?>