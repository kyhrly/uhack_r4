<?php include('../config/config.php') ?>

<?php 

if($_SESSION['usertype']=="lawyer")
{	
	$getMessages = mysqli_query($conn, " SELECT * FROM tblconversation JOIN tblusers USING(userID) WHERE lawyerID LIKE  '$_SESSION[userID]' ORDER BY convoID " );
	while($row = mysqli_fetch_assoc($getMessages))
	{
	?>
		<?php if($row['sender']=='lawyer' && $_SESSION['usertype']=="lawyer")  
		{
		?>
			<div style='text-align:right;'>
				<?php echo $row['message']; ?> 
				<br> <?php echo $row['timestamp']; ?>
			</div>
		<?php
		}
		else
		{
		?>
			<div style='text-align:left;'>
				<b><?php echo $row['lastName'] .", " .$row['firstName'] ." " .$row['middleName'] ; ?> </b> 
				<?php echo $row['message']; ?>
				<br> <?php echo $row['timestamp']; ?>
			</div>
		<?php
		}
		?>
	<?php
	}
}
else
{
	$getMessages = mysqli_query($conn, " SELECT * FROM tblconversation JOIN tbllawyer USING(lawyerID) WHERE lawyerID LIKE  '$_SESSION[viewProfile]' ORDER BY convoID " );


	while($row = mysqli_fetch_assoc($getMessages))
	{
	?>
		<?php if($row['sender']=='client' && $_SESSION['usertype']=="client")  
		{
		?>
			<div style='text-align:right;'>
				<b>ME -</b> 
				<?php echo $row['message']; ?> 
				<br> <?php echo $row['timestamp']; ?>
			</div>
		<?php
		}
		else
		{
		?>
			<div style='text-align:left;'>
				<b><?php echo $row['lawyerLastName'] .", " .$row['lawyerFirstName'] ." " .$row['lawyerMiddleName'] ; ?> </b> 
				<?php echo $row['message']; ?>
				<br> <?php echo $row['timestamp']; ?>
			</div>
		<?php
		}
		?>
	<?php
	}
}
?>
