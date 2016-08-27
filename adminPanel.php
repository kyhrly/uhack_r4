<?php include ('config/config.php'); ?>
<center>Lawyer Applicants</center>
<table border="1">
	<tr>
		<td>Username</td>
		<td>Name</td>
		<td>Specialization</td>
		<td>Firm</td>
		<td>Location</td>
		<td>Action</td>
	</tr>
	<form action="" method="POST">
	<tr>
		<?php 
		$getLawyers = mysqli_query($conn, " SELECT * FROM tbllawyer /*WHERE status = '0'*/ ");
		while($lawyers = mysqli_fetch_assoc($getLawyers))
		{
		?>
			<tr>
				<td><?php echo $lawyers['lawyerUsername']; ?></td>
				<td><?php echo $lawyers['lawyerUsername'] .", " .$lawyers['lawyerFirstName'] ." " .$lawyers['lawyerMiddleName']; ?></td>
				<td><?php echo $lawyers['specialization']; ?></td>
				<td><?php echo $lawyers['firmAssociatedTo']; ?></td>
				<td><?php echo $lawyers['locationLawyers']; ?></td>
				<td>
					<button type="submit" name="accept" value="<?php echo $lawyers['lawyerID']; ?>">Accept</button>
					<button type="submit" name="review" value="<?php echo $lawyers['lawyerID']; ?>">Review</button>
				</td>
			</tr>
		<?php 
		}
		?>
	</tr>
	</form>
</table>

<hr>
<center>Declined Lawyers</center>
<table border="1">
	<tr>
		<td>Username</td>
		<td>Name</td>
		<td>Specialization</td>
		<td>Firm</td>
		<td>Location</td>
		<td>Action</td>
	</tr>
</table>

<?php 

	if(isset($_POST['accept']))
	{
		mysqli_query($conn," UPDATE tbllawyer SET status = '1' WHERE lawyerID =$_POST[accept] ");
		header("Refresh:0");
		//echo "accept!" .$_POST['accept'];;
	}

	if(isset($_POST['review']))
	{
		mysqli_query($conn," UPDATE tbllawyer SET status = '3' WHERE lawyerID =$_POST[review] ");
		header("Refresh:0");
	}


?>