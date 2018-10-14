<?php
 require 'includes/config.inc.php';

  echo "<h1>Home Page</h1>";
  echo '<form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
  </form>';
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <title></title>
    </head>
    <body>
      <a href="profile.php"> <button type="button" class="btn btn-primary">
        <?php echo $_SESSION['fname']; ?>
      </button> </a>
    </body>
  </html>
