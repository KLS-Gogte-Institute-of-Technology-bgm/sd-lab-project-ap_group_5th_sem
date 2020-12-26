<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Crime Management</title>
		
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
 	<link rel="stylesheet" href="css/scss.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css"
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/style.css">
				<link rel="stylesheet" href="style1.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>



	<body>
		
		<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					<a id="branding" href="index.html">
						<img src="images/logo1.png" height="150px" width="150px" alt="Company Logo" class="logo" >
						<h1 class="site-title" style="color:red;">Crime<span>Management</span></h1>
					</a>

					<ul class="nav" style="margin-left:10px;">
						  <li><a href="index.html">Home</a></li>
						  <li><a href="about.html">About</a></li>
						  <li class="drop">Register
		    				<ul>
						      <li><a href="register.php">User</a></li>
						      <li><a href="higherReg.php">Higher Officer</a></li>
		     
		    				</ul>
		  				  </li>
		  				  <li><a href="login.php">Login</a></li>

						  <li><a href="contact.html">Contact</a></li>
					</ul>

					<nav class="mobile-navigation"></nav>
					</div>
			</header> <!-- .site-header -->

			<main class="main-content"style="background:url('images/back.jpg')">
				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="section-title">Higher Officer Registration</h2>
							<div class="row">
							<div style="margin-left:50%">
								<form action="" class="contact-form" method="POST"  style="background-color:#fff !important;">
								
  									<input class="form-control" placeholder="Name"  type="text" name="uname" pattern="[A-Z a-z]+" title="Enter Only characters" autofocus required>
									<input class="form-control" placeholder="Adhar No" maxlength="12" type="integers" name="adhar"  pattern="(?=.*\d)(?=.*[0-9]).{12}" title="Must contain integers with 12 digits" required>
									<input class="form-control" placeholder="Address" type="text" name="addr">

									<input class="form-control" placeholder="Contact No" maxlength="10" type="integers" name="contact" pattern="(?=.*\d)(?=.*[0-9]).{10}" title="Must contain integers with 10 digits">
									<input class="form-control" placeholder="Email Id" type="email" name="email">
									<input class="form-control" placeholder="Batch No" type="integers" name="batch" pattern="(?=.*\d)(?=.*[0-6]).{6,9}" title="Must contain integers with 6 digits" required>
									<input class="form-control" placeholder="Designation" type="text" name="desgn">
 									<input class="form-control" placeholder="Area" type="text" name="area" pattern="[A-Z a-z]+" title="Enter Only characters" required>

									<input class="form-control" placeholder="Username" type="text" name="user" pattern="(?=.*\d)(?=.*[a-z]).{6,}" title="Must contain at least one number and one lowercase letter, and at least 6 or more characters" required>
									<input class="form-control" placeholder="Password" type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>

									
									<div class="text-right">
										<input type="submit" value="Register" name="submit">
										<a href="login.php" style="color:#f63f3f;">Login Here!!</a>
									</div>
								</form>


						</div>
					</div>
				</div> 
			</div>

				
<?php
if (isset($_POST['submit'])) {
	$fname=$_POST['uname'];
	$adhar_no=$_POST['adhar'];
	$address=$_POST['addr'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$batch_no=$_POST['batch'];
	$designation=$_POST['desgn'];
	$area=$_POST['area'];
	$username=$_POST['user'];
	$password=$_POST['pass'];

	include 'dbconn.php';

	$query="INSERT INTO highofficer_reg values('0','$fname','$adhar_no','$batch_no','$designation','$contact','$address','$area','$username','$password')";

	$row=mysqli_query($con,$query);
	if(!$row){
		echo "<script type='text/javascript'>alert('Insert Failed'); </script>";
	} else { 
		echo "<script type='text/javascript'>alert('Registered successfully'); window.location='login.php'; </script>";
	}
}

?>

				

				
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="copy">
						<p>GIT 2020</p>
					</div>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	</body>

</html>