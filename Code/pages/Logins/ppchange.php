<?php
include_once'connection.php';
session_start();

if (!$connection){
die('Connect Error:'. mysqli_connect_error());
}
else{ 
  if(isset($_SESSION['username'])){
    if(isset($_POST['submit'])){
      $file = $_FILES['file'];
      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];
      

      $useRId = $_SESSION['username'];
     $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt, $allowed)){
      if($fileError === 0){
        if($fileSize < 1000000){
          $fileNameNew = uniqid('',true).".".$fileActualExt;
          $fileDestination = 'uploads/'.$fileNameNew;
          $fileDestinationNew = '../Signups/uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestinationNew);
          $sql= "update images set image='$fileDestination' where UserID='$useRId'";
          $result = mysqli_query ($connection, $sql);
          header("Location: msg2.html");
          
        }else{
          echo "Your file is too large!";
        }
      }else{
        echo "There was an error uploading your file!";
      }
    }else{
      echo "You cannot upload files of this type!";
    }
  }
  }
}
?>