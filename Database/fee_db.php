<?php
	$connect = mysqli_connect('localhost','root','','fee_management') or die('Connection Error');
	if(isset($_POST['submit']))
	{
		$roll = $_POST['roll'];
		$faculty = $_POST['faculty'];
		$semester = $_POST['semester'];
		$image=$_FILES['image']['name'];
		$b=$_FILES['image']['tmp_name'];
		$fee=$_POST['feede'];
		move_uploaded_file($b,'Userimg/'.basename($image));
		$insert = "insert into fee_payment(exam_roll,faculty,semester,image,fee_paid) 
		values('$roll','$faculty','$semester','$image','$fee')";
		mysqli_query($connect,$insert) or die('Insertion Error');
		$insert1 = "insert into admin(exam_roll,faculty,semester,image,fee_paid) 
		values('$roll','$faculty','$semester','$image','$fee')";
		mysqli_query($connect,$insert1) or die('Insertion Error');
	}
?>