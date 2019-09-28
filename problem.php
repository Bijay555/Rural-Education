<?php
$con = mysqli_connect('localhost','root','','phpmyadmin');

if(!$con)
{
  echo 'Not connected';
}

// create a variable
$id    = $_POST['sid'];
$school = $_POST['school'];
$location   = $_POST['Location'];
$problem   = $_POST['problem'];
$address    = $_POST['address'];
$desc = $_POST['desc'];


//Execute the query

$sql="INSERT INTO ruraleducation (studentid,school,Problem,Location,Zone,Description) VALUES('$id','$school','$problem','$location','$address','$desc')";
if(!mysqli_query($con,$sql)){
  echo 'Feedback Not Registered';
  echo "<a href='feedback.html'>Go Back</a>";
}
else{
  echo 'Feedback Registered Successfully';

}

header("refresh:2; url= feedback.html");

?>
