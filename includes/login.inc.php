<?php

if (isset($_POST['login-submit'])) {

  require 'config.inc.php';

  $roll = $_POST['student_roll_no'];
  $password = $_POST['pwd'];

  if (empty($roll) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else {

    $sql = "SELECT * FROM Student WHERE Student_id = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $roll);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)){
      $pwdCheck = password_verify($password, $row['Pwd']);
      if($pwdCheck == false){
        header("Location: ../index.php?error=wrongcreds");
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
      header("Location: ../index.php?error=wrongcreds");
      exit();
    }
  }

}
else {
  header("Location: ../index.php");
  exit();
}
