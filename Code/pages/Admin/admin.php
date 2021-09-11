<?php
session_start();

require_once'checkfunction.php';

$_SESSION["LoginMessage"]="";

if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['userid']) && $_POST['password'] ){
	$userid= $_POST['userid'];
	$password= $_POST['password'];
	
	if(CheckPassword($userid,$password)==true){
		$_SESSION["loginProfile"]="Admin";
		$_SESSION["LoginMessage"]="Login Successful";
		
		header("Location: profile.php");
        
	}
	else{
	$_SESSION["LoginMessage"]="Invalid ID or Password";
	}
}
if(isset($_GET["logout"]) && $_GET["logout"]==1 ){
    session_unset();
}

?>


<!DOCTYPE>
<html>
<head>
<title>Admin Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="../../css/Style.css">
    
<a  href="../../index.html" style="text-decoration: none" ><button class="buttonA" type="home" >Home Page</button></a><br>
<style type="text/css">
    body{
    margin: 0;
    padding: 0;
    background: url(../../images/admin.png);
    background-size: cover;
    background-repeat: no-repeat;
    }
</style>
<body>
    <div class="loginbox">
    <img src="../../images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p>User Id</p>
            <input type="text" name="userid" placeholder="Enter User Id">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="../ChangePassword/CustomerPassChange.html">Lost your password?</a><br>

        </form>
        <h4><?php echo $_SESSION["LoginMessage"];?>  </h4>
    </div>

</body>



</head>
</html>
