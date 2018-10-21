<?php
  require '../includes/config.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Allocated Rooms</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--bootsrap -->

	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="../web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home">
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<h1><a class="navbar-brand" href="admin_home.php">NITC <span class="display"> </span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="create_hm.php">Appoint Hostel Manager</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="students.php">Students</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="admin_contact.php">Contact</a>
						</li>
			            <li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['username']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="admin_profile.php">My Profile</a>
							</li>
							<li>
								<a href="../includes/logout.inc.php">Logout</a>
							</li>
						</ul>
					</li>
					
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!--Header-->
</div>
<!-- //banner -->
<br><br><br>

<section class="contact py-5">
	<div class="container">
			<div class="mail_grid_w3l">
				<form action="students.php" method="post">
					<div class="row">
					        <div class="col-md-9">
							<input type="text" placeholder="Search by Roll Number" name="search_box">
							</div>
							<div class="col-md-3">
							<input type="submit" value="Search" name="search"></input>
							</div>
					</div>
				</form>
			</div>
	</div>
</section>
<?php
   if (isset($_POST['search'])) {
   	   $search_box = $_POST['search_box'];
   	   /*echo "<script type='text/javascript'>alert('<?php echo $search_box; ?>')</script>";*/
   	   $hostel_id = $_SESSION['hostel_id'];
   	   $query_search = "SELECT * FROM Student WHERE Student_id like '$search_box%'";
   	   $result_search = mysqli_query($conn,$query_search);
   	   //select the hostel name from hostel table
       //$query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
      // $result6 = mysqli_query($conn,$query6);
      // $row6 = mysqli_fetch_assoc($result6);
       //$hostel_name = $row6['Hostel_name'];
   	   ?>
   	   <div class="container">
   	   <table class="table table-hover">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Contact Number</th>
        <th>Hostel</th>
        <th>Room Number</th>
      </tr>
    </thead>
    <tbody>
    <?php
   	   if(mysqli_num_rows($result_search)==0){
   	   	  echo '<tr><td colspan="4">No Rows Returned</td></tr>';
   	   }
   	   else{
   	   	  while($row_search = mysqli_fetch_assoc($result_search)){
      		//get the name of the student to display
            $room_id = $row_search['Room_id'];
            $studentHID = $row_search['Hostel_id'];
            $query7 = "SELECT * FROM Room WHERE Room_id = '$room_id'";
            $result7 = mysqli_query($conn,$query7);
            $row7 = mysqli_fetch_assoc($result7);
            $query88 = "SELECT * FROM Hostel WHERE Hostel_id = '$studentHID'";
            $result88 = mysqli_query($conn,$query88);
            $row88 = mysqli_fetch_assoc($result88);
            $room_no = $row7['Room_No'];
            $hostel_name = $row88['Hostel_name'];
            //student name
            $student_name = $row_search['Fname']." ".$row_search['Lname'];

      		echo "<tr><td>{$student_name}</td><td>{$row_search['Student_id']}</td><td>{$row_search['Mob_no']}</td><td>{$hostel_name}</td><td>{$room_no}</td></tr>\n";
   	   }
   }
   ?>
   </tbody>
  </table>
</div>
<?php
}
  ?>


<div class="container">
<h2 class="heading text-capitalize mb-sm-5 mb-4"> Rooms Allotted </h2>
<?php
   //$hostel_id = $_SESSION['hostel_id'];
   $query1 = "SELECT * FROM Student";
   $result1 = mysqli_query($conn,$query1);
   //select the hostel name from hostel table
   //$query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
   //$result6 = mysqli_query($conn,$query6);
   //$row6 = mysqli_fetch_assoc($result6);
   //$hostel_name = $row6['Hostel_name'];
?>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Contact Number</th>
        <th>Hostel</th>
        <th>Room Number</th>
      </tr>
    </thead>
    <tbody>
    <?php
      if(mysqli_num_rows($result1)==0){
         echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }
      else{
      	while($row1 = mysqli_fetch_assoc($result1)){
      		//get the room_no of the student from room_id in room table
            $room_id = $row1['Room_id'];
            $HID = $row1['Hostel_id'];
            $query7 = "SELECT * FROM Room WHERE Room_id = '$room_id'";
            $result7 = mysqli_query($conn,$query7);
            $row7 = mysqli_fetch_assoc($result7);
            $room_no = $row7['Room_No'];
            $query99 = "SELECT * FROM Hostel WHERE Hostel_id = '$HID'";
            $result99 = mysqli_query($conn,$query99);
            $row99 = mysqli_fetch_assoc($result99);
            $HNM = $row99['Hostel_name'];
            if (!$HNM) {
              $HNM='None';
            }
            if(!$room_no){
              $room_no='None';
            }
            //student name
            $student_name = $row1['Fname']." ".$row1['Lname'];

      		echo "<tr><td>{$student_name}</td><td>{$row1['Student_id']}</td><td>{$row1['Mob_no']}</td><td>{$HNM}</td><td>{$room_no}</td></tr>\n";
      	}
      }
    ?>
    </tbody>
  </table>
</div>
<br>
<br>
<br>

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href="http://www.nitc.ac.in/" target="_blank">NIT <span class="display"> CALICUT</span></a>
		</div>
		<div class="footer-grid">
			
			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="admin_home.php">Home</a>
					</li>
					
					<li>
						<a href="create_hm.php">Appoint</a>
					</li>
					<li>
						<a href="students.php">Students</a>
					</li>
					<li>
						<a href="admin_contact.php">Contact</a>
					</li>
					<li>
						<a href="admin_profile.php">Profile</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- banner js -->
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //banner js -->

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="web_home/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->

</body>
</html>
