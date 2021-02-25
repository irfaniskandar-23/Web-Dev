<?php

    include('sessionadmin.php');
 include 'headeradmin.php';
 include('dbconnect.php');


$sql="SELECT * FROM tb_booking 
LEFT JOIN tb_status  ON tb_booking.b_status=tb_status.s_id 
LEFT JOIN tb_vehicle ON tb_booking.b_vehicle=tb_vehicle.v_reg  
LEFT JOIN tb_customer ON tb_booking.b_customer=tb_customer.c_ic 
WHERE b_status='1'";

               

 $result=mysqli_query($con,$sql);
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">BOOKING LIST</h1>
        </div><!-- /.col -->
      </div><br>
      <div class="row mb-2">
        <div class="col-sm-12">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Booking List</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>booking ID</th>
                  <th>Customer</th>
                  <th>contact</th>
                  <th>vehicle</th>
                  <th>Pickup Date</th>
                  <th>Return Date</th>
                  <th>total price</th>
                  <th>status</th>
                  <th>operation</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  while($row=mysqli_fetch_array($result))
                  {
                    echo"<tr>";
                     echo "<td>".$row['b_id']."</td>";
                     echo "<td>".$row['c_name']."</td>";
                     echo "<td>".$row['c_contact']."</td>";
                     echo "<td>".$row['v_type']."</td>";
                     echo "<td>".$row['b_bdate']."</td>";
                     echo "<td>".$row['b_rdate']."</td>";
                     echo "<td>".$row['b_totalprice']."</td>";
                     echo "<td>".$row['s_desc']."</td>";
                     echo "<td>";
                      echo"<a href='adminapprove.php?id=".$row['b_id']."' class='btn btn-primary'>View</a>&nbsp";
                     echo"</td>";
                    echo"</tr>";
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>



<?php include 'footer.php';?>
