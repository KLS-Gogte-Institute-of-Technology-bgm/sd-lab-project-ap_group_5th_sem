<?php
session_start();

?>
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
						<img src="images/logo1.png" height="150px" width="150px" alt="Company Logo" class="logo" >
						<h1 class="site-title" style="color:red;">Crime<span>Management</span></h1>
					</a>

					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
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
					</nav>
					<nav class="mobile-navigation"></nav>
					</div>
			</header> <!-- .site-header -->

			<main class="main-content" style="background:url('images/back.jpg')">
				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="section-title">Login Here</h2>
							<div class="row">
							<div style="margin-left:50%">
							<form action="" class="contact-form" method="POST" style="background-color:#fff !important;">
								
									<input class="form-control" type="text" name="uname" placeholder="Username/adharno..." class="name" required />
									<input class="form-control" type="password" name="password" placeholder="password..." required />
								
									<select name="usertype" class="form-control" >
										<option value="user">User</option>
										<option value="admin">Admin</option>
										<option value="police">Police</option>
										<option value="hpolice">Higher Officer</option>
									</select>
									<div class="text-right">
										<input type="submit" value="Login" name="Submit">
									</div>
								</form>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div>
				
<?php
if (isset($_POST['Submit'])) {
	$username=$_POST['uname'];
	$password=$_POST['password'];
	$user=$_POST['usertype'];
include 'dbconn.php';
if($user=='user'){
	$query="SELECT * from user_reg where adharno='$username' and password='$password'";

	$row=mysqli_query($con,$query) or die("error".mysqli_error($con));
	$rs=mysqli_fetch_array($row);
	if(!$rs){
	echo "<script type='text/javascript'>alert('login unsuccessful'); </script>";
	} else { 
		$_SESSION['adharno']=$username;
	echo "<script type='text/javascript'>alert('login successfull'); window.location='addcomplaint.php'; </script>";
	}
}
if($user=='admin'){
	$query="SELECT * from admin where  username='$username' and password='$password'";

	$row=mysqli_query($con,$query);
	$rs=mysqli_fetch_array($row);
	
}
if($user=='police'){
	$query="SELECT * from police_reg where username='$username' and password='$password'";

	$row=mysqli_query($con,$query);
	$rs=mysqli_fetch_array($row);
	if(!$rs){
		echo "<script type='text/javascript'>alert('login unsuccessful'); </script>";
	} else { 
				$_SESSION['username']=$username;

				echo "<script type='text/javascript'>alert('login successfull'); window.location='policeviewcomplaint.php'; </script>";


	}
}
if($user=='hpolice'){
	$query="SELECT * from highofficer_reg where username='$username' and password='$password'";

	$row=mysqli_query($con,$query);
	$rs=mysqli_fetch_array($row);
	if($rs==0){
		echo "<script type='text/javascript'>alert('login unsuccessful'); </script>";
	} else { 
		$_SESSION['username']=$username;

		echo "<script type='text/javascript'>alert('login successfull'); window.location='officerPoliceReg.php'; </script>";
	}
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