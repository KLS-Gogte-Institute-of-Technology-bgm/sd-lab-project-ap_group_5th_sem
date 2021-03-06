<?php
session_start();
$user=$_SESSION['username'];

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

			<main class="main-content" style="background:url('images/back.jpg')">>
				<?php
  include_once("dbconn.php");
  
  $query="SELECT * FROM police_reg";
  $result=mysqli_query($con,$query);  
  $i=0;
?>          
				<div class="fullwidth-block content">
					<div class="container">
						<h2>View Police Details</h2>
						<div class="row">
							<div class="col-md-5">
								<table width="100%" cellspacing="10" cellpadding="20" class="table-responsive" border="1" style="background-color:#fff !important;">
  <tr>
  	<th><center>Police Name</center></th>
    <th><center>Police Address</center></th>
    <th><center>Batch No</center></th>
	<th><center>Police Designation</center></th>
    <th><center>Police contact No</center></th>
    <th><center>Police Email</center></th>
    <th><center>Police Station Area</center></th>
    <th><center>Update</center></th>
    <th><center>Delete</center></th>


     
 </tr>

<?php
  while($rows=mysqli_fetch_assoc($result)){
?>
  <tr>
  	<td><center><?php echo $rows['name']; ?></a></center></td>
    <td><center><?php echo $rows['address'];?></center></td>
    <td><center><?php echo $rows['batch_no']; ?></center></td>
    <td><center><?php echo $rows['designation']; ?></center></td>
    <td><center><?php echo $rows['contact_no']; ?></center></td>
    <td><center><?php echo $rows['email_id'];?></center></td>
    <td><center><?php echo $rows['station_area']; ?></center></td>
        <td><input type="button" value="update" onclick="window.location='editPolice.php?id=<?php echo $rows['id'];?>'"></td>
        <td><input type="button" value="Delete" onclick="window.location='deletePolice.php?id=<?php echo $rows['id'];?>'"></td>

    

  </tr>
  <?php $i++; } ?>
</table>
							</div>
							
						</div>
					</div>
				</div>
				


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
		
	</body>
	<?php
		
	
	?>
</html>