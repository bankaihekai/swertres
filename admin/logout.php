<?php
	///logout.php
	session_start();
	session_unset();
	session_destroy();
	header("location:adminlogin.php?message=LOGGED OUT");

?>