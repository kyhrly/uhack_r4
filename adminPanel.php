<?php include ('HEADER.php'); ?>
<center>Lawyer Applicants</center>
<table border="1">
	<tr>
		<td>Username</td>
		<td>Status</td>
		<td>Name</td>
		<td>Specialization</td>
		<td>Firm</td>
		<td>Location</td>
		<td>Action</td>
	</tr>
	<form action="" method="POST">
	<tr>
		<?php 
		$getLawyers = mysqli_query($conn, " SELECT * FROM tbllawyer WHERE status NOT LIKE '3' ");
		while($lawyers = mysqli_fetch_assoc($getLawyers))
		{
		?>
			<tr>
				<td><?php echo $lawyers['lawyerUsername']; ?></td>
				<td><?php if($lawyers['status']==0) echo "Pending / Blocked"; else echo "Active";  ?></td>
				<td><?php echo $lawyers['lawyerUsername'] .", " .$lawyers['lawyerFirstName'] ." " .$lawyers['lawyerMiddleName']; ?></td>
				<td><?php echo $lawyers['specialization']; ?></td>
				<td><?php echo $lawyers['firmAssociatedTo']; ?></td>
				<td><?php echo $lawyers['locationLawyers']; ?></td>
				<td>
					<?php 
					if($lawyers['status']==0)
					{
					?>
						<button type="submit" name="accept" value="<?php echo $lawyers['lawyerID']; ?>">Accept</button>
						<button type="submit" name="review" value="<?php echo $lawyers['lawyerID']; ?>">Review</button>
					<?php 
					}
					else
					{
					?>
						<button type="submit" name="block" value="<?php echo $lawyers['lawyerID']; ?>">Block</button>
					<?php
					}
					?>
				</td>
			</tr>
		<?php 
		}
		?>
	</tr>
	</form>
</table>

<hr>
<center>Lawyers for Review</center>
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
		$getLawyersReview = mysqli_query($conn, " SELECT * FROM tbllawyer WHERE status = '3' ");
		while($lawyers = mysqli_fetch_assoc($getLawyersReview))
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
				</td>
			</tr>
		<?php 
		}
		?>
	</tr>
	</form>
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

	if(isset($_POST['block']))
	{
		mysqli_query($conn," UPDATE tbllawyer SET status = '0' WHERE lawyerID =$_POST[block] ");
		header("Refresh:0");
	}


?>