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
	<div class="" id="messages">
	

	</div>
	<input type="text" id="messageToSend">
	<br>
	<button onclick="sendMessage();">Send</button>

</div>


<script src="assets/js/jquery.min.js"></script>
<script>

$(document).ready(function() {
	/*
	$('#message').hide();
	//liveViewMessage();
	setInterval(function(){
			
		$.post("ajax/viewMessages.php",//{
			//'sec': a
			//},
		function(showCreate) { document.getElementById("#messages").innerHTML=showCreate; });
		
		
	},1000);
	*/
	$('#message').hide();
	setInterval(function(){
			
		$.post("ajax/viewMessages.php",{
			//'sec': a
			},
		function(showCreate) { document.getElementById("messages").innerHTML=showCreate; });
		//a = a + 1;
		//alert(a);
	},1000);
});

function ToggaleMessage()
{
	$('#message').toggle('slow/400/fast', function() {
		
	});	
}
function sendMessage()
{
	$.post("ajax/sendMessage.php",{
			'message': $('#messageToSend').val(),
			'sender' : '<?php echo $_SESSION['usertype']; ?>'
			});
	$('#messageToSend').val("");
}

function liveViewMessage()
{
	setInterval(function(){
			
		$.post("ajax/viewMessages.php",//{
			//'sec': a
			//},
		function(showCreate) { document.getElementById("#messages").innerHTML=showCreate; });
		
		
	},1000);
}


</script>