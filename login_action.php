<?php


include "dbconnection.php";
if(isset($_POST["Login"])){
  $email=$_POST["email"];
  $password=$_POST["password"];
//   print_r($password);exit;

  $getdata=mysqli_query($conn," SELECT * FROM `user` WHERE email='$email '");
  if($user=mysqli_fetch_array($getdata)){

  if (password_verify($password, $user['password'])) {
  
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    header("Location: index.php");

     }else {
    $_SESSION['error'] = "Incorrect password.";
   }


 }else {
    $_SESSION['error'] = "User not found.";
 }


}

// header("Location: login.php");
?>