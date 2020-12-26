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
		
		<header class="site-header">
				<div class="container">
					<a id="branding" href="index.html">
						<img src="images/logo1.png" height="150px" width="150px" alt="Company Logo" class="logo" >
						<h1 class="site-title" style="color:red;">Crime<span>Management</span></h1>
					</a>

					<ul class="nav">
					  <li class="drop">User
	    				<ul>
					      <li><a href="publicviewcomplaint.php">View Complaint Progress</a></li>
	     				  <li><a href="publicviewaccount.php">Account Details</a></li>

	    				</ul>
	  				  </li>
					  <li><a href="logout.php">Logout</a></li>
				</ul>

					<nav class="mobile-navigation"></nav>
					</div>
			</header> <!-- .site-header -->

			<main class="main-content" style="background:url('images/back.jpg')">>
				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="section-title">Add Complaint</h2>
							<div class="row">
							<div style="margin-left:50%">
							 <form action="" class="contact-form" method="POST" enctype="multipart/form-data" style="background-color:#fff !important;">
	  								<input class="form-control" placeholder="Complaint Title"  type="text" name="cmptitle" pattern="[A-Z a-z]+" title="Enter Only characters" autofocus required>
	  								<input class="form-control" placeholder="Complaint Description" type="textarea" name="cmpdesc" required>
									<input class="form-control" placeholder="Crime Type" type="text" name="cmptype" >
									<label>Known person
  										<input type="radio" name="person" value="known" title="Known person"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
  									<label>unknown person
  										<input type="radio" name="person" value="unknown" title="unKnown person" checked="true">
  									</label>

									<input class="form-control" placeholder="Crime Area" type="text" name="cmparea" pattern="[A-Z a-z]+" title="Enter Only characters" required>
									<input class="form-control" placeholder="Crime date" type="date" name="cmpdate" required>
                     <label for="probootstrap-date-departure">Priority</label>
                        <select class="form-control" style="width: 100%;" name="priority">
                          
                          <option>Low</option>
                          <option>Medium</option>
                          <option>High</option>
                        </select>
                      
									/* <input type="text" class="form-control" id="until_t" name="cmptime" /> */
									<label for="probootstrap-date-departure">Insert Image</label>
				                        <input type="file" id="file" class="form-control" placeholder="Insert Image" name="fileToUpload">
									<div class="text-right">
										<input type="submit" value="Add Complaint" name="submit">
										<a href="publicviewcomplaint.php" style="color:#000;">View Complaint</a>
									</div>
								</form>


						</div>
					</div>
				</div> 
			</div>

				
<?php
if (isset($_POST['submit'])) {
	$ctitle=$_POST['cmptitle'];
	$cdesc=$_POST['cmpdesc'];
	$ctype=$_POST['cmptype'];
	$carea=$_POST['cmparea'];
	$cdate=$_POST['cmpdate'];
	$ctime=$_POST['cmptime'];
	$prt=$_POST['priority'];
	$dbfilename='';
	if(isset($_POST['person'])){
			$cperson=$_POST['person'];

		}else{
				$cperson='unknown';

		}
	include 'dbconn.php';
	$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
var_dump($target_file);
echo "imageFileType ".$imageFileType;
 //Check if image file is a actual image or fake image
if(isset($_POST['submit'])){

$check = filesize($_FILES["fileToUpload"]["tmp_name"]);
	   if($check !== false) {
	        //echo "File is not an image - " . $check["mime"] . ".";
	        //echo "<script type='text/javascript'>alert('File is not an image - " . $check["mime"] . "');
    //</script>";
	        $uploadOk = 1;
	    } else {
	        echo "File is an image.";
	        $uploadOk = 0;
	    }
	}
/* Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
 Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}*/
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        	  		$dbfilename=$target_dir .basename($_FILES["fileToUpload"]["name"]);

    } else {
       // echo "Sorry, there was an error uploading your file.".mysqli_error($con);
    }
}

	$query="INSERT INTO complaint_reg values('0','$user','$ctitle','$cdesc','$ctype','$carea','$cperson','$cdate',NOW(),'$prt','$dbfilename','none','unprocessed')";
//echo $query;
	$row=mysqli_query($con,$query);
	if(!$row){
		echo "<script type='text/javascript'>alert('Insert Failed'); </script>";
	} else { 
		echo "<script type='text/javascript'>alert('Complaint Registered') </script>";
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