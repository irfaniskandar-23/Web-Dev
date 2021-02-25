<?php
 header('location:adminlist.php');
  include ('dbconnect.php');

  //Retrive data from form and session
  $fbid = $_POST['fbid'];
  $fstatus = $_POST['fstatus'];

  //Update booking into table
  $sql = "UPDATE tb_booking
          SET b_status='$fstatus'
          WHERE b_id='$fbid'";

  //Check SQL output
 //  var_dump($sql);

  //Execute SQL
  $result = mysqli_query($con, $sql);

  //Close connection
  mysqli_close($con);

?>
