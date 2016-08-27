<?php include ('HEADER.php'); 
	if(isset($_SESSION['usertype'])==false)
		header("location:index.php");


	echo $_SESSION['specialization'];


?>


<form action="" method="POST">
	<?php
	$getPostsForLawyer =  mysqli_query($conn, "SELECT * FROM tblpost JOIN tblusers USING (userID) WHERE postSpecialization LIKE '%$_SESSION[specialization]%' ORDER BY tblpost.postID ");
	while($row = mysqli_fetch_assoc($getPostsForLawyer))
	{
	?>
		<div>
			<?php echo $row['firstName']; ?><br>
			<?php echo $row['postDescription']; ?> <br>
			<?php echo $row['postTimeStamp']; ?><br>
			<button type="submit" value="<?php echo $row['postID']; ?>" name="bid">BID</button>
			<br>
			<?php 
			$getBiddings = mysqli_query($conn, "SELECT * FROM tblbidding JOIN tbllawyer USING (lawyerID) WHERE postID = '$row[postID]' " );
			while($row2 = mysqli_fetch_assoc($getBiddings))
			{
			?>
			<div>
				<?php echo $row2['lawyerLastName'] .", " .$row2['lawyerFirstName'] ." " .$row2['lawyerMiddleName']; ?> <br> 
				<?php echo $row2['bidMessage']; ?> <br>
				<?php echo $row2['bidTime']; ?>
			</div>
			<br>
			<?php
			}
			?>
		</div>
		<hr>
	<?php
	}
	?>
</form>


<?php

	if(isset($_POST['bid']))
	{	
		$_SESSION['postID'] = $_POST['bid'];
		header('Location: lawyerSingleFile.php');
	}


?>
<!--

<option value = 'Administrative'>Administrative</option>
<option value = 'Civil Litigation'>Civil Litigation</option>
<option value = 'Constitutional Law'>Constitutional Law</option>
<option value = 'Corporate and Commercial Law'>Corporate and Commercial Law</option>
<option value = 'Environmental Law'>Environmental Law</option>
<option value = 'Family Law'>Family Law</option>
<option value = 'Immigration Law'>Immigration Law</option>
<option value = 'Intellectual Property Law'>Intellectual Property Law</option>
<option value = 'International Law'>International Law</option>
<option value = 'Labour And Employment Law'>Labour and Employment Law</option>
<option value = 'Real Estate Law'>Real Estate Law</option>

-->