<?php
  header('location:adminlist.php');
 include('dbconnect.php');


$fbid=$_POST['fbid'];
$fstatus=$_POST['fstatus'];


$sql="UPDATE tb_booking
      SET b_status='$fstatus'
      WHERE b_id='$fbid'";
 

// var_dump($sql);

 $result=mysqli_query($con, $sql);


  mysqli_close($con);


 
?>


 

  
