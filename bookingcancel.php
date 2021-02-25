<?php
if((isset($_GET['bid']))&&(isset($_GET['cic'])))
 {
 	$bid=$_GET['bid'];
 	$cic=$_GET['cic'];
 }
 header('location:manage.php?id='.$cic);
 include('dbconnect.php');

//delete data
$sql="DELETE FROM tb_booking WHERE b_id='$bid'";

$result=mysqli_query($con,$sql);


mysqli_close($con);
?>