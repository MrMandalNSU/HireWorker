<html>
    <link rel="stylesheet" type="text/css" href="../../css/Style.css">

<?php
require_once('checkfunction.php');
session_start();


if($_SERVER['REQUEST_METHOD']!="POST"){
	header("Location: HireLogin.html");
}else{
	$userid= $_POST['userid'];
	$password= $_POST['password'];
	$count = CheckID($userid);
	$userpassword = CheckPassword($userid);

	if(isset($_POST['submit'])){
	$_SESSION['id']=$userid;	
}

	if($count>0){
		if($userid== $userid && $password==$userpassword ){
		$_SESSION['userid'] =$userid;
		$_SESSION['password'] =$password;
		header("Location:customerloginsuccess.php");
		
	}else{
		echo "<p background-catagory' class='errormsg'>Invalid Password!<a href='HireLogin.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
		}
	}else{
		echo "<p background-catagory' class='errormsg'>Invalid User Name!<a href='HireLogin.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
	}
}
	?>
	</html>