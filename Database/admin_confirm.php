<?php
	$connect = mysqli_connect('localhost','root','','fee_management') or die('Database Connection Error');
	if(isset($_POST['confirm'])){
		$roll = $_POST['roll'];
		$select = "select exam_fee,scholarship from payment_details where exam_roll = '$roll'";
		$data = mysqli_query($connect,$select) or die('Selection Error');
		$arr = mysqli_fetch_assoc($data);
		$fee = $arr['exam_fee'];
		$scholarship = $arr['scholarship'];
		$update = "update payment_details
					set paid_fee = paid_fee+'$fee', scholarship = 0
					where exam_roll = '$roll'";
		mysqli_query($connect,$update) or die('Update Error');
		$delete = "delete from fee_payment where exam_roll = '$roll'";
		mysqli_query($connect,$delete) or die('Deletion Error');
	}
?>