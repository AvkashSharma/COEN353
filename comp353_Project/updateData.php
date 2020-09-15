<?php
ini_set('display_errors', 1); error_reporting(E_ALL);
include_once 'includes/dbh.inc.php'; 
    
    if(isset($_POST['updateAppointment']))
    {
        $patientID = $_POST['pid'];
        $dateTime  = $_POST['aDate'];
        $astatus = $_POST['status'];
        $dentistID = $_POST['did'];
        $receptionistID = $_POST['rid'];
        $clinicID= $_POST['cid'];

         $sql = "UPDATE appointments SET pid='{$patientID}', aDate='{$dateTime}', astatus='{$status}', did='{$dentistID}', rid = '{$receptionistID}', cid = '{$clinicID}' where appointment_id = {$appointment_id};";
         $result = mysqli_query($conn,$sql); 

        // echo($patientID);
       
        header('Location:appointment.php');
       
    }