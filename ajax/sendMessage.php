<?php include('../config/config.php') ?>

<?php

	$sender = $_POST['sender'];
	$userID = $_SESSION['userID'];
	if($_SESSION['usertype']=="client")
		$viewProfile = $_SESSION['viewProfile'];
	else
		$viewProfile = $_SESSION['userID'];
	$message = $_POST['message'];
	mysqli_query($conn, " INSERT INTO tblconversation (sender, userID, lawyerID, message, timestamp) 
			VALUES( '$sender', '$userID', '$viewProfile', '$message',NOW()  ) ");
?>