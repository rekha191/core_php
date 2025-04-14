<?php
include "dbconnection.php";
$id=$_GET["id"];
$dltdata=mysqli_query($conn,"DELETE FROM `user` WHERE id=$id");
if($dltdata){
header("location:index.php");
}
else{
echo "data not deleted sucessfully somthing went wrong";
}


?>