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
<div class="container">

<?php
$getSinglePost = "SELECT * FROM tblpost JOIN tblusers USING(userID) WHERE postID = '$_SESSION[postID]' ";

$result = mysqli_query($conn,$getSinglePost);

while($row = mysqli_fetch_assoc($result))
{
?>	<div class="panel">
	<b>
	<?php echo $row['lastName'] .", " .$row['firstName'] ." " .$row['middleName'] ;?>
	</b><br>
	<?php echo $row['postDescription']; ;?>
	<h4>Comments</h4>
	<?php 
	$getBiddings = mysqli_query($conn, "SELECT * FROM tblbidding JOIN tbllawyer USING (lawyerID) WHERE postID = '$row[postID]' " );
	while($row2 = mysqli_fetch_assoc($getBiddings))
	{
	?>	

		<br>*<br>	
		<b><?php echo $row2['lawyerLastName'] .", " .$row2['lawyerFirstName'] ." " .$row2['lawyerMiddleName']; ?></b>  
		<?php echo $row2['bidMessage']; ?> <br>
		<?php echo $row2['bidTime']; ?>
	
	
	
	<?php
	}
	?>
	</div>	
<?php
}
?>

</div>