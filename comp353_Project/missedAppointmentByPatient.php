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
      <h1 class="display-4">Missed Appointments by Patient</h1>
      <h5>Get the number of missed appointments for each patient.</h5>
    </div>

    <div class="container"> 
      <div class="card">
        <div class="card-body">      
          <?php
            // Get the number of missed appointments for each patient (only for patients who have missed at least 1 appointment)
            $sql = "SELECT patients.first_name AS 'Patient First Name', patients.last_name AS 'Patient Last Name',
            COUNT(appointment_id) AS 'Number of Missed Appointments'
            FROM patients
            JOIN appointments ON appointments.patient_id = patients.patient_id
            WHERE appointments.appointment_status = 'Missed'
            GROUP BY patients.patient_id
            ORDER BY patients.patient_id;
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
                <th scope="col">Number of Missed Appointments</th>
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
                <td><?php echo $row['Number of Missed Appointments']; ?></td>
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