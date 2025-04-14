<?php
include "dbconnection.php";
if(isset($_POST["Update"])){
  $id=$_POST["id"];
  $name=$_POST["name"];
  $email=$_POST["email"];
  $mobile =$_POST['mobile'];
 //   print_r( $mobile);exit;
  // print_r($_FILES);exit;
  // Check if a new image was uploaded
  if ($_FILES['fileToUpload']['name'] != '') {
   
     $tmp_name=$_FILES["fileToUpload"]["tmp_name"];
     $file_Name=$_FILES["fileToUpload"]["name"];
     $des_path="uploadImage/".$file_Name;
      // Move uploaded file
      if(move_uploaded_file($tmp_name, "uploadImage/".$file_Name)){
       // Update with new image
       $query= "UPDATE `user` SET `name`='$name',`email`='$email',`mobile`='$mobile',`image`='$des_path' WHERE id=$id ";

       }else {
        echo "Failed to upload image.";
         exit;
       }
   
   } else {
    // Update without changing image
    $query= "UPDATE `user` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE id=$id ";

  }

   // Run update query
  if (mysqli_query($conn, $query)) {
    //    echo "Record updated successfully.";
    header("location:index.php");
    exit;
    } else {
      echo "Error: " . mysqli_error($conn);
    }






};





?>