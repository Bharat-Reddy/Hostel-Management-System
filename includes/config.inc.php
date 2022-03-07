<?php
  session_start();
  $servername = "localhost"; //change this  accordingly hms.test
  $dBUsername = "root";
  $dBPassword = ""; //root
  $dBName = "hostel_management_system";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
