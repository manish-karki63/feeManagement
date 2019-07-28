<?php
	session_start();
	$message = "";

	if( isset($_GET['error'])){
		if( $_GET['error'] == "login_first" ){
			$message = "Login First";
		}
	}
	require('Database/login_db.php' );
	if(isset($_POST['login']))
	{
		$select = "select email,password from register";
		$data = mysqli_query($connect,$select) or die('Selection Error');
		$email = $_POST['email'];
		$password = $_POST['password'];
		$_SESSION['email']=$email;
		$_SESSION['password']=$password;
		while($arr=mysqli_fetch_assoc($data))
		{
			if($_SESSION['email'] == $arr['email'] && $_SESSION['password'] == $arr['password']){
				header('refresh:0,URL=fee_info.php');
				exit;
			}
			else{
				$message = "Username or Password Invalid";
			}
		}	
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel='stylesheet' href='CSS/header.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/login.css' type='text/css'/>
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
		
		<!--Login Form-->
		<div class="login-form">
			<div class="login-form-wrapper">
				<h3>Enter Your Email and Password</h3>
				<form action='' method='post' enctype=''>
					<?php if($message){?>
					<div><?php echo $message;?></div><?php } ?>
					<div class="input-group">
						<label>Email</label>
						<input type='email' name='email' placeholder="Your Email Here"/>
						<span class="email-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<label>Password</label> 
						<input type='password' name='password' placeholder="Your Password Here"/>
						<span class="password-msg" style="color: red;"></span>
					</div>
					<div class="button">
						<input type="submit" name="login" value="Login"/>
						<a href='reset_password.php'>
						<input type="button" name="forgetpsw" value="Forget Password"/></a>
					</div>
				</form>
			</div><!--login-form-wrapper-->
		</div><!--login-form-->
		
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