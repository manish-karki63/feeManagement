<?php
	$connect = mysqli_connect('localhost','root','','fee_management') or die('Connection Error');
	if(isset($_POST['signup']))
	{
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$faculty = $_POST['faculty'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$batch = $_POST['batch'];
		if($password == $cpassword)
		{
			$insert = "insert into register 
			values('$name','$roll','$phone','$email','$faculty','$password','$batch')";
			mysqli_query($connect,$insert);
		}
		else{
			die('Password Error');
		}
	}
?>