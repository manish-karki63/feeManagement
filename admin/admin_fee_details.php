<!DOCTYPE html>
<html>
	<head>
		<title>Input FEE</title>
		<link rel='stylesheet' href='../CSS/header.css' type='text/css'/>
		<link rel='stylesheet' href='../CSS/footer.css' type='text/css'/>
		<link rel='stylesheet' href='../CSS/admin_fee_details.css' type='text/css'/>
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
						<li><a href="admin_fee_details.php">Fee Detail</a></li>
						<li><a href="admin_login.php">Sign Out</a></li>
					</ol>
				</div>
			</div>
		</div>
		
		
		<div class='detail'>
			<table>
				<tr>
					<th>Exam Roll</th>
					<th>Paid Fee</th>
					<th>Exam Fee</th>
					<th>Scholarship</th>
					<th>Action</th>
				</tr>
			<?php
				$connect = mysqli_connect('localhost','root','','fee_management') or die('Database Connection Error');
				$select = "select * from payment_details";
				$data = mysqli_query($connect,$select) or die('Selection Error');
				while($row = mysqli_fetch_assoc($data))
				{
					$roll = $row['exam_roll'];
					?>
					<tr>
						<td><?php echo $row['exam_roll'];?></td>
						<td><?php echo $row['paid_fee'];?></td>
						<td><?php echo $row['exam_fee'];?></td>
						<td><?php echo $row['scholarship'];?></td>
						<td><a href="<?php echo 'edit_fee.php?exam_roll='.$roll;?>">Edit</a></td>
			<?php	}
			?>
			</table>
			<div class='btn'>
			<a href="<?php echo 'input_fee.php';?>">Insert New</a></div>
		</div>
		
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