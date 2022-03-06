<?php

if (isset($_POST['login-submit'])) {

  require 'config.inc.php';

  $username = $_POST['username'];
  $password = $_POST['pwd'];

  if (empty($username) || empty($password)) {
    header("Location: ../login-hostel_manager.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM Hostel_Manager WHERE Username = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../login-hostel_manager.php?error=sqlerror");
      exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)){
      $pwdCheck = password_verify($password, $row['Pwd']);
      if($pwdCheck == false){
        header("Location: ../login-hostel_manager.php?error=wrongpwd");
        exit();
      }
      else if($pwdCheck == true) {

        //session_start();
        $_SESSION['hostel_man_id'] = $row['Hostel_man_id'];
        $_SESSION['fname'] = $row['Fname'];
        $_SESSION['lname'] = $row['Lname'];
        $_SESSION['mob_no'] = $row['Mob_no'];
        $_SESSION['username'] = $row['Username'];
        $_SESSION['hostel_id'] = $row['Hostel_id'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['isadmin'] = $row['Isadmin'];
        $_SESSION['PSWD'] = $row['Pwd'];

        //Just for checking if session variables are working properly
        if(isset($_SESSION['username'])){
          echo "<script type='text/javascript'>alert('Set')</script>";
        }
        else {
          echo "<script type='text/javascript'>alert('Not SET')</script>";
        }
        //echo htmlspecialchars($_SESSION['lname']);
        if($_SESSION['isadmin']==0){
          header("Location: ../home_manager.php?login=success");
        }
        else {
          header("Location: ../admin/admin_home.php?login=success");
        }
        //exit();
      }
      else {
        header("Location: ../login-hostel_manager.php?error=strangeerr");
        exit();
      }
    }
    else{
      header("Location: ../login-hostel_manager.php?error=nouser");
      exit();
    }
  }

}
else {
  header("Location: ../login-hostel_manager.php");
  exit();
}
