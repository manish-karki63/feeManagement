<?php
	session_start();
	if(isset($_SESSION['ademail']) && isset($_SESSION['adpassword'])){}
	else{
		header("location:admin_login.php?error=login_first");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<h1>WELCOME</h1>
</body>
</html>