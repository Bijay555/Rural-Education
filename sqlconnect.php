<?php
$connect=mysqli_connect('localhost','root','','phpmyadmin');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>
