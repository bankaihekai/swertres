<?php
	///studentlist.php
	require("database.php");
	session_start();
	if($_SESSION['user']==null) header("location:adminlogin.php?message=LOGIN PROPERLY");
    echo "Welcome user ". $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello hello hello

<a href="logout.php">LOGOUT</a>
</body>
</html>