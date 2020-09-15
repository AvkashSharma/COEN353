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
      <h1 class="display-4">Treatment details during a given appointment</h1>
      <h5>Get details of all the treatments made during a given appointment.</h5>
    </div>

    <div class="container"> 
      <div class="card">
        <div class="card-body">  
        <form action="treatmentByAppointment.php" method="GET">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="date" placeholder="Enter Date and Time">
            </div>
            <input type="submit">
          </div>
        </form>        
        <br> 

          <?php

          //Get Date from request
          $date = isset($_GET['date']) ? $_GET['date'] : '200'; 

            // Get details of all the treatments made during a given appointment
            $sql = "SELECT treatments.treatment_name AS 'Treatment Name', treatments.treatment_cost AS 'Treatment Cost',
            treatments.treatment_date AS 'Treatment Date', patients.first_name AS 'Patient First Name',
            patients.last_name AS 'Patient Last Name',
            CONCAT(E3.first_name, ' ', E3.last_name) AS 'Treatment Assigned By Dentist',
            IFNULL(CONCAT(E1.first_name, ' ', E1.last_name), CONCAT(E2.first_name, ' ', E2.last_name)) AS 'Treated By'
            FROM treatments
            JOIN appointments ON appointments.appointment_id = treatments.appointment_id
            JOIN patients ON patients.patient_id = appointments.patient_id
            LEFT JOIN dentists D1 ON D1.dentist_id = treatments.treated_by_dentist
            LEFT JOIN assistants ON assistants.assistants_id = treatments.treated_by_assistance
            JOIN dentists D2 ON D2.dentist_id = treatments.treatment_assigned_by_dentist
            LEFT JOIN employees E1 ON E1.employee_id = D1.dentist_id
            LEFT JOIN employees E2 ON E2.employee_id = assistants.assistants_id
            JOIN employees E3 ON E3.employee_id = D2.dentist_id
            WHERE appointments.appointment_dateTime LIKE '%$date%'
            GROUP BY treatments.treatment_id
            ORDER BY treatments.treatment_id;";

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
                <th scope="col">Treatment Name</th>
                <th scope="col">Treatment Cost</th>
                <th scope="col">Treatment Date</th>
                <th scope="col">Assigned by</th>
                <th scope="col">Treatment by</th>
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
                <td><?php echo $row['Treatment Name']; ?></td>
                <td><?php echo $row['Treatment Cost']; ?></td>
                <td><?php echo $row['Treatment Date']; ?></td>
                <td><?php echo $row['Treatment Assigned By Dentist']; ?></td>
                <td><?php echo $row['Treated By']; ?></td>
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