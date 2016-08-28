<?php include ('HEADER.php'); ?>

<?php 

if(isset($_SESSION['usertype'])==false)
		header("location:index.php");


?>
<style>
body{
	color:white;
}
.panel{
	background: url('images/tile.png');
	padding:10px;
}
</style>

<div class=" panel col-md-5 col-md-offset-3">
<h4>Stories</h4>
<?php 
$getStories = mysqli_query($conn, " SELECT * FROM tblpublish ");
while($row = mysqli_fetch_assoc($getStories))
{
?>	
	<div>
		<b><h4><?php echo $row['publishTitle']; ?>&nbsp;&nbsp;&nbsp;<button class="btn btn-default">Donate</button></h4></b><br>
		<?php echo $row['publishDescription']; ?>
	</div>
	<hr>
<?php
}
?></form>
</div>
	

