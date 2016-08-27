<?php include ('config/config.php'); ?>

<html>

<head>
	<title>to follow</title>
</head>

<body>

	<?php 
	if(isset($_SESSION['usertype'])==true)
	{
	?>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#"><?php echo $_SESSION['userName']; ?></a></li>
			<li><a href="LOGOUT.php">Logout</a></li>
		</ul>	
	<?php
	} 
	else
	{
	?>
	<ul>
		<li><a href="index.php">Home</a></li>
	</ul>	
	<?php
	}
	?>
