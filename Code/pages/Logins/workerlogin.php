<html>
    <link rel="stylesheet" type="text/css" href="../../css/Style.css">

<?php
require_once('checkfunction.php');
include_once'connection.php';
session_start();


if($_SERVER['REQUEST_METHOD']!="POST"){
	header("Location:Login.html");
}else{
	$userid= $_POST['userid'];
	$password= $_POST['password'];
	$count = CheckIDworker($userid);
	$userpassword = CheckPasswordworker($userid);

	if($count>0){
		if($userid== $userid && $password==$userpassword ){
		$_SESSION['username'] =$userid;
		$_SESSION['password'] =$password;
		header("Location: profile.php");
		
	}else{
		echo "<p background-catagory' class='errormsg'>Invalid Password!<a href='Login.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
		}
	}else{
		echo "<p background-catagory' class='errormsg'>Invalid User Name!<a href='Login.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
	}
}
	?>
	</html>