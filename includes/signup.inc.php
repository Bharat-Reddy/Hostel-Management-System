<?php

if (isset($_POST['signup-submit'])) {

  require 'config.inc.php';

  $username = $_POST['username'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $cnfpassword = $_POST['confirmpwd'];

  if(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username))
  {
    header("Location: ../signup.php?error=invalidmailusername");
    exit();
  }
  else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("Location: ../signup.php?error=invalidmail&username=".$username);
    exit();
  }
  else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
    header("Location: ../signup.php?error=invalidusername&mail=".$email);
    exit();
  }
  else if($password !== $cnfpassword){
    header("Location: ../signup.php?error=passwordcheck&username=".$username."&mail=".$email);
    exit();
  }
  else {
    header("Location: ../signup.php?signup=success");
    exit();
  }

}
