
<?php
    include('cbssession.php');   
 include ('dbconnect.php');

 $cic=$_SESSION['cic'];
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

$sql="INSERT INTO tb_booking(b_customer,b_vehicle,b_bdate,b_rdate,b_totalprice,b_status )
      VALUES  ('$cic','$fcar','".date('Y-m-d',strtotime($fpdate))."','".date('Y-m-d',strtotime($frdate))."','$totalprice','1')";

//var_dump($sql);

$result=mysqli_query($con,$sql);


mysqli_close($con);



header('location:manage.php');





?>


