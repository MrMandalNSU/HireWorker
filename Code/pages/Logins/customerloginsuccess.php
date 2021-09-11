<?php 
session_start();
if(empty($_SESSION['userid'])){
  header("Location:HireLogin.html");
  }
  else{ 
      header("Location:../AfterLogin/CustomerInterface/Catagory.html");
  }

?>