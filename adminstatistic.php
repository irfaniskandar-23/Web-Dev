<?php
  include 'headeradmin.php';
  include('dbconnect.php');
  
 
  $sql = "SELECT * FROM tb_booking
          LEFT JOIN tb_status ON tb_booking.b_status = tb_status.s_id 
          LEFT JOIN tb_vehicle ON tb_booking.b_vehicle=tb_vehicle.v_reg
           WHERE b_status='2'";
  $result=mysqli_query($con,$sql);

  $keta1=0;
  $keta2=0;
  $keta3=0;
  $keta4=0;
  $keta5=0;
  $keta6=0;

  while($row=mysqli_fetch_array($result))
  {
    if($row['v_reg']=='JDT333')
    {
      $keta1=$keta1+1;
    }
    else if($row['v_reg']=='JJO 4879')
    {
      $keta2=$keta2+1;
    }
    else if($row['v_reg']=='NDF 9872')
    {
      $keta3=$keta3+1;
    }
    else if($row['v_reg']=='PKV 3063')
    {
      $keta4=$keta4+1;
    }
    else if($row['v_reg']=='PPP 200')
    {
      $keta5=$keta5+1;
    }
    else if($row['v_reg']=='WWW 1073')
    {
      $keta6=$keta6+1;
    }
  }
  

  echo "<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
        <script type='text/javascript'>
          google.charts.load('current', {packages:['corechart']});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Car', 'Booking Percentage per Car'],
              ['Mercedez Benz',     ".$keta1."],
              ['BMW X7',      ".$keta2."],
              ['Range Rover',  ".$keta3."],
              ['Nissan GTR', ".$keta4."],
              ['Volkswagen',    ".$keta5."],
              ['Mini Cooper',    ".$keta6."]
            ]);

            var options = {
              title: 'Iskay Car Rental Booking Statistics'  ,
              pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
          }
        </script>";
?>
               
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Admin Analytics</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div id="donutchart" style="width: 100%; height: 500px;"></div>
          </div>
        </div>
      </div>
    </section>
  </div>



<?php include 'footer.php';?>