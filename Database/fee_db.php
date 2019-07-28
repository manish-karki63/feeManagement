<?php
	$connect = mysqli_connect('localhost','root','','fee_management') or die('Connection Error');
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$email = $_POST['email'];
		$batch = $_POST['batch'];
		$faculty = $_POST['faculty'];
		$semester = $_POST['semester'];
		$image=$_FILES['image']['name'];
		$b=$_FILES['image']['tmp_name'];
		move_uploaded_file($b,'Userimg/'.basename($image));
		$insert = "insert into fee_payment(name,exam_roll,email,faculty,semester,image,batch) 
		values('$name','$roll','$email','$faculty','$semester','$image','$batch')";
		mysqli_query($connect,$insert) or die('Insertion Error');
	}
?>