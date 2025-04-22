<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-4">
    <div class="text-center"><h3>Login Form</h3></div>
    
    <form action="login_action.php" method="post" enctype="multipart/form-data">
      <div class="row mb-3">

      <div class="col-md-4 ">
      </div>

        <div class="col-md-4 ">
        <label for="email">Email:</label>
        <input type="email" class="form-control " id="email" placeholder="Enter email" name="email">
        </div>

        <div class="col-md-4 ">
      </div>
        
      </div>

      <div class="row mb-3">

      <div class="col-md-4 ">
      </div>

        <div class="col-md-4">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        
        <div class="col-md-4 ">
      </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center ">
        <!-- <div class="col-12 text-center"> -->
          <button type="submit"  name="Login" class="btn btn-primary">LOGIN</button>
          <div><a href="registeruser.php"> If not have account register here</a></div>
        </div>
        
      </div>


</body>
</html>
