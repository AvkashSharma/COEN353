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
  <h1 class="display-4">Appointment Details by Patient</h1>
  <h5>Get details of all appointments of a given patient.</h5>
</div>

<div class="container"> 
    <div class="card">
      <div class="card-body">    
      <form action="appointmentDetailsByPatient.php" method="GET">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="did" placeholder="Enter Patient ID">
            </div>
            <input type="submit">
          </div>
        </form>        
        <br> 
            <?php
            //Get ID from request
            $id = isset($_GET['did']) ? (int)$_GET['did'] : 0;
            
              // Get details of all appointments of a given patient.
              $sql = "SELECT appointments.clinic_id AS 'Clinic ID',  clinics.address AS 'Clinic Address',
              appointments.appointment_status AS 'Status',
              appointments.appointment_dateTime AS 'Appointment Time', patients.first_name AS 'Patient First Name',
              patients.last_name AS 'Patient Last Name'
              FROM patients
              JOIN appointments ON patients.patient_id = appointments.patient_id
              JOIN clinics ON clinics.clinic_id = appointments.clinic_id
              WHERE patients.patient_id = '".$id."'
              GROUP BY appointments.appointment_dateTime, appointments.appointment_id
              ORDER BY appointments.appointment_dateTime, appointments.appointment_id;
              ";

              // Make query and get result
              $result = mysqli_query($conn,$sql);

              // Check if there are any results returned by the query
              $resultCheck = mysqli_num_rows($result);
          ?>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Patient First Name</th>
              <th scope="col">Patient Last Name</th>
              <th scope="col">Appointment Time</th>
              <th scope="col">Status</th>   
            </tr>
          </thead>
          <?php
            if($resultCheck > 0 ){
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tbody>
              <tr>
                <td><?php echo $row['Patient First Name']; ?></td>
                <td><?php echo $row['Patient Last Name']; ?></td>
                <td><?php echo $row['Appointment Time']; ?></td>
                <td><?php echo $row['Status']; ?></td>
              </tr>
            </tbody>    
            <?php
          }
        }
      ?>
        </table>
      </div>
    </div>

    <br>
    <a href="index.php" class="btn btn-primary">Back</a>
</div>


  
</body>
</html>