<html>
<div class="backgrounderror">
    <link rel="stylesheet" type="text/css" href="../../css/Style.css">


<?php

 $username = filter_input(INPUT_POST, 'userid');
 $password = filter_input(INPUT_POST, 'password');
 $firstname = filter_input(INPUT_POST, 'fname');
 $lastname = filter_input(INPUT_POST, 'lname');
 $phone = filter_input(INPUT_POST, 'phone');
 $email = filter_input(INPUT_POST, 'mail');

if (!empty($username)){
if (!empty($password)){
if (!empty($firstname)){
if (!empty($lastname)){
if (!empty($phone)){
if (!empty($email)){


$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'hireworker';
// Create connection
$connection = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);
if (!$connection){
die('Connect Error:'. mysqli_connect_error());
}
else{$sql = "INSERT INTO customer values ('$username','$password','$firstname','$lastname', '$email','$phone')";
if ($connection->query($sql)){
echo "<p class='errormsg'>You have successfully signed up.<a href='../Logins/HireLogin.html' style='text-decoration: none '><button class='okbutton' type='home'>Login Now</button> </a> </p>";
}
else{
echo "<p background-catagory' class='errormsg'>User Name already exists.<a href='HireSignup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
}
$connection->close();
}
}
else{
echo "<p class='errormsg'>Email ID required.<a href='HireSignup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
die();
}
}
else{
echo "<p class='errormsg'>Phone Number required.<a href='HireSignup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
die();
}
}
else{
echo "<p class='errormsg'>Full Name required.<a href='HireSignup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
die();
}
}
else{
echo "<p class='errormsg'>Full Name required.<a href='HireSignup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
die();
}
}
else{
echo "<p class='errormsg'>Password required.<a href='HireSignup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";
die();
}
}
else{
echo "<p class='errormsg'>User Id required.<a href='HireSignup.html' style='text-decoration: none '><button class='okbutton' type='home'>Try Again</button> </a> </p>";

die();
}
?>
</div>
</html>

