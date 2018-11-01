<?php
  session_start();
  $servername = "hms.test"; //change this  accordingly
  $dBUsername = "root";
  $dBPassword = "root";
  $dBName = "hostel_management_system";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
