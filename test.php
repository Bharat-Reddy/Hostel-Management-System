<?php
  require 'includes/config.inc.php';
  $hashPwd = password_hash('root', PASSWORD_DEFAULT);
  $sql = "INSERT INTO Hostel_Manager (Username, Fname, Lname, Mob_no, Hostel_id, Pwd, Isadmin) VALUES ('messi', 'lionel', 'messi', '8891735573', 3, '$hashPwd', 0)";
  $result = mysqli_query($conn, $sql);
  if(!$result){
    echo mysqli_error($conn);
  }
 ?>
