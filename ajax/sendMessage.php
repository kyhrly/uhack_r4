<?php include('../config/config.php') ?>

<?php

	$sender = $_POST['sender'];
	
	if($_SESSION['usertype']=="client")
	{
		$viewProfile = $_SESSION['viewProfile'];
		$userID = $_SESSION['userID'];
	}
	else
	{
		$viewProfile = $_SESSION['userID'];
		$userID = $_SESSION['replyTo'];
	}
	$message = $_POST['message'];
	mysqli_query($conn, " INSERT INTO tblconversation (sender, userID, lawyerID, message, timestamp) 
			VALUES( '$sender', '$userID', '$viewProfile', '$message',NOW()  ) ");
?>