<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> -->
</head>
</body>
<?php include "navbar.php" ?>
    <div class="container mt-4">

  

    <div class="row mb-3">

    <div class="col-md-3">
     </div>

    <div class="col-md-6">
    <h4>Upload Excel File (.xlsx)</h4>
    <form action="import_action.php" method="post" enctype="multipart/form-data">
        <input type="file" name="excel_file" accept=".xlsx, .xls">
        <input type="submit" name="submit" value="Import">
    </form>
</div>
<div class="col-md-3">
     </div>
</div>
</div>
</body>
</html>
