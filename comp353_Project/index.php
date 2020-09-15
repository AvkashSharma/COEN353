<?php
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
      <div class="container">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Denstist Co.</h1>
            <p class="lead">We care about Dental Health</p>
          </div>
        </div>
      </div>

      <div class="container"> 
          <div class="row row-cols-1 row-cols-md-12"> 
              <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                <a href="register.php">Register a Patient</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                <a href="appointment.php">Schedule an appointment</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                <a href="update.php">Modify an appointment</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                <a href="deleteAppointment.php">Delete an appointment</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                <a href="specialFeature.php">Special Feature</a>
                </div>
              </div>
            </div> 
          </div>    
        </div>




      <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Check Dentist Details in all Clinics</h5>
                  <p class="card-text"> Get details of all dentists in all the clinics.</p>
                  <br>
                  <a href="dentistDetailsByClinic.php" class="btn btn-primary">Details</a>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Check Appointment Details for a dentist</h5>
                  <p class="card-text">Get details of all appointments for a given dentist for a specific week.</p>
                  <a href="appointmentDetailsByDentist.php" class="btn btn-primary">Details</a>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> Check Appointment Details by Clinic</h5>
                  <p class="card-text">Get details of all appointments at a given clinic on a specific date. </p>
                  <a href="appointmentDetailsByClinic.php" class="btn btn-primary">Details</a>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Check Appointment Details by Patient</h5>
                  <p class="card-text">Get details of all appointments of a given patient.</p>
                  <a href="appointmentDetailsByPatient.php" class="btn btn-primary">Details</a>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Check Missed appointments by patients</h5>
                  <p class="card-text">Get the number of missed appointments for each patient </p>
                  <a href="missedAppointmentByPatient.php" class="btn btn-primary">Details</a>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Check treatment details by appointment</h5>
                  <p class="card-text">Get details of all the treatments made during a given appointment. </p>
                  <a href="treatmentByAppointment.php" class="btn btn-primary">Details</a>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Check Bill Details</h5>
                  <p class="card-text">Get details of all unpaid bills.  </p>
                  <a href="billDetails.php" class="btn btn-primary">Details</a>
                </div>
              </div>
            </div> 
          </div>
        </div>

        
</body>
</html>