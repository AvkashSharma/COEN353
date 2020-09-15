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
    <h1>Add Treatment to an Appointment</h1>
        <form action="createTreatment.php" method="POST">
        <div class="form-group">
          <label for="treatment">Treatment Name</label>
          <input type="text" class="form-control" name="treatment" placeholder="Treatment Name">
        </div>
        <div class="form-group">
          <label for="cost">Treatment Cost</label>
          <input type="text" class="form-control" name="cost" placeholder="Cost">
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="text" class="form-control" name="tDate" placeholder="Date">
        </div>
        <div class="form-group">
          <label for="dentistID">Dentist ID</label>
          <input type="text" class="form-control" name="dentistID" placeholder="Dentist ID">
        </div>
        <div class="form-group">
          <label for="treatmentID">Treatment By</label>
          <input type="text" class="form-control" name="treatmentByID" placeholder="Dentist ID">
        </div>
        <div class="form-group">
          <label for="assistant">Assistant ID</label>
          <input type="text" class="form-control" name="assistantID" placeholder="Assistant ID">
        </div>
        <div class="form-group">
          <label for="appointmentID">Appointment ID</label>
          <input type="text" class="form-control" name="appointmentID" placeholder="Appointment ID">
        </div>
        <button type="submit" class="btn btn-primary" name="createTreatment">Submit</button>
        <a href="index.php" class="btn btn-primary">Back</a>   
        </form>
    </div>       
</body>
</html>