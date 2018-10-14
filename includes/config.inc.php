<?php
  $servername = "localhost"; //change this  accordingly
  $dBUsername = "root";
  $dBPassword = "password";
  $dBName = "hostel_management_system";

  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
