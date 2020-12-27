<?php

include "dbconn.php";
$cmp_id=$_GET['cmpid'];

$q="DELETE From complaint_reg where cmp_id='$cmp_id'";
$sql=mysqli_query($con,$q) or die("error".mysqli_error($con));

if(!$sql){
    echo "<script type='text/javascript'>alert('Delete error');</script>";

}else{
echo "<script type='text/javascript'>alert('complaint Deleted'); window.location.href='officerviewcomplaint.php';</script>";

}



?>