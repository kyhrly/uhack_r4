<?php include ('HEADER.php'); 


$post_id = $_POST['submit'];
		//echo "$post_id";
$getSinglePost = "SELECT * FROM tblpost JOIN tblusers USING(userID) WHERE postID = '$post_id' ";

$result = mysqli_query($conn,$getSinglePost);

while($row = mysqli_fetch_assoc($result))
{
	echo $post_id;
?>
	<?php echo $row['lastName']; ;?>

	<?php echo $row['postDescription']; ;?>
		
<?php
}
?>