
<html>
<div class="timeline">
    <link rel="stylesheet" type="text/css" href="../../../css/Style.css">


<?php
session_start();
include_once'connection.php';

if (!$connection){
die('Connect Error:'. mysqli_connect_error());
}
else{ 

    $userid= $_SESSION['id'];
    $sql="Select * from worker w, images e where w.UserID = e.UserID AND w.WorkingCatagory like '%Electrician%'" ;

    $result=mysqli_query($connection,$sql);
    $count = mysqli_num_rows($result);
    }
    while($rows=mysqli_fetch_array($result))
        {
        	echo "<img src='../../Signups/{$rows['image']}' id= 'profilepictures'/>";
        }

?>



</div>
</html>