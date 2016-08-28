<?php include ('HEADER.php'); 
	
	if(isset($_SESSION['usertype'])==true)
	{
		if($_SESSION['usertype']=="client")
			header("location:clientPanel.php");
		if($_SESSION['usertype']=="lawyer")
			header("location:lawyerPanel.php");
		if($_SESSION['usertype']=="admin")
			header("location:adminPanel.php");
	}
	else
	{
	?>

<style>
.register{
	background: none;
	border: 1px solid white;
	color: white;
	width:48%;
	height:50px;
}
.login{
	background: none;
	border: 1px solid white;
	color: white;
	width:48%;
	height:50px;
}
.register:hover{
	background: none;
	border: 2px solid white;
	color: white;
	font-weight: bold;
	width:48%;
	height:50px;
}
.login:hover{
	background: none;
	border: 2px solid white;
	color: white;
	font-weight: bold;
	width:48%;
	height:50px;
}
</style>
<div class="col-md-7" style="margin-top: 20px;">
	<CENTER>
	<img src="images/logo.png" alt="">
	</CENTER>
</div>
<div class="col-md-3" style="margin-top: 20px;text-align: center;">
	<form action="" method="POST">
		<div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" required type="text"  name="username" >
		    <label class="mdl-textfield__label" for="sample2" style="color:white;font-weight: 100;">Username</label>
		  </div>
		  <div class="mdl-textfield mdl-js-textfield">
		    <input class="mdl-textfield__input" required type="password" name="password">
		    <label class="mdl-textfield__label" for="sample2" style="color:white;font-weight: 100;border:1px">Password</label>
		  </div>
		<!--
		<input style="margin-top: 20px;"; class="form-control" placeholder="username" type="text" name="username">
		<input style="margin-top: 20px;"; class="form-control" placeholder="password" type="password" name="password">
		-->
		<button style="margin-top: 20px"; class="login" type="submit" name="login">Log in</button> 
		<a href="register.php"><button class="register" type="button" style="margin-top: 20px"; class="btn btn-default">Register</button></a>
	</form>
</div>


<?php 

	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];


		$validate = mysqli_query($conn,
					" SELECT * FROM tbllawyer WHERE lawyerUsername = '$username' AND lawyerPassword = '$password' AND status = '1' ");
		if(mysqli_num_rows($validate) == 0)
		{
			$secondValidate = mysqli_query($conn,
					" SELECT * FROM tblusers WHERE userUsername = '$username' AND userPassword = '$password'  ");
			if(mysqli_num_rows($secondValidate) == 0)
			{
				$thirdValidate = mysqli_query($conn,
					" SELECT * FROM tbladmin WHERE adminUsername = '$username' AND adminPassword = '$password' ");
				if(mysqli_num_rows($thirdValidate)==0)
				{
					echo "<script> alert('Invalid username or password!');</script>";
				}
				else
				{
					while($row = mysqli_fetch_assoc($thirdValidate))
					{
						$_SESSION['userID'] = $row['userID'];
						$_SESSION['userName'] = $row['adminlname'] .", " .$row['adminfname'] ." " .$row['adminmname'];
						
					}
					$_SESSION['usertype'] = "admin";
					header('Location: adminPanel.php');
				}
			}
			else 
			{	
				while($row = mysqli_fetch_assoc($secondValidate))
				{
					$_SESSION['userID'] = $row['userID'];
					$_SESSION['userName'] = $row['lastName'] .", " .$row['firstnName'] ." " .$row['middleName'];
					
				}
				$_SESSION['usertype'] = "client";
					header("Location: clientPanel.php");
			}

		}
		else
		{
			while($row = mysqli_fetch_assoc($validate))
				{
					$_SESSION['userID'] = $row['lawyerID'];
					$_SESSION['userName'] = $row['lawyerLastName'] .", " .$row['lawyerFirstName'] ." " .$row['lawyerMiddleName'];
					$_SESSION['specialization'] = $row['specialization'];
					
				}
				$_SESSION['usertype'] = "lawyer";
					header("Location: lawyerPanel.php");
		}
	}
}
?>
