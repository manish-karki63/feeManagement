<?php
	$cpsw = '';
	include('Database/password_reset_db.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Reset Password</title>
		<link rel='stylesheet' href='CSS/header.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/password.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/button.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/footer.css' type='text/css'/>
		<link rel="stylesheet" href="CSS/fontAwesome/css/font-awesome.css" type="text/css"/>
		<script>
			function returnEmail(control){
				roll = control.value;
				if(roll.length<7)
				{
					control.nextSibling.innerHTML = "Incomplete Roll";
					
				}else{
					control.nextSibling.innerHTML = "";
				ajax = new XMLHttpRequest();
				ajax.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById('email').value = this.responseText;
					}
				};
				ajax.open("GET","emailFromDb.php?roll="+roll,true);
				ajax.send();
			}
			}
		</script>
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
		
		<!--Reset Password Form-->
		<div class="password-form">
			<div class="password-form-wrapper">
				<h3>Reset Password</h3>
				<form action='' method='post' enctype=''>
					<div class='input-group'>
						<label>Exam Roll</label>
						<input type='text' name='roll' placeholder="Your Roll Here" onchange="returnEmail(this);"/><span class="roll-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>Email</label>
						<input type='email' id="email" name='email' placeholder="Your Email Here"/>
						<span class="email-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>Password</label> 
						<input type='password' name='password' placeholder="Your Password Here"/>
						<span class="password-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label> Confirm Password</label> 
						<input type='password' name='cpassword' placeholder="Your Password Here"/>
						<?php if($cpsw!=''){ ?>
						<span class="cpassword-msg" style="color: red;"></span><?php } ?>
					</div>
					<div class="button">
						<input type="submit" name="reset" value="Reset Password"/>
					</div>
				</form>
			</div><!--Password-form-wrapper-->
		</div><!--Forget-password-form-->
		
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