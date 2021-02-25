<?php
 include 'headeradmin.php';
 include('dbconnect.php');

  if(isset($_GET['id']))
 {
  $bid=$_GET['id'];
 }

 $sql="SELECT * FROM tb_booking 
 LEFT JOIN tb_status  ON tb_booking.b_status=tb_status.s_id 
 LEFT JOIN tb_vehicle ON tb_booking.b_vehicle=tb_vehicle.v_reg 
 LEFT JOIN tb_customer ON tb_booking.b_customer=tb_customer.c_ic 
 WHERE b_id='$bid'";


 $result=mysqli_query($con,$sql);
 $rows=mysqli_fetch_array($result);

?>


<div class="content-wrapper">
    <!-- Content Header (Page headr) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">  BOOKING DETAILS</h1>
          </div><!-- /.col -->
        </div><br>
          <div class="row mb-2">
           
          <div class="col-sm-12">

<form method="POST" onsubmit="return confirm('are you to with your decision? click OK to continue')"action="adminupdateprocess.php">
    <div class="form-group">

       <label for="email">Select Decision:</label>

  
         <?php
          //Retrive all status
          $sql2 = "SELECT * FROM tb_status";
          $result2 = mysqli_query($con, $sql2);
          
          echo '<select class="form-control" id="fstatus" name="fstatus">';
          while($rows2=mysqli_fetch_array($result2))
          {
            if($rows2['s_id'] == '1')
            {
              echo "";
            }
            else
            {
              if($rows2['s_id'] == $rows['b_status'])
              {
                echo "<option selected='selected' value='".$rows2['s_id']."'>".$rows2['s_desc']."</option>";
              }
              else
              {
                echo "<option value='".$rows2['s_id']."'>".$rows2['s_desc']."</option>";
              }
            }
          }

            echo '</select>';
        ?>


        </div>

        <input type="hidden"  id="fbid" name="fbid" 
          value="<?php echo $rows['b_id'];?>">
          <button type="submit" class="btn btn-primary">Change</button>
            <a href="adminlist.php" class="btn btn-secondary float-right">Back</a>

          </form>
        </div>
      </div>

 <div class="row mb-2">
    <div class="col-sm-6">
  <br><h3>Booking Details</h3>
          
  <table class="table table-striped">

  <tbody>
 <tr><td>Booking ID: <?php echo $bid;?></td></tr>
 <tr><td>Pick up Date: <?php echo $rows['b_bdate'];?></td></tr>
<tr><td>Return Date: <?php echo $rows['b_rdate'];?></td></tr>
<tr><td>Total Price: <?php echo $rows['b_totalprice'];?></td></tr>
</tbody>
</table>
</div>

<div class="col-sm-6">

  <br><h3>Customer Details</h3>
  <table class="table table-hover">

  <tbody>
 <tr><td>IC:<?php echo $rows['c_ic'];?> </td></tr>
 <tr><td>Name:<?php echo $rows['c_name'];?></td></tr>
<tr><td>Contact:<?php echo $rows['c_contact'];?></td></tr>
<tr><td>Address:<?php echo $rows['c_address'];?></td></tr>
</tbody>
</table>
</div>
</div>


<div class="row mb-2">
    <div class="col-sm-12">
  <br><h3>Vehicle Details</h3>
  <table class="table table-hover">

  <tbody>
 <tr><td>Vehicle: <?php echo $rows['v_type'];?></td></tr>
 <tr><td>Registration Number:<?php echo $rows['v_reg'];?> </td></tr>
<tr><td>vehicle year:<?php echo $rows['v_year'];?></td></tr>
<tr><td>vehicle price:<?php echo $rows['v_price'];?></td></tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

</div>
<?php include'footer.php';
?>




