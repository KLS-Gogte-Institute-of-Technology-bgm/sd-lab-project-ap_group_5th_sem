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
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="style1.css">

	</head>


	<body>
		
		<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					<a id="branding" href="index.html">
						<img src="images/logo1.png" height="150px" width="150px" alt="Company Logo" class="logo">
						<h1 class="site-title">Crime<span>Management</span></h1>
					</a>

					<ul class="nav" style="margin-left:10px;">
						  <li class="drop">Higher Officer
		    				<ul>
						      <li><a href="officerviewcomplaint.php">View Complaint</a></li>
						      <li><a href="officerPoliceReg.php">Add New Police</a></li>
		     
		    				</ul>
		  				  </li>
		  				  <li><a href="logout.php">Logout</a></li>

					</ul>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content" style="background:url('images/back.jpg')">
				
				<div class="fullwidth-block content">
					<div class="container">
						<h2>Police <br>Register Here!!</h2>
						<div class="row">
							<div class="col-md-5">
								<form action="" class="contact-form" method="POST"  style="background-color:#fff !important;">
									<input type="text" id="name" placeholder="Name..." name="name" pattern="[A-Z a-z]+" title="Enter Only characters" required>
									<input type="text" id="Address" placeholder="Address..." name="addr">
									<input type="text" id="dept" placeholder="designation..." name="descg" pattern="[A-Z a-z]+" title="Enter Only characters" required>
									<input type="text" id="batch" placeholder="Batch no..." maxlength="6" name="batch" pattern="(?=.*\d)(?=.*[0-9]).{6,9}" title="Must contain integers with 6 digits" required>
									<input type="text" id="contact" placeholder="contact..." maxlength="10" name="contact" pattern="(?=.*\d)(?=.*[0-9]).{10}" title="Must contain integers with 10 digits">
									<input type="text" id="stationArea" placeholder="Station area..." name="area" pattern="[A-Z a-z]+" title="Enter Only characters" required>
									<input type="text" id="email" placeholder="Email..." name="email">
									<input type="text" id="uname" placeholder="UserName..." name="uname" pattern="(?=.*\d)(?=.*[a-z]).{6,}" title="Must contain at least one number and one lowercase letter, and at least 6 or more characters" required>

									<input type="text" id="password" placeholder="Password..." name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>
									<div class="text-right">
										<input type="submit" value="Register" name="submit">
										<a href="viewPolice.php" style="color:#f63f3f;" >View Registered Police</a>

									</div>
								</form>
							</div>
							
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

<?php
if (isset($_POST['submit'])) {
	$fname=$_POST['name'];
	$address=$_POST['addr'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$batch_no=$_POST['batch'];
	$designation=$_POST['descg'];
	$area=$_POST['area'];
	$username=$_POST['uname'];

	$password=$_POST['pass'];

	include 'dbconn.php';

	$query="INSERT INTO police_reg values('0','$fname','$address','$contact','$batch_no','$designation','$email','$area','$username','$password')";

	$row=mysqli_query($con,$query) or die("error".mysqli_error($con));
	var_dump($row);
	if(!$row){
		echo "<script type='text/javascript'>alert('Insert Failed'); </script>";
	} else { 
		echo "<script type='text/javascript'>alert('Registered successfully'); window.location='officerPoliceReg.php'; </script>";
	}
}

?>


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
		
	</body>
	<?php
		
	
	?>
</html>