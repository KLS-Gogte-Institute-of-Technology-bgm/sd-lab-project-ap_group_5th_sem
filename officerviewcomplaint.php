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

			<main class="main-content" style="background:url('images/back.jpg')">
				<?php
  include_once("dbconn.php");
  
  $query="SELECT user_reg.u_name,user_reg.adharno,user_reg.address,user_reg.contact_no,user_reg.area,complaint_reg.cmp_id,complaint_reg.cmp_title,complaint_reg.cmp_desc,complaint_reg.cmp_type,complaint_reg.crime_location,complaint_reg.priority,complaint_reg.assignto,complaint_reg.cmp_date,complaint_reg.cmp_time,complaint_reg.image_name,complaint_reg.status FROM user_reg INNER JOIN complaint_reg ON user_reg.adharno=complaint_reg.user_adhar";
  $result=mysqli_query($con,$query);  
  $i=0;
?>          
				<div class="fullwidth-block content">
					<div class="container">
						<h2>View Complaint!!</h2>
						<div class="row">
							<div class="col-md-5">
								<table width="100%" cellspacing="10" cellpadding="20" class="table-responsive" border="1" style="background-color:#fff !important;">
  <tr>
  	<th><center>User Name</center></th>
     <th><center>User Address</center></th>
     <th><center>User Contact</center></th>
     <th><center>User Area</center></th>
    <th><center>complaint Title</center></th>
     <th><center>complaint Description</center></th>
     <th><center>complaint Type</center></th>
     <th><center>Crime Location</center></th>
     <th><center>Date</center></th>
     <th><center>Time</center></th>
     <th><center>Photo</center></th>
     <th><center>Priority</center></th>
	 <th><center>Status</center></th>
	 	 <th><center>Task Assigned To</center></th>

     <th><center>Assign task</center></th>
     <th><center>Remove</center></th>

  </tr>

<?php
  while($rows=mysqli_fetch_assoc($result)){
?>
  <tr>
  	<td><center><?php echo $rows['u_name']; ?></a></center></td>
    <td><center><?php echo $rows['address'];?></center></td>
    <td><center><?php echo $rows['contact_no']; ?></center></td>
    <td><center><?php echo $rows['area']; ?></center></td>
    <td><center><?php echo $rows['cmp_title']; ?></center></td>
    <td><center><?php echo $rows['cmp_desc'];?></center></td>
    <td><center><?php echo $rows['cmp_type']; ?></center></td>
    <td><center><?php echo $rows['crime_location']; ?></center></td>
    <td><center><?php echo $rows['cmp_date']; ?></center></td>
    <td><center><?php echo $rows['cmp_time']; ?></center></td>

    <td><center><img src="<?php echo $rows['image_name']; ?>" height="100px" width="100px"></center></td>
    <td><center><?php echo $rows['priority']; ?></center></td>
        <td><center><?php echo $rows['status']; ?></center></td>
        <td><center><?php echo $rows['assignto']; ?></center></td>

    <td><center><input type="button" value="assign" onclick="window.location.href='assigncmp.php?cmpid=<?php echo $rows['cmp_id'];?>'"></center></td>
    <td><center><input type="button" value="delete" onclick="window.location.href='deletecmp.php?cmpid=<?php echo $rows['cmp_id'];?>'"></center></td>
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