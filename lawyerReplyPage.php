<?php include ('HEADER.php'); ?>

<?php 

if(isset($_SESSION['usertype'])==false)
		header("location:index.php");

$_SESSION['replyTo'] = $_POST['reply'];
	
?>

<style>
body{
	color:white;
}
.panel{
	background: url('images/tile.png');
	padding:10px;
}
</style>
<div class="col-md-7 col-md-offset-3 panel">

<h3>Chat</h3>
<div class="" id="messages">

</div>

<hr>
<input style="width:50%;" class="form-control" type="text" id="messageToSend">
<br>
<button class="btn btn-default" onclick="sendMessage();">Send</button>
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


</script>
