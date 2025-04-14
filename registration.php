<?php
include "dbconnection.php";
if(isset($_POST["submit"])){

$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$mobile = $_POST['mobile'];
// print_r($mobile);exit;
$tmp_name=$_FILES["fileToUpload"]["tmp_name"];
$file_Name=$_FILES["fileToUpload"]["name"];

$des_path="uploadImage/".$file_Name;//iska mtlab jab move karwayene folder to name yahi rahe
// yha temname to move kaewayenge uploade floder me ur name se hi
move_uploaded_file($tmp_name, "uploadImage/".$file_Name);

$insert=mysqli_query($conn, "INSERT INTO `user`( `name`, `email`, `password`, `mobile`, `image`) VALUES ('$name','$email','$password','$mobile','$des_path')");
if($insert){
    header("Location: index.php");
    exit;
}else{
echo "not inserted sucessfully something is wrong "  ;
}


}





?>