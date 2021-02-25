<?php
 $cic=$_POST['cic'];
 header('location:manage.php?id='.$cic);
 include ('dbconnect.php');
 $fbid=$_POST['fbid'];
 $fcar=$_POST['fcar'];
 $fpdate=$_POST['fpdate'];
 $frdate=$_POST['frdate'];

//converting date value into ISO format and get numbe od days
 $start=date('Y-m-d H:i:s',strtotime($fpdate));
 $return=date('Y-m-d H:i:s',strtotime($frdate));

$daydiff=abs(strtotime($frdate)-strtotime($fpdate));
$numday=$daydiff/(60*60*24);

//get vechicle price from db

$sqlprice="SELECT v_price FROM tb_vehicle WHERE v_reg='$fcar'";
$resultprice=mysqli_query($con,$sqlprice);

$rowprice=mysqli_fetch_array($resultprice);


//calculate total price
$totalprice=$numday*($rowprice['v_price'])+$rowprice['v_price'];

//insert new booking to table
$sql="UPDATE tb_booking
       SET b_vehicle ='$fcar',b_bdate='".date('Y-m-d',strtotime($fpdate))."',b_rdate='".date('Y-m-d',strtotime($frdate))."',b_totalprice='$totalprice',b_status='1'
       WHERE b_id='$fbid'";
        

//var_dump($sql);

$result=mysqli_query($con,$sql);


mysqli_close($con);
?>