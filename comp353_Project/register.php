<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
   include_once 'includes/dbh.inc.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dentist Co.</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class = "container">
    <h1>Register Patient</h1>
    <form action="registerPatient.php" method="POST">
      <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" name="first" placeholder="First Name">
      </div>
      <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" name="last" placeholder="Last Name">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" name="phone" placeholder="Phone">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Address">
      </div>
      <button type="submit" class="btn btn-primary" name="registerPatient">Submit</button>
    </form>
  </div>
</body>
</html>