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
<?php include "navbar.php" ?>
  <div class="container mt-4">
    <div class="text-center"><h3>Registration Form</h3></div>
    <?php session_start(); ?>
    <p>Welcome <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : 'Rekha'; ?></p>

    <form action="registration.php" method="post" enctype="multipart/form-data">
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="pwd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <div class="col-md-6">
          <label for="mobile" class="form-label">Mobile Number:</label>
          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number" >
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-12">
          <label for="image" class="form-label">Picture:</label>
          <input type="file" class="form-control" id="image" name="fileToUpload">
        </div>
      </div>

     

      <div class="row">
        <div class="col-md-12 text-center ">
        <!-- <div class="col-12 text-center"> -->
          <button type="submit" value="Upload Image" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>




<div class="container mt-5">
<div class="text-center"><h3>Show User Data</h3></div>
<table class="table table-condensed">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>mobile number</th>
        <th>picture</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        <?php
             include "dbconnection.php";
             $result=mysqli_query($conn,"SELECT * FROM `user`");
             if ($result->num_rows > 0)
             while($row = $result->fetch_assoc()) {

                echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['mobile']}</td>
                <td><img src='{$row['image']}' alt='Uploaded Image'  style='max-width: 100px;'> </td>
                <td><a href='edit_user.php?id={$row['id']}' class='btn btn-warning'>Edit</a></td>
              <td><a href='delete_user.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>
              </tr>";
           
            
            }

           ?>
    
      
    </tbody>
  </table>
</div>
</html>
