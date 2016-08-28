<?php include ('config/config.php'); ?>

<html>

<head>
	<title>KATARUNGAN</title>
</head>



<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script src="assets/js/jquery.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="bootstrap/js/jquery-ui.min.js"></script>

<link rel="stylesheet" href="assets/material/material.min.css">
<script src="assets/material/material.min.js"></script>
<style>
body {
  background: url('images/bg_2880.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	color: white;




}
.navbar{
	border-radius:0;
	background: none;
	border: 0px;
}
.navbar-default .navbar-nav>li>a {
    color: white;
}
.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
    color: white;
    background-color: transparent;
}
.navbar-default .navbar-nav>li>a {
    color: white;
}
.navbar-default .navbar-nav>li>a {
    color: white;
}
.navbar-default .navbar-brand {
    color: white;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border-radius: 0px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.btn{
	border-radius: 0;
}
</style>
<body>


	<?php 
	if(isset($_SESSION['usertype'])==true)
	{
	?>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="index.php">Katarungan</a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
		      <?php if($_SESSION['usertype']=="client"){?>
			<li><a href="publishStory.php"><i class="glyphicon glyphicon-pencil"></i> Publish Story</a></li>
			<?php } ?>
			<?php if($_SESSION['usertype']=="lawyer"){?>
			<li><a href="stories.php"><i class="glyphicon glyphicon-th-list"></i> Stories</a></li>
			<?php } ?>
			<li><a href="<?php if($_SESSION['usertype']=='lawyer') echo 'myprofile.php'; ?>"><i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION['userName']; ?></a></li>
			<li><a href="LOGOUT.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
		    </ul>
		  </div>
		</nav>
		<!--
		<ul>
			<li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
			<?php if($_SESSION['usertype']=="client"){?>
			<li><a href="publishStory.php">Publish Story</a></li>
			<?php } ?>
			<li><a href="<?php if($_SESSION['usertype']=='lawyer') echo 'myprofile.php'; ?>"><?php echo $_SESSION['userName']; ?></a></li>
			<li><a href="LOGOUT.php">Logout</a></li>
		</ul>
		-->	
	<?php
	} 
	else
	{
	?>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="index.php">Katarungan</a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
		    </ul>
		  </div>
		</nav>
	<?php
	}
	?>


