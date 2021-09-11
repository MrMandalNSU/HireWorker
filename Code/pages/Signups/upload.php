<?php
session_start();
include_once'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Upload</title>
    <link rel="stylesheet" type="text/css" href="../../css/Style.css">
    <title>Image Upload</title>
</head>
<body>

<?php
include_once'connection.php';
if (!$connection){
die('Connect Error:'. mysqli_connect_error());
}
else{ 
  if(isset($_SESSION['id'])){
    if(isset($_POST['submit'])){
      $file = $_FILES['file'];
      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];
      

      $userid = $_SESSION['id'];
      $usercatagory = $_SESSION['catagory'];
     $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $text = mysqli_real_escape_string($connection, $_POST['image_text']);

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt, $allowed)){
      if($fileError === 0){
        if($fileSize < 1000000){
          $fileNameNew = uniqid('',true).".".$fileActualExt;
          $fileDestination = 'uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          $sql= "INSERT INTO images VALUES ('$userid','$usercatagory','$fileDestination', '$text')";
          $result = mysqli_query ($connection, $sql);
          header("Location: msg.html");
          
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

  <div class="signupbox2" >
    <img src="../../images/avatar.png" class="avatar">
        <h1>You Are Almost Done</h1>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <p>Upload A Profile Picture</p>
            <input type="file" name="file">
            <p>Update Your Bio</p>
            <textarea id="text" cols="40" rows="4" name="image_text" placeholder="Write about your skill..."></textarea>
            <input type="submit" name="submit" value="Post">
        </form>     
    </div>
</body>
</html>