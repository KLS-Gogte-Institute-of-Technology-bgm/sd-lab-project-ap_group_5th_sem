<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "crimeMangsystem";
$con=mysqli_connect($host,$dbuser,$dbpass); 

if(!$con) die("Cannot Connect to Database Server");
mysqli_select_db($con,$db) or die("database does not exist");
?>