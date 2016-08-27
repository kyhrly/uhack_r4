<?php include('../config/config.php') ?>


<form method="POST">
	<?php 
	$getMessages = mysqli_query($conn, " SELECT * FROM tblconversation JOIN tblusers USING(userID) WHERE lawyerID LIKE  '$_SESSION[userID]' GROUP BY userID ORDER BY convoID  " );
	while($row = mysqli_fetch_assoc($getMessages))
	{
	?>
		<button type="submit" name="reply" value="<?php $row['userID']; ?>"> 

			<b><?php echo $row['lastName'] .", " .$row['firstName'] ." " .$row['middleName']; ?> : </b>
			
				<?php echo $row['message']; ?> 
				<br> <?php echo $row['timestamp']; ?>
			
		</button>
	<?php
	}
	?>
</form>


<?php
if(isset($_POST['reply']))
{
	$_SESSION['replyTo'] = $_POST['reply'];
	header('Location: LawyerReplyPage.php');
}
?>
