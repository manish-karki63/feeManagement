<?php
	$connect = mysqli_connect('localhost','root','','fee_management') or die('Connection Error');
	if(isset($_POST['reset']))
	{
		$roll = $_POST['roll'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		if($password == $cpassword)
		{
			$select = "select exam_roll from register where exam_roll = '$roll'";
			$data = mysqli_query($connect,$select) or die('Selection Error');
			$arr = mysqli_fetch_assoc($data) or die('Fetching Error');
			if($arr['exam_roll']!=null)
			{
				$update = "update register 
				set password = '$password'
				where exam_roll = '$roll'";
				mysqli_query($connect,$update) or die('Update Error');
			}
		}else{
			die('Confirm Password');
		}
	}
?>