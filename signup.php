<?php
	include('Database/signup_db.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<link rel='stylesheet' href='CSS/header.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/signup.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/button.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/footer.css' type='text/css'/>
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
						<li><a href="login.php">Login</a></li>
						<li><a href="signup.php">Sign Up</a></li>
					</ol>
				</div>
			</div>
		</div>
		
		<!--Sign Up Form-->
		<div class="signup-form">
			<div class="signup-form-wrapper">
				<h3>Enter Your Details</h3>
				<form action='' method='post' enctype=''>
					<div class='input-group'>
						<label>Name</label>
						<input type='text' name='name' placeholder="Your Name Here"/>
						<span class="name-msg" style="color: red;"></span>
					</div>
					<div class='input-group'>
						<label>Exam Roll</label>
						<input type='text' name='roll' placeholder="Your Roll Here"/>
						<span class="roll-msg" style="color: red;"></span>
					</div>
					<div class='input-group'>
						<label>Contact Number</label>
						<input type='text' name='phone' placeholder="Your Phone Number Here"/>
						<span class="phone-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>Email</label>
						<input type='email' name='email' placeholder="Your Email Here"/>
						<span class="email-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<div class="faculty">
							<label>Faculty</label>
							<select name='faculty'>
								<option value="BIM">BIM</option>
								<option value="BBA">BBA</option>
							</select>
						</div>
					</div>
					<div class="input-group">
						<label>Batch</label> 
						<input type='text' name='batch' placeholder="Your Batch Year Here"/>
						<span class="batch-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>Password</label> 
						<input type='password' name='password' placeholder="Your Password Here"/>
						<span class="password-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label> Confirm Password</label> 
						<input type='password' name='cpassword' placeholder="Your Password Here"/>
						<span class="cpassword-msg" style="color: red;"></span>
					</div>
					<div class="button">
						<input type="submit" name="signup" value="Sign up"/>
					</div>
				</form>
			</div><!--signup-form-wrapper-->
		</div><!--signup-form-->
		
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