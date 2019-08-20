<?php
	$roll = $_GET['roll'];
	$con = mysqli_connect('localhost','root','','fee_management') or die('Connection Error');
	$select = "select email from register where exam_roll = '$roll'";
	$email = mysqli_query($con, $select) or die("Retrieve Error");
	$arr = mysqli_fetch_assoc($email);
	echo "<div class='input-group'>
						<label>Email</label>
						<input type='email' name='email' value='".$arr['email']."' readonly/>
					</div>";
?>