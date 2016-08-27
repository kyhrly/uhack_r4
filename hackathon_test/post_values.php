<?php

	$connection_string = mysqli_connect("localhost","root","richard","hackathon_db");
	$use_db = "";
	
	if($connection_string)
	{
			
		  
		  if(isset($_POST['submit']))
		  {
			//$
			$comment = $_POST['comment'];
			$specialization = $_POST['specialization'];
			// kyle palagay dito un value ng user_id
			$user_id = 1;
			//$date = "now()";
			
			$insert = "insert into tblpost(userID,postDescription,postTimeStamp,postSpecialization)
			                 values ($user_id,'$comment',now(),'$specialization')";
			if(mysqli_query($connection_string,$insert))
			{
					echo "<table>
			<form action = '' method = 'POST'>
			<tr><td>Input your comment</td><td><textarea rows = '4' cols = '50' name = 'comment' placeholder = 'Enter you Post Here'></textarea></td></tr>
			<tr><td></td><td><select name = 'specialization'>
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
			</select>
			<input type = 'hidden' value = '//kylepalagaydito un value ng id' name = 'client_id'>
			<tr><td></td><td><input type = 'submit' value = 'POST' name = 'submit'></td>
			</td>
			</tr>
			</form>
	      </table>";
			}
			else
			{
				echo "".mysqli_error($connection_string);
			}
		  }
		  else
		  {
			echo "<table>
			<form action = '' method = 'POST'>
			<tr><td>Input your comment</td><td><textarea rows = '4' cols = '50' name = 'comment' placeholder = 'Enter you Post Here'></textarea></td></tr>
			<tr><td></td><td><select name = 'specialization'>
				<option value = 'Administrative'>Administrative</option>
				<option value = 'Civil Litigation'>Civil Litigation</option>
				<option value = 'Constitutional Law'>Constitutional Law</option>
				<option value = 'Corporate and Commercial Law'>Corporate and Commercial Law</option>
				<option value = 'Environmental Law'>Environmental Law</option>
				<option value = 'Family Law'>Family Law</option>
				<option value = 'Immigration Law'>Immigration Law</option>
				<option value = 'Intellectual Property Law'>Intellectual Property Law</option>
				<option value = 'International Law'>International Law</option>
				<option value = 'Labour And Employment Law'>International Law</option>
				<option value = 'International Law'>International Law</option>
			</select>
			<input type = 'hidden' value = '//kylepalagaydito un value ng id' name = 'client_id'>
			<tr><td></td><td><input type = 'submit' value = 'POST' name = 'submit'></td>
			</td>
			</tr>
			</form>
	      </table>";  
		  }
	}
	else
	{
		echo "".mysqli_error($connection_string);
	}

	
?>