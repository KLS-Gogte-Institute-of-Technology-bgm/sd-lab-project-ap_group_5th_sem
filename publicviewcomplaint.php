<?php
session_start();
$user=$_SESSION['adharno'];

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

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
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
						<img src="images/logo1.png" height="150px" width="150px" alt="Company Logo" class="logo">
						<h1 class="site-title">Crime<span>Management</span></h1>
					</a>

					<ul class="nav">
					  <li class="drop">User
	    				<ul>
					      <li><a href="publicviewcomplaint.php">View Complaint Progress</a></li>
	     				  <li><a href="addcomplaint.php">Add Complaint</a></li>
	     				  <li><a href="publicviewaccount.php">Account Details</a></li>


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
  


  $query="SELECT * FROM complaint_reg where user_adhar='$user'";
  $result=mysqli_query($con,$query);  
  $i=0;
?>          
				<div class="fullwidth-block content">
					<div class="container">
						<h2> Public View Complaint!!</h2>
						<div class="row">
							<div class="col-md-5">
								<table class="display" width="100%" cellspacing="10" cellpadding="10" class="table-responsive" border="1" style="background-color:#fff !important;">
  <tr>
    <th><center>complaint Title</center></th>
     <th><center>complaint Description</center></th>
     <th><center>complaint Type</center></th>
     <th><center>Crime Location</center></th>
     <th><center>Date</center></th>
     <th><center>Time</center></th>
     <th><center>Photo</center></th>
     <th><center>Status</center></th>

  </tr>

<?php
  while($rows=mysqli_fetch_assoc($result)){
?>
  <tr>
    <td><center><?php echo $rows['cmp_title']; ?></center></td>
    <td><center><?php echo $rows['cmp_desc'];?></center></td>
    <td><center><?php echo $rows['cmp_type']; ?></center></td>
    <td><center><?php echo $rows['crime_location']; ?></center></td>
    <td><center><?php echo $rows['cmp_date']; ?></center></td>
    <td><center><?php echo $rows['cmp_time']; ?></center></td>

    <td><center><img src="<?php echo $rows['image_name']; ?>" height="100px" width="100px"></center></td>
    <td><center><?php echo $rows['status']; ?></center></td>
  </tr>
  <?php $i++; } ?>
</table>
							</div>
							
						</div>
					</div>
				</div>
				
<?php
if (isset($_POST['submit'])) {
	$pId=$_POST['id'];
	$fname=$_POST['name'];
	$adhar_no=$_POST['adhar'];
	$address=$_POST['addr'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$batch_no=$_POST['batch'];
	$department=$_POST['dept'];
	$area=$_POST['area'];
	$username=$_POST['user'];
	$password=$_POST['pass'];

	include 'dbconn.php';

	$query="INSERT INTO highofficer_reg values('0','$name','$adhar','$batch_no','$designation','$contact','$address','$area','$username','$password')";

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
		
	</body>
	<?php
		
	
	?>
</html>