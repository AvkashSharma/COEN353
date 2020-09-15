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
  <h1 class="display-4">Special Feature</h1>
  <h5>Run SQL Query</h5>
</div>

<div class="container"> 
    <div class="card">
      <div class="card-body">      

      <form action="specialFeature.php" method="GET">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="query" placeholder="Enter Query">
            </div>
            <input type="submit">
          </div>
        </form>        
        <br> 
            <?php
             //Get ID from request
             $query = isset($_GET['query']) ? $_GET['query'] : 0;


              // Get Appointment Details by Clinic
              $sql = "$query";

              // Make query and get result
              $result = mysqli_query($conn,$sql);

              // // Check if there are any results returned by the query
              // $resultCheck = mysqli_num_rows($result);

              $output = "<table>";
              if (is_array($result) || is_object($result)){
              foreach($result as $key => $var) {
                //$output .= '<tr>';
                if($key===0) {
                    $output .= '<tr>';
                    foreach($var as $col => $val) {
                    $output .= "<td>" . $col . '</td>';
                  }
                  $output .= '</tr>';
                  foreach($var as $col => $val) {
                    $output .= '<td>' . $val . '</td>';
                  }
                  $output .= '</tr>';
                }
                else {
                  $output .= '<tr>';
                  foreach($var as $col => $val) {
                  $output .= '<td>' . $val . '</td>';
                  }
                  $output .= '</tr>';
                }
              }
            }
            
                $output .= '</table>';
                echo $output;  
             ?>       
      </div>
    </div>
    <br>
    <a href="index.php" class="btn btn-primary">Back</a>
</div> 
</body>
</html>