<?php
include "dbconnection.php";
$id=$_GET["id"];
$userdata=mysqli_query($conn,"SELECT * FROM `user` WHERE id=$id");

$userdata=mysqli_fetch_array($userdata);
// echo "<pre>";
// print_r($userdata);exit;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> -->
</head>
<body>
  <div class="container mt-4">
    <div class="text-center"><h3>Registration Form</h3></div>
    <form action="update.php" method="post" enctype="multipart/form-data">
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" value="<?php echo $userdata["name"] ?>" name="name">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo $userdata["email"] ?>" name="email">
        </div>
      </div>

        <div class="col-md-6">
          <label for="mobile" class="form-label">Mobile Number:</label>
          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number" value="<?php echo $userdata["mobile"] ?>"  >
        </div>
      </div>

      <div class="row mb-3">

      <div class="col-md-2">
          </div>
        <div class="col-md-8">
          <label for="image" class="form-label">Picture:</label>
          <input type="file" class="form-control" id="image" name="fileToUpload">
          
          <div ><img src="<?php echo $userdata["image"]?>" alt='Uploaded Image' class="form-control mt-4" style='max-width: 100px;'> </div>
        </div>

        <div class="col-md-2">
          </div>
          
      </div>


      <div>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id?>">
        </div>

      <div class="row">
        <div class="col-md-12 text-center ">
        <!-- <div class="col-12 text-center"> -->
          <button type="submit" value="Upload Image" name="Update" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>