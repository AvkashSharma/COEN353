<?php
  include_once 'includes/dbh.inc.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bill Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
  <body>

    <div class="container">
      <h1 class="display-4">Treatment details during a given appointment</h1>
      <h5>Get details of all unpaid bills.</h5>
    </div>

    <div class="container"> 
      <div class="card">
        <div class="card-body">      
          <?php
            // Get details of all unpaid bills
            $sql = "SELECT invoices.invoice_id AS 'Invoice Number', invoices.invoice_date AS 'Appointment Date',
            patients.first_name AS 'Patient First Name', patients.last_name AS 'Patient Last Name',
            SUM(treatments.treatment_cost) AS 'Total Cost of All Treatments'
            FROM appointments
            JOIN invoices ON invoices.appointment_id = appointments.appointment_id
            JOIN treatments ON treatments.appointment_id = appointments.appointment_id
            JOIN patients ON patients.patient_id = appointments.patient_id
            WHERE invoices.bill_paid = 0 AND appointments.appointment_status = 'Completed'
            GROUP BY invoices.invoice_date, invoices.invoice_id
            ORDER BY invoices.invoice_date, invoices.invoice_id;
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
                <th scope="col">Appointment Date</th>
                <th scope="col">Treatment Cost ($)</th>
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
                <td><?php echo $row['Appointment Date']; ?></td>
                <td><?php echo $row['Total Cost of All Treatments']; ?></td>
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