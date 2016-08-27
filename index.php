<?php include ('config/config.php'); ?>


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
				//$_SESSION['usertype'] = "client";
				echo "client"; //$_SESSION['usertype'];
			}

		}
		else
		{
			//$_SESSION['usertype'] = "lawyer";
			echo "lawyer"; //$_SESSION['usertype'];
		}
	}

?>
