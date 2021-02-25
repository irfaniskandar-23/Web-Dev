<?php

 include 'headeradmin.php';
 include('dbconnect.php');

?>

 <style>
    u1.listing
    {
      list-style-position: :inside
      font-size:20px;
    }
  </style>
  <div class="content-wrapper">
    <!-- Content Header (Page headr) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1  style="font-size:35px; text-align: center; border-style: dotted; ">Administrator Manual<h1>
          </div><!-- /.col -->
        </div><br>

       <!DOCTYPE html>
		<html>
		<head>
		<title>Admin Manual</title>
		</head>
		<body>

		<h1>1) Home</h1><br>
		<p style ="font-size: 20px">Once login, Admin displayed with the overview of the system that includes: </p>
   
   <u1 class="listing">

      <li>List of Booking (Booking Id, vehicle, Pickup Date, Return Date, Total Price, Status).</li>
      <li> Total number of booking</li>
      <li> A Return Date</li>
      <p><a href="adminhome.php">view Dashboard	</a><br>



    <br><h1>2) Manage Customer's booking</h1><br>
    <p style ="font-size: 20px">Admin will have the information of the customer's detail, booking details and vehicle details. Admin will then manage all customer's booking by : </p>
   
   <u1 class="listing">

      <li>Approve Booking</li>
      <li> Reject Booking</li>
     
      <p><a href="admin.php">Manage Booking</a></p><br>


       <br><h1>3) Update Booking Status</h1><br>
    <p style ="font-size: 20px">Admin will have the authority to change the booking status (in case there is a mistake made earlier) simply by : </p>
   
   <u1 class="listing">

      <li>Approve Booking</li>
      <li>Reject Booking</li>
     
      <p><a href="adminlist.php">Update Booking</a></p><br>


		</body>
		</html>
 
</div>
</div>
</div>

<?php include 'footer.php';?>



 