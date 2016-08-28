<?php include ('HEADER.php'); ?>

<style>
body{
	color:white;
}
.panel{
	background: url('images/tile.png');
	padding:10px;
}
</style>

<div class="container panel col-md-5 col-md-offset-3">
<?php

$getProfile = mysqli_query($conn, " SELECT * FROM tbllawyer WHERE lawyerID = '$_SESSION[viewProfile]' ");
while($row = mysqli_fetch_assoc($getProfile))
{
?>
	<?php echo $row['lawyerLastName'] .", " .$row['lawyerFirstName'] ." " .$row['lawyerMiddleName']; ?> 
	<button class="btn btn-default" onclick="ToggaleMessage();">Message</button>
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
	<h4>Chat</h4>
	<hr>
	<div class="" id="messages">
	

	</div>
	
	<div class="row">
	<div class="col-md-5">
	<input class="form-control" type="text" id="messageToSend">
	<br>
	</div>
	<button class="btn btn-default" onclick="sendMessage();">Send</button>
	
	</div>
	</div>
</div>
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