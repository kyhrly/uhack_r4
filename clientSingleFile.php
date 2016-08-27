<?php include ('HEADER.php'); 

	if(isset($_SESSION['usertype'])==false)
			header("location:index.php");

$getSinglePost = "SELECT * FROM tblpost JOIN tblusers USING(userID) WHERE postID = '$_SESSION[postID]' ";

$result = mysqli_query($conn,$getSinglePost);

while($row = mysqli_fetch_assoc($result))
{
?>

	<?php echo $row['lastName']; ;?>

	<?php echo $row['postDescription']; ;?>
	<?php 
	$getBiddings = mysqli_query($conn, "SELECT * FROM tblbidding JOIN tbllawyer USING (lawyerID) WHERE postID = '$row[postID]' " );
	while($row2 = mysqli_fetch_assoc($getBiddings))
	{
	?>
	<div>
		<?php echo $row2['lawyerLastName'] .", " .$row2['lawyerFirstName'] ." " .$row2['lawyerMiddleName']; ?> <br> 
		<?php echo $row2['bidMessage']; ?> <br>
		<?php echo $row2['bidTime']; ?>
	</div>
	<br>
	<hr>
	<?php
	}
	?>
		
<?php
}
?>