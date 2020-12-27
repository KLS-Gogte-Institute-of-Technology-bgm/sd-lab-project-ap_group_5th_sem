<?php
session_start();
$user=$_SESSION['username'];
$cmp_id=$_GET['cmpid'];
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

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
			<!-- Loading main css file -->
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
					 <h2 class="section-title"><b>Assign Task </b></h2>
						<div class="row">
							<div style="margin-left:50%">
							 <form action="" class="contact-form" method="POST"  style="background-color:#fff !important;">

									<label><b>Assign To</b></label>
							 	 <?php 
							 	 include_once("dbconn.php");
					                  $query="SELECT * from police_reg";
					                  $result=mysqli_query($con,$query) or die("error".mysqli_error($con));
					                  $i=0;

                					?>
  										<select name="policename" class="form-control" required>
  										<?php  while($rows=mysqli_fetch_assoc($result)){ ?>

										<option value="<?php echo $rows['batch_no'];?>###<?php echo $rows['name'];?>###<?php echo $rows['id'];?>"><?php echo $rows['batch_no']." ".$rows['name']." ".$rows['station_area'];?></option>
                          			<?php $i++;}?>
									</select>

									
									<div class="text-right">
										<input type="submit" value="Assign task" name="submit">
									</div>
								</form>


						</div>
					</div>
				</div> 
			</div>

				
<?php
if (isset($_POST['submit'])) {
$policename=$_POST["policename"];

$policeinfo=explode("###", $policename);
$pbatch=$policeinfo[0];
$pname=$policeinfo[1];
$pstationarea=$policeinfo[2];
$q="UPDATE complaint_reg set assignto='$pbatch' where cmp_id='$cmp_id'";
$sql=mysqli_query($con,$q) or die("error".mysqli_error($con));

if(!$sql){
    echo "<script type='text/javascript'>alert('Update error');</script>";

}else{
echo "<script type='text/javascript'>alert('assigned to respective station Area Police'); window.location.href='officerviewcomplaint.php';</script>";

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