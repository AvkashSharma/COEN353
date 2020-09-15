<?
$dbServername = "ivc353.encs.concordia.ca"; 
$dbUsername = "ivc353_4"; 
$dbPassword = "DBases35"; 
$dbName = "ivc353_4";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName );

if(mysqli_connect_errno()){
  echo "Failed to connect: " . mysqli_connect_errno();
}