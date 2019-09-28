<?php

$con = mysqli_connect('localhost','root','','phpmyadmin');

if(!$con)
{
  echo 'Not connected';
}

// create a variable
$name    = $_POST['name'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$subj    = $_POST['subject'];
$education = $_POST['education'];
$location = $_POST['location'];
$time = $_POST['time'];

//Execute the query


$sql = "INSERT INTO teachers (Name, email,phone,subject,education,location,hours) VALUES ('$name','$email','$phone','$subj','$education','$location','$time')";
if(!mysqli_query($con,$sql)){
  echo 'Not inserted';
  echo "<a href='teachreg.html'>Go Back</a>";
}
else{
  echo 'Inserted';

}

header("refresh:2; url= teachreg.html");
?>
