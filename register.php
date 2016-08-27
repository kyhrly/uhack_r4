<?php include ('HEADER.php'); ?>

<form action="" method="POST">

	<input type="text" name="lawyerUsername" placeholder="Username">
	<input type="text" name="lawyerPassword" placeholder="Password">
	<input type="text" name="lawyerFirstName" placeholder="First name">
	<input type="text" name="lawyerMiddleName" placeholder="Middle name">
	<input type="text" name="lawyerLastName" placeholder="Last name">
	<input type="text" name="firmAssociatedTo" placeholder="Firm Associated">
	<input type="text" name="firmAddress" placeholder="Firm Address">
	<input type="text" name="specialization" placeholder="Specialization">
	<input type="text" name="locationLawyers" placeholder="Location">
	
	<button type="submit" name="registerLawyer">Submit</button>
	<button type="reset">Clear</button>
</form>


<form action="" method="POST">
	<input type="text" name="userUsername" placeholder="Username">
	<input type="text" name="userPassword" placeholder="Password">
	<input type="text" name="firstName" placeholder="First name">
	<input type="text" name="middleName" placeholder="Middle name">
	<input type="text" name="lastName" placeholder="Last name">
	<input type="text" name="nickName" placeholder="Nick name">
	<input type="text" name="locationUsers" placeholder="Location">

	<button type="submit" name="registerClient">Submit</button>
	<button type="reset">Clear</button>

</form>



<?php 
	
	if(isset($_POST['registerLawyer']))
	{
		$lawyerUsername = $_POST['lawyerUsername'];
		$lawyerPassword = $_POST['lawyerPassword'];
		$lawyerLastName = $_POST['lawyerLastName'];
		$lawyerFirstName = $_POST['lawyerFirstName'];
		$lawyerMiddleName = $_POST['lawyerMiddleName'];
		$firmAssociatedTo = $_POST['firmAssociatedTo'];
		$firmAddress = $_POST['firmAddress'];
		$specialization = $_POST['specialization'];
		$locationLawyers = $_POST['locationLawyers'];
		$status = 0;

		$registerLawyer = (" 
				INSERT INTO tbllawyer
				(
					lawyerUsername, 
					lawyerPassword, 
					lawyerLastName, 
					lawyerFirstName, 
					lawyerMiddleName, 
					firmAssociatedTo, 
					firmAddress, 
					specialization, 
					locationLawyers, 
					status
				) 
				VALUES(
					'$lawyerUsername',
					'$lawyerPassword',
					'$lawyerLastName',
					'$lawyerFirstName',
					'$lawyerMiddleName',
					'$firmAssociatedTo',
					'$firmAddress',
					'$specialization',
					'$locationLawyers',
					'0'
					)
				");
		$reg = mysqli_query($conn,$registerLawyer);
		if(!$reg)
			echo mysqli_error($conn);

		echo "test";

	}

	if(isset($_POST['registerClient']))
	{
		
		$userUsername = $_POST['userUsername']; 
		$userPassword = $_POST['userPassword']; 
		$lastName = $_POST['lastName'];   
		$firstName = $_POST['firstName']; 
		$middleName = $_POST['middleName']; 
		$nickName = $_POST['nickName']; 
		$locationUsers = $_POST['locationUsers'];
		$status = 0;

		$registerClient = (" 
				INSERT INTO tblusers
				(
					userUsername,
					userPassword,
					lastName,
					firstName,
					middleName,
					nickName,
					locationUsers,
					status
				) 
				VALUES(
					'$userUsername',
					'$userPassword',
					'$lastName',
					'$firstName',
					'$middleName',
					'$nickName',
					'$locationUsers',
					'1'
					)
				");
		$reg = mysqli_query($conn,$registerClient);
		if(!$reg)
			echo mysqli_error($conn);

		echo "test";

	}


  
?>