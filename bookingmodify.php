<?php
 include ('dbconnect.php');
 include 'header.php';

 if(isset($_GET['id']))
 {
  $bid=$_GET['id'];
 }

 $sql="SELECT * FROM tb_booking 
        LEFT JOIN tb_vehicle ON tb_booking.b_vehicle=tb_vehicle.v_reg 
        LEFT JOIN tb_customer ON tb_booking.b_customer=tb_customer.c_ic
          WHERE b_id='$bid'";

 
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);

 ?>

   <div class="content-wrapper">
    <!-- Content Header (Page headr) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Modify Booking Booking</h1>
          </div><!-- /.col -->
        </div><br>
          <div class="row mb-2">
           
          <div class="col-sm-6">

            
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">

                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                  </ol>
                  <div class="carousel-inner">


                    <?php 
                      $count = 1;
                      $sql2="SELECT * FROM tb_vehicle";
                      $result2=mysqli_query($con,$sql2);
                         while($row2=mysqli_fetch_array($result2))
                        {
                          if($count == 1)
                          {
                            echo '<div class="carousel-item active">

                                <img class="d-block w-100" src="images/'.$row2['v_img'].'" alt="'.$row2['v_type'].'"<br><br><h1 style="font-family:American Typewriter,serif; text-align:center;">'.$row2['v_type'].'&nbsp&nbsp('.$row['v_year'].')<br>RM '.$row2['v_price'].' /day</h1>
                              </div>';


                          }
                          else
                          {
                            echo '<div class="carousel-item">
                                <img class="d-block w-100" src="images/'.$row2['v_img'].'" alt="'.$row2['v_type'].'"<br><br><h1 style="font-family:American Typewriter,serif; text-align:center;">'.$row2['v_type'].'('.$row['v_year'].')<br>RM '.$row2['v_price'].' /day</h1>
                              </div>';
                          }

                          $count = $count + 1;

                    }

                    ?>
                    
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            
    
       

    <div class="col-sm-6">
      <div class="card card-dark">
         <div class="card-header">
          <h3 class="card-title" >Booking Form</h3>
          </div>
    

      <form role="form" method="POST" action="bookingmodifyprocess.php" onsubmit="return confirm('Are you sure to book this car? Please click OK to continue.');">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInput">Select Car</label>
                    <?php
                      $sql1 = "SELECT * FROM tb_vehicle";
                      $result1 = mysqli_query($con, $sql1);

                      echo '<select class="form-control" id="fcar" name="fcar">';
                    

                        while($row1=mysqli_fetch_array($result1))
                      {
                        if($row1['v_reg'] == $row['b_vehicle'])
                        {
                          echo "<option selected='selected' value='".$row1['v_reg']."'>".$row1['v_type']."</option>";
                        }
                        else
                        {
                          echo "<option value='".$row1['v_reg']."'>".$row1['v_type']."</option>";
                        }
                      }
                      echo '</select>';
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInput">Select Pickup Date</label>
                    <input type="text" id="my_date_picker1"  value="<?php echo $row['b_bdate'];?>" class="form-control" name="fpdate" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput">Select Return Date</label>
                    <input type="text" id="my_date_picker2"  value="<?php echo $row['b_rdate'];?>" class="form-control" name="frdate" required="required">
                  </div>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
                  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
                  <script> 
                      $(document).ready(function() { 
            
                          $(function() { 
                              $("#my_date_picker1").datepicker({
                                dateFormat: 'dd-mm-yy',
                                minDate: '0d'
                              }); 
                          }); 
            
                          $(function() { 
                              $("#my_date_picker2").datepicker({
                                dateFormat: 'dd-mm-yy'
                              });
                          }); 
            
                          $('#my_date_picker1').change(function() { 
                              startDate = $(this).datepicker('getDate'); 
                              $("#my_date_picker2").datepicker("option", "minDate", startDate); 
                          }) 
            
                          $('#my_date_picker2').change(function() { 
                              endDate = $(this).datepicker('getDate'); 
                              $("#my_date_picker1").datepicker("option", "maxDate", endDate); 
                          }) 
                      }) 
                  </script>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input value="<?php echo $row['b_id'];?>" type="hidden" id="fbid" name="fbid">
                  <input value="<?php echo $row['c_ic'];?>" type="hidden" id="cic" name="cic">
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
  

  


<?php include 'footer.php';?>