<?php
require_once'checkfunction.php';
require_once 'connection.php';
session_start();



if (!$connection){
die('Connect Error:'. mysqli_connect_error());
}
else{ 
    if(isset($_SESSION['id'])){

    $userid= $_SESSION['id'];
    $sql="Select * from worker w, images e where w.UserID = e.UserID AND w.WorkingCatagory like '%Faculty%'" ;

    $result=mysqli_query($connection,$sql);
    $count = mysqli_num_rows($result);

    
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <head>
    <title>Electricians</title>
    <link rel="stylesheet" type="text/css" href="../../../css/Style.css">
</head>
    </head>
<body style="background: url(../../../images/Catback.jpg); background-repeat: no-repeat; background-size: 100%; background-attachment: fixed; " >
    <div class="Pop-Signup" id="popup1">
   <div class="Signupcontent">
       <div class="signupchoicebox">
         <a href="#" class="closesymbol" style="text-decoration: none" >&times;</a>
         <a href="#popup2" style="text-decoration: none" ><button class="buttonC" type="home">Call</button></a>
         <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" style="text-decoration: none" ><button class="buttonC1" type="signup">Send Email</button></a>
       </div>
   </div>
</div>

    <?php
    if($count == 0){
            echo "<p class='errormsg'>Sorry, There Is No Worker Under This Catagory.<a href='catagory.html' style='text-decoration: none '><button class='okbutton' type='home'>Go Back</button> </a> </p>";
        }
        while($rows=mysqli_fetch_array($result))
        {
    ?>        
         <table class="table">
        <tr>
            <th rowspan="2"><?php echo "<img src='../../Signups/{$rows['image']}' id= 'profilepic'/>" ?></td>
            <th> Name </th>
            <th> Email </th>
            <th> Phone </th>
            <th> Gender </th>
            <th> Working Catagory </th>
            <th> Bio</th>
            <th> Contact </th>
        </tr>
            <tr>
   
                
                <td><?php echo $rows['First Name'],' ',$rows['Last Name'] ?> </td>
                <td><?php echo $rows['Email']; ?></td>
                <td><?php echo $rows['Phone']; ?></td>
                <td ><?php echo $rows['Gender']; ?></td>
                <td><?php echo $rows['WorkingCatagory']; ?></td>
                <td><?php echo $rows['text']; ?></td>
                <td><a href="#popup1"><button class="buttoncontact">Hire Now</button></a></td>
            </tr>
           </table>
           <div class="Pop-Signup" id="popup2">
        <div class="Signupcontent">
       <div class="signupchoicebox">
        <a href="#" class="closesymbol" style="text-decoration: none" >&times;</a>
        <p class="callthis"><?php echo "Call This Number To Hire:"; ?> </p>
         <p class="callthis"><?php echo $rows['Phone']; ?> </p>
       </div>
   </div>
</div>
    <?php     
    }
    ?>    
    
<a href="../../Logins/logout.php"text-decoration: none" ><button class="buttoncat" type="logout">Logout</button></a><br>

    <footer id="catfooter" >
    <p>Copyright &copy; 2021 Hire Worker</p>
    </footer>
</body>
</html>