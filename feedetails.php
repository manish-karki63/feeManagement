<!DOCTYPE html>
<html>
	<head>
		<title>FEE Details</title>
		<link rel='stylesheet' href='CSS/header.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/footer.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/fee_details.css' type='text/css'/>
		<link rel="stylesheet" href="CSS/fontAwesome/css/font-awesome.css" type="text/css"/>
	</head>
	<body>
		<div class="inner-header-wrapper" style="">
			<div class="logo">
				<a href="#"><img src="images/logo.png" alt="logo"/></a>
			</div>
			<div class="inner-header">
				<div class="title">
					<a href="">FEE MANAGEMENT SYSTEM</a>
				</div>
				<div class="nav-menu">
					<ol>
						<li><a href="fee_info.php">Home</a></li>
						<li><a href="feedetails.php">Fee Detail</a></li>
						<li><a href="login.php">Sign Out</a></li>
					</ol>
				</div>
			</div>
		</div>
		
		<div class='detail'>
			<table>
				<?php
					session_start();
					$roll = $_SESSION['roll'];
					$connect = mysqli_connect('localhost','root','','fee_management');
					$select = "select * from payment_details where exam_roll = '$roll'";
					$data = mysqli_query($connect,$select) or die('Selection Error');
					$arr = mysqli_fetch_assoc($data);
					$due = $arr['full_fee'] - $arr['paid_fee'];
					if(isset($_POST['submit'])){
						
					}
					echo "<tr><td>Name: </td><td>".$_SESSION['name']."</td></tr>";
					echo "<tr><td>Exam Roll:</td><td>".$arr['exam_roll']."</td></tr>";
					echo "<tr><td>Paid Fee:</td><td>".$arr['paid_fee']."</td></tr>";
					echo "<tr><td>Exam Fee:</td><td>".$arr['exam_fee']."</td></tr>";
					echo "<tr><td>Full Fee:</td><td>".$arr['full_fee']."</td></tr>";
					echo "<tr><td>Due:</td><td>".$due."</td></tr>";
					echo "<tr><td>Scholarship:</td><td>".$arr['scholarship']."</td></tr>";
				?>
			</table>
			<div class="btn">
				<select name='semester'>
				<?php for($i=1;$i<=8;$i++){?>
				<option value="<?php echo $i;?>">
				<?php echo "Upto ".$i." Sem";?></option>
				<?php }?>
				</select>
				<button>Go</button>
			</div>
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