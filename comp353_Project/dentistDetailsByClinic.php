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
  <h1 class="display-4">Dentist Details in all Clinics</h1>
  <h5>Get details of all dentists in all the clinics.</h5>
</div>

<div class="container"> 
    <div class="card">
      <div class="card-body">    

        <?php
          // Get details of all dentists in the clinic
        $sql = "SELECT employees.first_name AS 'Dentist First Name', employees.last_name AS 'Dentist Last Name',
          employees.clinic_id AS 'Clinic ID', clinics.address AS 'Clinic Location'
          FROM clinics
          JOIN employees ON employees.clinic_id = clinics.clinic_id
          JOIN dentists ON dentists.dentist_id = employees.employee_id
          ORDER BY employees.clinic_id;";

          // Make query and get result
          $result = mysqli_query($conn,$sql);

          // Check if there are any results returned by the query
          $resultCheck = mysqli_num_rows($result);
        ?>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Dentist First Name</th>
              <th scope="col">Dentist Last Name</th>
              <th scope="col">Clinic Location</th>
            </tr>
          </thead>
          <?php
            if($resultCheck > 0 ){
              while($row = mysqli_fetch_assoc($result)){
              ?>
                  <tbody>
                    <tr>
                      <td><?php echo $row['Dentist First Name']; ?></td>
                      <td><?php echo $row['Dentist Last Name']; ?></td>
                      <td><?php echo $row['Clinic Location']; ?></td>
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