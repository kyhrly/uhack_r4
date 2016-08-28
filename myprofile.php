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

<div class="panel col-md-5 col-md-offset-3">
<?php 

if(isset($_SESSION['usertype'])==false)
		header("location:index.php");



$getProfile = mysqli_query($conn, " SELECT * FROM tbllawyer WHERE lawyerID = '$_SESSION[userID]' ");
while($row = mysqli_fetch_assoc($getProfile))
{
?>
	<?php echo $row['lawyerLastName'] .", " .$row['lawyerFirstName'] ." " .$row['lawyerMiddleName']; ?> 
	<button class="btn btn-default" onclick="ToggaleMessage();">Messages</button>
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
			
		$.post("ajax/viewMessageLawyer.php",{
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
			
		$.post("ajax/viewMessagesLawyer.php",//{
			//'sec': a
			//},
		function(showCreate) { document.getElementById("#messages").innerHTML=showCreate; });
		
		
	},1000);
}


</script>


<?php
/*
if(isset($_POST['reply']))
{
header('Location: lawyerReplyPage.php');
}
*/
?>