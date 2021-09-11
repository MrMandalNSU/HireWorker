<html>
<div class="backgrounderror">
    <link rel="stylesheet" type="text/css" href="../../css/Style.css">


<?php
session_start();
include_once'connection.php';



 $username = filter_input(INPUT_POST, 'userid');
 $password = filter_input(INPUT_POST, 'password');
 $firstname = filter_input(INPUT_POST, 'fname');
 $lastname = filter_input(INPUT_POST, 'lname');
 $phone = filter_input(INPUT_POST, 'phone');
 $email = filter_input(INPUT_POST, 'mail');
 $gender = filter_input(INPUT_POST, 'gender');
 $catagory = filter_input(INPUT_POST, 'catagory');
if(isset($_POST['submit'])){
	$_SESSION['id']=$username;	
	$_SESSION['catagory']= $catagory;
}
if (!empty($firstname)){
if (!empty($lastname)){
if (!empty($username)){
if (!empty($password)){
if (!empty($phone)){
if (!empty($email)){


if (!$connection){
die('Connect Error:'. mysqli_connect_error());
}
else{$sql = "INSERT INTO worker values ('$username','$password','$firstname','$lastname', '$email','$phone','$gender','$catagory')";
if ($connection->query($sql)){
	header("Location: upload.php") ;
}
else{
echo "<p class='errormsg'>User Name already exists.<a href='Signup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
}
$connection->close();
}
}
else{
echo "<p class='errormsg'>Email ID required.<a href='Signup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
die();
}
}
else{
echo "<p class='errormsg'>Phone Number required.<a href='Signup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
die();
}
}
else{
	echo "<p class='errormsg'>Password required.<a href='Signup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
	
die();
}
}
else{
echo "<p class='errormsg'>National Id required.<a href='Signup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
die();
}
}
else
	echo "<p class='errormsg'>Full Name required.<a href='Signup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
die();

}
else{
echo "<p class='errormsg'>Full Name required.<a href='Signup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";

die();
}
?>
</div>
</html>

