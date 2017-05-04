<?php
session_start();
 
if (isset($_SESSION['username']))

$con=mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO users (age,weight,experience)
VALUES
('$_POST[age]','$_POST[weight]','$_POST[experience]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
 
echo "Thank you! we have your details, you can now  <a href='form2.html'>return</a> to find a match";

mysqli_close($con);
?>