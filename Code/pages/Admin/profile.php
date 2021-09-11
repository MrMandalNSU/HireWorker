<?php
session_start();
require_once'checkfunction.php';if(isset($_SESSION["loginProfile"])&& $_SESSION["loginProfile"]=="Admin"){
  $message="Welcome Admin";

}else{
  $message="You are Unauthorized";
}
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="../../../css/Style.css">
<style type="text/css">
       body{
    margin: 100;
    padding: 100;
    background: url(../../images/admin.png);
    background-size: cover;
    background-repeat: no-repeat;
    }
</style>

<div class="timeline" style="background: white;">
<link rel="stylesheet" type="text/css" href="../../css/Style.css">
<div class="TimelineContainer" >
<div class = "timelinebox-1" id="sitename"> 
<h1 class="timelinetext">HIRE WORKER!</h1>
<h1><?php echo $message; ?></h1>
<?php
if(isset($_SESSION["loginProfile"])&& $_SESSION["loginProfile"]=="Admin"){ ?>
  <a href="admin.php?logout=1" ><button class="buttoncat" type="logout">Logout</button></a><br>
  <table class="table1"> 
    <tr>
      <th> User</th>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
    <?php $allUserData=GetAllCustomer(); 
      while($row=$allUserData->fetch_assoc()){?>
       <tr>
        <td><?php echo $row["First Name"] ?></td>
        <td><?php echo $row["Last Name"] ?></td>
        <td><?php echo $row["Email"] ?></td>
        <td><?php echo $row["Phone"] ?></td>
      </tr>
      <?php }
     ?>
  </table>
  <table class="table1"> 
      <tr>
      <th>  Worker</th>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Gender</th>
      <th>Working Catagory</th>

    </tr>
     <?php $allUserData=GetAllworker(); 
      while($row=$allUserData->fetch_assoc()){?>
       <tr>
        <td><?php echo $row["First Name"] ?></td>
        <td><?php echo $row["Last Name"] ?></td>
        <td><?php echo $row["Email"] ?></td>
        <td><?php echo $row["Phone"] ?></td>
        <td><?php echo $row["Gender"] ?></td>
        <td><?php echo $row["WorkingCatagory"] ?></td>
        
      </tr>
      <?php }
     ?>
    
    

  </table>

<?php
 }else{

  header("Location:admin.php");
}
?>


</div>
</div>
</head>
</html>