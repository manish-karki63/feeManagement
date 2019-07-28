<?php
	$a=array('1st','2nd','3rd','4th','5th','6th','7th','8th');
	$val=array('one','two','three','four','five','six','seven','eight');
	include('Database/fee_db.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FEE PAYMENT FORM</title>
		<link rel='stylesheet' href='CSS/header.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/fee.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/footer.css' type='text/css'/>
		<link rel='stylesheet' href='CSS/button.css' type='text/css'/>
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
						<li><a href="fee_info.php">Home</a></li>
						<li><a href="feedetails.php">Fee Detail</a></li>
						<li><a href="login.php">Sign Out</a></li>
					</ol>
				</div>
			</div>
		</div>
		
		<!--FEE Form-->
		<div class="fee-form">
			<div class="fee-form-wrapper">
				<h3>Enter Fee Details</h3>
				<form action='' method='post' enctype='multipart/form-data'>
					<div class='input-group'>
						<label>Name</label>
						<input type='text' name='name' placeholder="Your Name Here"/>
						<span class="name-msg" style="color: red;"></span>
					</div>
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
						<label>Batch</label>
						<input type='text' name='batch' placeholder="Your Batch Here"/>
						<span class="batch-msg" style="color: red;"></span>
					</div>
					<div class="input-group">
						<div class="faculty">
							<label>Faculty</label>
							<select name='faculty'>
								<option value="BIM">BIM</option>
								<option value="BBA">BBA</option>
							</select>
						</div>
						<div class="semester">
							<label>Semester</label>
							<select name='semester'>
							<?php
								for($i=0;$i<8;$i++)
									echo "<option value='$val[$i]'>".$a[$i]."</option>";
							?>
							</select>
						</div>
					</div>
					<div class="input-group">
						<label>Image</label> 
						<input type='file' name='image' accept="image/*"/>
						<span class="image-msg" style="color: red;"></span>
					</div>
					<div class='button'>
						<input type="submit" name="submit" value="Submit"/>
					</div>
				</form>
			</div><!--fee-form-wrapper-->
		</div><!--fee-form-->
		
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