<?php
  include_once 'includes/dbh.inc.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
  <body>

    <div class="container">
      <h1 class="display-4">Update an appointment</h1>
    </div>

    <div class="container">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="form-group">
          <label for="appointmentID">Enter Appointment ID to Update</label>
          <input type="text" class="form-control" name="aid" placeholder="Appointment ID">
        </div>
        <button type="submit" class="btn btn-primary" name="showbtn">Submit</button>
      </form>
    </div>

      <?php 
        if(isset($_POST['showbtn'])){
          $appt_id = $_POST['aid'];

          $sql = "SELECT * FROM appointments WHERE appointment_id = {$appt_id}";

          $result = mysqli_query($conn,$sql); 

          if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){     
      ?>

    <div class="container">
    <form action="updateData.php" method="POST">
        <div class="form-group">
          <label for="patientID">Patient ID</label>
          <input type="text" class="form-control" name="pid" value="<?php echo $row['pid'] ?>" placeholder="Patient ID">
        </div>
        <div class="form-group">
          <label for="lastName">Appointment Date and Time (2020-04-05 14:00:00)</label>
          <input type="text" class="form-control" name="aDate" value="<?php echo $row['aDate'] ?>" placeholder="Date and Time">
        </div>
        <div class="form-group">
          <label for="address">Appointment Status</label>
          <input type="text" class="form-control" name="status" value="<?php echo $row['status'] ?>" placeholder="Status">
        </div>
        <div class="form-group">
          <label for="dentistID">Dentist ID</label>
          <input type="text" class="form-control" name="did" value="<?php echo $row['did'] ?>"placeholder="Dentist ID">
        </div>
        <div class="form-group">
          <label for="receptionistID">Receptionist ID</label>
          <input type="text" class="form-control" name="rid" value="<?php echo $row['rid'] ?>" placeholder="Receptionist ID">
        </div>
        <div class="form-group">
          <label for="clinicID">Clinic ID</label>
          <input type="text" class="form-control" name="cid" value="<?php echo $row['cid'] ?>" placeholder="Clinic ID">
        </div>
        <button type="submit" class="btn btn-primary" name="updateAppointment">Submit</button>
        <a href="index.php" class="btn btn-primary">Back</a>  
        </form>  
        <?php
              }
            }
          }
        ?>
    </div>
  </body>
</html>