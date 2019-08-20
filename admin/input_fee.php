<?php
	include('../Database/input_fee_db.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Input FEE</title>
		<link rel='stylesheet' href='../CSS/header.css' type='text/css'/>
		<link rel='stylesheet' href='../CSS/footer.css' type='text/css'/>
		<link rel='stylesheet' href='../CSS/signup.css' type='text/css'/>
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
		
		<div id='detail'>
			
		</div>
		
		<!--Sign Up Form-->
		<div class="signup-form">
			<div class="signup-form-wrapper">
				<h3>Fee Details of Student</h3>
				<form action='' method='post' enctype=''>
					<div class='input-group'>
						<label>Exam Roll</label>
						<input type='text' name='roll' placeholder="Exam Roll Here"/>
						<span class="roll-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>Paid Fee</label> 
						<input type='text' name='paid_fee' placeholder="Paid Fee Here"/>
						<span class="paid-msg" style="color: red;">Optional For update</span>
					</div>
					<div class="input-group">
						<label>Exam Fee</label> 
						<input type='text' name='exam_fee' placeholder="Exam Fee Here"/>
						<span class="Exam-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>Full Fee</label> 
						<input type='text' name='full_fee' placeholder="Full Fee Here"/>
						<span class="full-msg" style="color: red;">Optional For update</span>
					</div>
					<div class="input-group">
						<label>Scholarship</label> 
						<input type='text' name='scholarship' placeholder="Scholarship Here"/>
						<span class="scholarship-msg" style="color: red;"></span>
					</div>
					<div class="button">
						<input type="submit" name="submit" value="Submit"/>
						<input type="submit" name="update" value="Update"/>
					</div>
				</form>
			</div><!--form-wrapper-->
		</div><!--form-->
		
		
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