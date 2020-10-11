<?php

$con = mysqli_connect("localhost","root","","patient_info");
$response = array();
if($con)
{
  $sql = "select*from data";
  $result=mysqli_query($con,$sql);
  if($result)
    {
      header("Content-Type:JSON");
      $i=0;
      while($row = mysqli_fetch_assoc($result))
      {
        $response[$i]['patientId ']=$row[' patientId  '];
        $response[$i]['reportedOn']=$row['reportedOn '];
        $response[$i]['ageEstimate']=$row[' ageEstimate'];
        $response[$i]['gender']=$row['gender'];
        $response[$i]['state']=$row['state'];
        $response[$i]['status']=$row['status'];
        $i++;
      }
      echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else
{
echo"Connnection failed";
}
?>
