<?php
	include('../Database/admin_confirm.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Fee Confirm</title>
		<link rel='stylesheet' href='../CSS/header.css' type='text/css'/>
		<link rel='stylesheet' href='../CSS/footer.css' type='text/css'/>
		<link rel='stylesheet' href='../CSS/button.css' type='text/css'/>
		<link rel="stylesheet" href="../CSS/fontAwesome/css/font-awesome.css" type="text/css"/>
	</head>
	<body>
		<div class="inner-header-wrapper" style="">
			<div class="logo">
				<a href="#"><img src="../images/logo.png" alt="logo"/></a>
			</div>
			<div class="inner-header">
				<div class="title">
					<a href="">FEE MANAGEMENT SYSTEM</a>
				</div>
				<div class="nav-menu">
					<ol>
						<li><a href="fee_confirm.php">Home</a></li>
						<li><a href="input_fee.php">Fee Detail</a></li>
						<li><a href="admin_login.php">Sign Out</a></li>
					</ol>
				</div>
			</div>
		</div>
		
		<div class='detail'>
			<form action='' method='post'>
			<table>
				<tr>
					<th>Exam Roll</th>
					<th>Faculty</th>
					<th>Semester</th>
					<th>Image</th>
					<th></th>
					<th></th>
				</tr>
		<?php
			$connect = mysqli_connect('localhost','root','','fee_management') or die('Database Connection Error');
			$select = "select * from fee_payment";
			$data = mysqli_query($connect,$select) or die('Table Selection Error');
			while($arr = mysqli_fetch_assoc($data))
			{	
				$roll = $arr['exam_roll'];?>
				<tr><td><input type='text' name='roll' value='<?php echo $roll; ?>'</td>
				<td><?php echo $arr['faculty'];?></td>
				<td><?php echo $arr['semester']; ?></td>
				<?php $img = $arr['image'];?>
				<td><div class="image-wrapper">
					<img src='../Userimg/<?php echo $img; ?>' alt='Bank Slip' width='120'/>
					</div></td>
				<td><input type='submit' name='confirm' value='Confirm'/></td>
				<td><a href="<?php echo 'delete.php?exam_roll='.$roll;?>">Delete</a></td></tr>
		<?php	}
		?>
			</table>
			</form>
		</div>
		
		
		<!-- Footer Section -->
        <footer>
            <div class="container">
                <ul class="footer-widget clearfix">
                    <li>
                        <span class="icon"><i class="fa fa-map-marker"></i></span>
                        <span class="caption">Old Baneshwor, Basuki Marga</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-paper-plane"></i></span>
                        <span class="caption">kcmit.edu.np </span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-phone"></i></span>
                        <span class="caption">+977-1-4479939</span>
                    </li>
                    
                    <li>
                        <span class="icon"></span>
                        <span class="caption">Copyright &copy; All right reserve</span>
                    </li>
                    
                </ul>
                        
            </div>
        </footer>
	</body>
</html>