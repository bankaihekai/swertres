<?php
	///login validator
	session_start();
	include("database.php");
	
	if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        

        if($username != null & $password != null){
            $row = getrecord($username,$password);
            if($row > 0){
                $_SESSION['user'] = $username;
                header("location: userlists.php");
                die;
            }
        
        }else{
            header("location: adminlogin.php?message=Please input Credentials");
        }
    }
?>