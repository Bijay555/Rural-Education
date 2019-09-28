<?php
$host='localhost';
$user='root';
$pass='';
$db='my_db';

$con=mysqli_connect($host,$user,$pass,$db) or die("Connection failed");
if($con)
echo "Connect successfully to my_db Database";

$query=mysqli_query($con,"INSERT INTO login (Username, password)  VALUES ('AP17110010142','julius')");
if($query)
echo "Data inserted successfully";
mysqli_close($con);
?>
