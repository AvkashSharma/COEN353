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
  <h1 class="display-4"> Delete Appointment</h1>
</div>

<div class="container"> 
    <div class="card">
      <div class="card-body">    

            <?php
            
              // Get details of all appointments of a given patient.
              $sql = "SELECT * FROM appointments;";

              // Make query and get result
              $result = mysqli_query($conn,$sql);

              // Check if there are any results returned by the query
              $resultCheck = mysqli_num_rows($result);
          ?>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Appointment ID</th>
              <th scope="col">Patient ID</th>
              <th scope="col">Dentist ID</th>
              <th scope="col">Appointment Time</th>
              <th scope="col">Status</th> 
              <th scope="col">Receptionist ID</th>   
              <th scope="col">Clinic ID</th>  
              <th scope="col">Action</th>  
            </tr>
          </thead>
          <?php
            if($resultCheck > 0 ){
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tbody>
              <tr>
                <td><?php echo $row['appointment_id']; ?></td>
                <td><?php echo $row['patient_id']; ?></td>
                <td><?php echo $row['dentist_id']; ?></td>
                <td><?php echo $row['appointment_dateTime']; ?></td>
                <td><?php echo $row['appointment_status']; ?></td>
                <td><?php echo $row['receptionist_id']; ?></td>
                <td><?php echo $row['clinic_id']; ?></td>
                <td>
                  <a href='edit.php'>Edit</a>
                  <a href='delete.php'>Delete</a>
                </td>
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