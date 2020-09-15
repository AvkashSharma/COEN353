<?php
ini_set('display_errors', 1); error_reporting(E_ALL);
include_once 'includes/dbh.inc.php'; 
    
    if(isset($_POST['createTreatment']))
    {
        $treatmentName = $_POST['treatment'];
        $cost  = $_POST['cost'];
        $date = $_POST['tDate'];
        $dentistID = $_POST['dentistID'];
        $treatmentByID = $_POST['treatmentByID'];
        $assistantID = $_POST['assistantID'];
        $appointmentID = $_POST['appointmentID'];


         $sql = "INSERT INTO treatments(treatment_name, treatment_cost, treatment_date, treatment_assigned_by_dentist,treated_by_dentist, treated_by_assistance, appointment_id)
         VALUES ('$treatmentName', $cost, '$date', $dentistID , $treatmentByID, $assistantID, $appointmentID);";
         $result = mysqli_query($conn,$sql); 

         header('Location:addTreatment.php'); 
    }

?>