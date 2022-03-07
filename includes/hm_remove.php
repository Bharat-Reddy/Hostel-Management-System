<?php

if (isset($_POST['hm_remove_submit'])) {

  require 'config.inc.php';

  $username = $_POST['hm_uname'];
  $hostel_name = $_POST['hostel_name'];
  $Adminpassword = $_POST['pass'];

  if (empty($username) || empty($hostel_name) || empty($Adminpassword)) {
    header("Location: ../admin/create_hm.php?error=emptyfields");
    exit();
  }
  else {
      $sql = "SELECT * FROM Hostel_Manager WHERE Username = ?";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../admin/create_hm.php?error=sqlerror");
        exit();
      }
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        $sql2 = "SELECT * FROM Hostel WHERE Hostel_name = ?";
        $stmt2 = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt2, $sql)){
          header("Location: ../admin/create_hm.php?error=sqlerror");
          exit();
        }
        mysqli_stmt_bind_param($stmt2, "s", $hostel_name);
        mysqli_stmt_execute($stmt2);
        $result2 = mysqli_stmt_get_result($stmt2);
        if($row2 = mysqli_fetch_assoc($result2)){
          $HNO = $row2['Hostel_id'];
          if ($HNO == $row['Hostel_id']) {
            $pwdCheck = password_verify($Adminpassword, $_SESSION['PSWD']);
            if ($pwdCheck==false) {
              header("Location: ../admin/create_hm.php?error=wrongpwd");
              exit();
            }
            else {
              $sql3 = "DELETE FROM Hostel_Manager WHERE Username = ?";
              $stmt3 = mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt3, $sql3)){
                header("Location: ../admin/create_hm.php?error=sqlerror");
                exit();
              }
              mysqli_stmt_bind_param($stmt3, "s", $username);
              mysqli_stmt_execute($stmt3);
              $result3 = mysqli_stmt_get_result($stmt3);
              if($result3){
                header("Location: ../admin/create_hm.php?DeletionSuccessful");
                exit();
              }
              else {
                header("Location: ../admin/create_hm.php?error=DeletionFailed");
                exit();
              }
            }
          }
          else {
            header("Location: ../admin/create_hm.php?error=wronghostel");
            exit();
          }
        }
        else {
          header("Location: ../admin/create_hm.php?error=nohostel");
          exit();
        }

        $pwdCheck = password_verify($password, $row['Pwd']);
        if($pwdCheck == false){
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
        else if($pwdCheck == true) {

          //session_start();
          $_SESSION['roll'] = $row['Student_id'];
          $_SESSION['fname'] = $row['Fname'];
          $_SESSION['lname'] = $row['Lname'];
          $_SESSION['mob_no'] = $row['Mob_no'];
          $_SESSION['department'] = $row['Dept'];
          $_SESSION['year_of_study'] = $row['Year_of_study'];
          $_SESSION['hostel_id'] = $row['Hostel_id'];
          $_SESSION['room_id'] = $row['Room_id'];
          if(isset($_SESSION['department'])){
            echo "<script type='text/javascript'>alert('Set')</script>";
          }
          else {
            echo "<script type='text/javascript'>alert('Not SET')</script>";
          }
          //echo htmlspecialchars($_SESSION['lname']);
          header("Location: ../home.php?login=success");
          //exit();
        }
        else {
          header("Location: ../index.php?error=strangeerr");
          exit();
        }
    }
    else{
      header("Location: ../admin/create_hm.php?error=nouser");
      exit();
    }
  }

}
else {
  header("Location: ../index.php");
  exit();
}
