<?php include ('HEADER.php'); ?>
<style type="text/css">
      
.panel-login {

	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;

	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;

	color: #666;
	font-weight: bold;
	font-size: 18px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #000;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;

	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {

	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: ;
	outline: none;
	color: #000;
	font-size: 14px;
	font-weight: bold;
	height: auto;
	font-weight: normal;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {

}
.panel-body, .panel
{
	background: url('images/tile.png');
    
}
</style>


<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row" >
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link" style="color:white;">Client</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link" style="color:white;">Lawyer</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="" method="POST" role="form" style="display: block;">
									<div class="form-group" >
										<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-user"></i></span>
									  			
									  <input type="text" name="userUsername" id="username" tabindex="3" class="form-control" placeholder="Username">
									</div>
									</div>
									<div class="form-group">
										<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" name="userPassword" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									</div>
									<div class="form-group">
										<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-bars"></i></span>
										<input type="text" name="lastName" id="lastName" tabindex="3" class="form-control" placeholder="Last Name">
									</div>
									</div>
									<div class="form-group">
										<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-bars"></i></span>
										<input type="text" name="firstName" id="firstName" tabindex="4" class="form-control" placeholder="First Name">
									</div>
									</div>
									<div class="form-group">
										<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-bars"></i></span>
										<input type="text" name="middleName" id="middleName" tabindex="5" class="form-control" placeholder="Middle Name">
									</div>
									</div>
									<div class="form-group">
										<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
										<input type="text" name="nickName" id="location" tabindex="6" class="form-control" placeholder="Specialization">
									</div>
									</div>
									<div class="form-group">
										<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
										<input type="text" name="locationUsers" id="location" tabindex="6" class="form-control" placeholder="Location">
									</div>
									</div>
									<div class="form-group text-center">
										
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="registerClient"  tabindex="4" class="form-control btn btn-login" value="Submit">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="" method="post" role="form" style="display: none;">
									<div class="form-group">
											<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" name="lawyerUsername" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									</div>
									<div class="form-group">
											<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" name="lawyerPassword" id="password" tabindex="3" class="form-control" placeholder="Password">
									</div>
									</div>
									<div class="form-group">
											<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-bars"></i></span>
										<input type="text" name="lawyerLastName" id="lastname" tabindex="4" class="form-control" placeholder="Last Name">
									</div>
									</div>
									<div class="form-group">
											<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-bars"></i></span>
										<input type="text" name="lawyerFirstName" id="firstname" tabindex="5" class="form-control" placeholder="First Name">
									</div>
									</div>
									<div class="form-group">
											<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-bars"></i></span>
										<input type="text" name="lawyerMiddleName" id="middlename" tabindex="6" class="form-control" placeholder="Middle Name">
									</div>
									</div>
										<div class="form-group">
												<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
										<input type="text" name="firmAssociatedTo" id="firmassociation" tabindex="7" class="form-control" placeholder="Firm Association">
									</div>
									</div>
									<div class="form-group">
											<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
										<input type="text" name="firmAddress" id="firmaddress" tabindex="8" class="form-control" placeholder="Firm Address">
									</div>
									</div>
									<div class="form-group">
											<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
										<input type="text" name="specialization" id="location" tabindex="9" class="form-control" placeholder="Specialization">
									</div>
									</div>
									<div class="form-group">
											<div class="input-group margin-bottom-sm">
  											<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
										<input type="text" name="locationLawyers" id="location" tabindex="9" class="form-control" placeholder="Location">
									</div>
									</div>
									
									<div class="form-group text-center">
										<div class="col-sm-6 col-sm-offset-3">
										
												<input type="submit" name="registerLawyer" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Submit">
											</div>
									
									<div class="form-group">
										<div class="row">
											
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





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
		else
		{
			echo "<script>alert('Registration Successful')</script>";
		}

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
		else
		{
			echo "<script>alert('Registration Successful')</script>";
		}

}


  
?>
<script src="assets/js/jquery.min.js"></script>

<script type="text/javascript">
$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

</script>