<?php include('../config/config.php') ?>

<?php 
$getMessages = mysqli_query($conn, " SELECT * FROM tblconversation JOIN tbllawyer USING(lawyerID) WHERE lawyerID LIKE  '$_SESSION[viewProfile]' ORDER BY convoID " );
while($row = mysqli_fetch_assoc($getMessages))
{
?>
	<?php if($row['sender']=='client')  
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
			<b><?php echo $row['lawyerLastName'] .", " .$row['lawyerFirstName'] ." " .$row['lawyerMiddleName'] ; ?> </b> 
			<?php echo $row['message']; ?>
			<br> <?php echo $row['timestamp']; ?>
		</div>
	<?php
	}
	?>
<?php
}

?>

