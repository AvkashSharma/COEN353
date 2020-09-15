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
    <h1>Make an appointment</h1>
        <form action="createAppointment.php" method="POST">
        <div class="form-group">
          <label for="patientID">Patient ID</label>
          <input type="text" class="form-control" name="pid" placeholder="Patient ID">
        </div>
        <div class="form-group">
          <label for="lastName">Appointment Date and Time (2020-04-05 14:00:00)</label>
          <input type="text" class="form-control" name="aDate" placeholder="Date and Time">
        </div>
        <div class="form-group">
          <label for="address">Appointment Status</label>
          <input type="text" class="form-control" name="status" placeholder="Status">
        </div>
        <div class="form-group">
          <label for="dentistID">Dentist ID</label>
          <input type="text" class="form-control" name="did" placeholder="Dentist ID">
        </div>
        <div class="form-group">
          <label for="receptionistID">Receptionist ID</label>
          <input type="text" class="form-control" name="rid" placeholder="Receptionist ID">
        </div>
        <div class="form-group">
          <label for="clinicID">Clinic ID</label>
          <input type="text" class="form-control" name="cid" placeholder="Clinic ID">
        </div>
        <button type="submit" class="btn btn-primary" name="createAppointment">Submit</button>
        <a href="addTreatment.php" class="btn btn-primary">Add Treatment</a>    
        </form>
    </div>      
</body>
</html>