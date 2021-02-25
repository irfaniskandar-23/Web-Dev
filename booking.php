
<?php
 include 'header.php';
  include ('dbconnect.php');

     $sql="SELECT * FROM tb_vehicle";  
     $result=mysqli_query($con,$sql);
          
  ?>

 <div class="content-wrapper">
    <!-- Content Header (Page headr) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Booking Page</h1>
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
                         while($row=mysqli_fetch_array($result))
                        {
                          if($count == 1)
                          {
                            echo '<div class="carousel-item active">

                                <img class="d-block w-100" src="images/'.$row['v_img'].'" alt="'.$row['v_type'].'"<br><br><h1 style="font-family:American Typewriter,serif; text-align:center;">'.$row['v_type'].'&nbsp&nbsp('.$row['v_year'].')<br>RM '.$row['v_price'].' /day</h1>
                              </div>';


                          }
                          else
                          {
                            echo '<div class="carousel-item">
                                <img class="d-block w-100" src="images/'.$row['v_img'].'" alt="'.$row['v_type'].'"<br><br><h1 style="font-family:American Typewriter,serif; text-align:center;">'.$row['v_type'].'&nbsp&nbsp('.$row['v_year'].')<br>RM '.$row['v_price'].' /day</h1>
                              </div>';
                          }

                          $count = $count + 1;

                    }

                    ?>
                    
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
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
    

      <form role="form" method="POST" action="bookingprocess.php" onsubmit="return confirm('Are you sure to book this car? Please click OK to continue.');">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInput">Select Car</label>
                    <?php
                      $sql = "SELECT * FROM tb_vehicle";
                      $result = mysqli_query($con, $sql);

                      echo '<select class="form-control" id="fcar" name="fcar">';
                      while($row=mysqli_fetch_array($result))
                      {
                        echo "<option value='".$row['v_reg']."'>".$row['v_type']."</option>";
                      }

                      echo '</select>';
                    ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInput">Select Pickup Date</label>
                    <input type="text" id="my_date_picker1" class="form-control" name="fpdate" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput">Select Return Date</label>
                    <input type="text" id="my_date_picker2" class="form-control" name="frdate" required="required">
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

