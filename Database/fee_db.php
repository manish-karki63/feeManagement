<?php
	$connect = mysqli_connect('localhost','root','','fee_management') or die('Connection Error');
	if(isset($_POST['submit']))
	{
		$roll = $_POST['roll'];
		$faculty = $_POST['faculty'];
		$semester = $_POST['semester'];
		$image=$_FILES['image']['name'];
		$b=$_FILES['image']['tmp_name'];
		move_uploaded_file($b,'Userimg/'.basename($image));
		$insert = "insert into fee_payment(exam_roll,faculty,semester,image) 
		values('$roll','$faculty','$semester','$image')";
		mysqli_query($connect,$insert) or die('Insertion Error');
	}
?>