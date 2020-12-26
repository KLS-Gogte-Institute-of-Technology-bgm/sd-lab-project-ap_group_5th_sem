<?php

include "dbconn.php";
$cmp_id=$_GET['cmpid'];

$q="UPDATE complaint_reg set status='processed' where cmp_id='$cmp_id'";
$sql=mysqli_query($con,$q) or die("error".mysqli_error($con));

if(!$sql){
    echo "<script type='text/javascript'>alert('Update error');</script>";

}else{
echo "<script type='text/javascript'>alert('complaint Processed'); window.location.href='policeViewComplaint.php';</script>";

}



?>