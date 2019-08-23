<?php 
	$connect = mysqli_connect('localhost','root','','fee_management') or die('Database Connection Error');
	$roll = $_GET['exam_roll'];
	$delete = "delete from admin where exam_roll = '$roll'";
	mysqli_query($connect,$delete) or die('Deletion Error');
	header("location:../admin/fee_confirm.php");
?>