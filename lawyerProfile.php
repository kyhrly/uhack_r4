<?php include ('HEADER.php'); ?>

<?php 
$getProfile = mysqli_query($conn, " SELECT * FROM tbllawyer WHERE lawyerID = '$_SESSION[viewProfile]' ");
while($row = mysqli_fetch_assoc($getProfile))
{
?>
	<?php echo $row['lawyerLastName'] .", " .$row['lawyerFirstName'] ." " .$row['lawyerMiddleName']; ?> 
	<button onclick="ToggaleMessage();">Message</button>
	<br>
	<?php echo $row['firmAssociatedTo']; ?> - <?php echo $row['firmAddress']; ?>
	<br>
	<?php echo $row['locationLawyers']; ?>
	<br>
	Cases Won : 
	<?php echo $row['casesWon']; ?>
<?php
}
?>
<br><br>
<div id="message">
	
	asdfasdf<br>
	asfasdfdasf<br>
	<textarea name="" id="" cols="30" rows="10"></textarea>
	<br>
	<button>Send</button>

</div>


<script src="assets/js/jquery.min.js"></script>
<script>

$(document).ready(function() {
	$('#message').hide();
});

function ToggaleMessage()
{
	$('#message').toggle('slow/400/fast', function() {
		
	});	
}

</script>