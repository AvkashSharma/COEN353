<?php
ini_set('display_errors', 1); error_reporting(E_ALL);
include_once 'includes/dbh.inc.php'; 
    
    if(isset($_POST['createAppointment']))
    {
        $patientID = $_POST['pid'];
        $dateTime  = $_POST['aDate'];
        $status = $_POST['status'];
        $dentistID = $_POST['did'];
        $receptionistID = $_POST['rid'];
        $clinicID= $_POST['cid'];

         $sql = "INSERT INTO appointments(appointment_status, appointment_dateTime, patient_id, dentist_id, receptionist_id, clinic_id)
         VALUES
         ('$status', '$dateTime', $patientID , $dentistID, $receptionistID,$clinicID);";
         $result = mysqli_query($conn,$sql); 

        // echo($patientID);
       
        header('Location:appointment.php');
       
    }