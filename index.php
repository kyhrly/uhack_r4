<?php include ('HEADER.php'); 
	
	if(isset($_SESSION['usertype'])==true)
	{
		if($_SESSION['usertype']=="client")
			header("location:clientPanel.php");
		if($_SESSION['usertype']=="lawyer")
			header("location:lawyerPanel.php");
	}
	else
	{
	?>

<form action="" method="POST">
	<input type="text" name="username">
	<input type="text" name="password">

	<button type="submit" name="login">Log in</button>
	<button>Register</button>
</form>


<?php 

	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];


		$validate = mysqli_query($conn,
					" SELECT * FROM tbllawyer WHERE lawyerUsername = '$username' AND lawyerPassword = '$password' ");
		if(mysqli_num_rows($validate) == 0)
		{
			$secondValidate = mysqli_query($conn,
					" SELECT * FROM tblusers WHERE userUsername = '$username' AND userPassword = '$password' ");
			if(mysqli_num_rows($secondValidate) == 0)
			{
				$thirdValidate = mysqli_query($conn,
					" SELECT * FROM tbladmin WHERE adminUsername = '$username' AND adminPassword = '$password' ");
				if(mysqli_num_rows($thirdValidate)==0)
				{
					echo "invalid password!";
				}
				else
				{
					//$_SESSION['usertype'] = "admin";
					echo "admin"; //$_SESSION['usertype'];
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
