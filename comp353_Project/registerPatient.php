<?php
ini_set('display_errors', 1); error_reporting(E_ALL);
include_once 'includes/dbh.inc.php'; 
    
    if(isset($_POST['registerPatient']))
    {
        $firstName = $_POST['first'];
        $lastName  = $_POST['last'];
        $phoneNumber  = $_POST['phone'];
        $patientAddress  = $_POST['address'];

        $sql = "INSERT INTO patients(first_name, last_name, phone_number, `address`) VALUES ('$firstName', '$lastName ', '$phoneNumber', '$patientAddress'); ";
        $result = mysqli_query($conn,$sql); 

      
        header('Location:index.php');
       
    }

   

   

    
  