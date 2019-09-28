<?php
// get values passed from form in login.php file
$username=$_POST['username'];
$password=$_POST['password'];

$con=mysqli_connect("localhost","root","","my_db");
//to prevent mysql injection
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($con,$username);
$password=mysqli_real_escape_string($con,$password);

//connect to the server and select database
$con=mysqli_connect("localhost","root","","my_db");

//Query the database for user
$result=mysqli_query($con,"select * from login where username = '$username' and password = '$password'") or die("Failed to query database ".mysqli_error($con));
$row = mysqli_fetch_array($con,$result);
if ($row['username'] == $username && $row['password'] == $password ){
echo "<script> location.href='http://localhost/project/feedback.html'; </script>";
}
else{
echo "failed to login";
}
?>

