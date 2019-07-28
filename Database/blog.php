<?php
	if(isset($_SESSION['email']) && isset($_SESSION['password'])){}
else{
    header("location:login.php?error=login_first");
    exit;
}
?>