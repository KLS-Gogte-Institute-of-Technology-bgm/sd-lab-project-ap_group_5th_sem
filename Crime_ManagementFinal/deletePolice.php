<?php

include "dbconn.php";
$p_id=$_GET['id'];

$q="DELETE From police_reg where id='$p_id'";
$sql=mysqli_query($con,$q) or die("error".mysqli_error($con));

if(!$sql){
    echo "<script type='text/javascript'>alert('Delete error');</script>";

}else{
echo "<script type='text/javascript'>alert('Police Details Deleted'); window.location.href='viewPolice.php';</script>";

}



?>