<html>
<body style="background: rgba(197, 201, 224);">
<div class="timeline" style="background: white;">
    <link rel="stylesheet" type="text/css" href="../../css/Style.css">

<div class="TimelineContainer" >
<div class = "timelinebox-1" id="sitename"> 
   <h1 class="timelinetext">HIRE WORKER!</h1>
</div>
</div>
<?php
session_start();
include_once'connection.php';

if (!$connection){
die('Connect Error:'. mysqli_connect_error());
}
else{ 

    $userid= $_SESSION['username'];
    
    $sql="Select * from worker w, images e where e.UserID = '$userid' AND w.UserID = '$userid'" ;

    $result=mysqli_query($connection,$sql);
    $count = mysqli_num_rows($result);
    }
    while($rows=mysqli_fetch_array($result))
        {
        	echo "<img src='../Signups/{$rows['image']}' id= 'profilepictures'/>";
        	?><p class="timelinename" id="timelinename"><?php echo  $rows['First Name'],' ',$rows['Last Name'];?> </p> <?php
        	?><p class="timelinecat" id="timelinecat"><?php echo  $rows['WorkingCatagory'];?> </p> <?php
        }

?>
<div class="Pop-Signup" id="popup1">
   <div class="Signupcontent">
       <div class="signupchoicebox">
       	<a href="#" class="closesymbol" style="text-decoration: none" >&times;</a>
         <form id="changebutton" method="POST" action="ppchange.php" enctype="multipart/form-data">
            <input type="file" name="file">
            <input id="postbutton" type="submit" name="submit" value="Post">
            
        </form>
       </div>
   </div>
</div>
	<a href="#popup1" style="text-decoration: none" ><button id="changebutton2">Change</button></a>

  <a href="workerlogout.php"text-decoration: none" ><button class="buttoncat" type="logout">Logout</button></a><br>
<div class="ReviewContainer" >
  <table>
  <th> Review </th>
  <th> Rating </th>
  <tr>
    <td>
      
    </td>
    <td>
      
    </td>
  </tr>
</table>

</div>




</div>
</body>
</html>