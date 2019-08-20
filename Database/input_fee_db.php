<?php
	$connect = mysqli_connect('localhost','root','','fee_management') or die('Database Connection Error');
	if(isset($_POST['submit']))
	{
		$roll=$_POST['roll'];
		$paid=$_POST['paid_fee'];
		$exam=$_POST['exam_fee'];
		$full=$_POST['full_fee'];
		$scholarship=$_POST['scholarship'];
		$insert = "insert into payment_details(exam_roll,paid_fee,exam_fee,full_fee,scholarship)
		values('$roll','$paid','$exam','$full','$scholarship')";
		mysqli_query($connect,$insert) or die('Insertion Error');
	}
	if(isset($_POST['update']))
	{
		$roll=$_POST['roll'];
		$paid=$_POST['paid_fee'];
		$exam=$_POST['exam_fee'];
		$scholarship=$_POST['scholarship'];
		$update = "update payment_details
					set exam_fee = '$exam', scholarship = '$scholarship'
					where exam_roll = '$roll'";
		mysqli_query($connect,$update) or die('Update Error');
	}
?>