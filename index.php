<?php
include("dbconnect.php");
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Car Booking System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <style>
      .footer {
   left: 0;
   height: 100%
   bottom: 0;
   width: 100%;
   background-color: gray;
   color: white;
   text-align: center;
}
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miss+Fajardose&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css1/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css1/animate.css">
    
    <link rel="stylesheet" href="css1/owl.carousel.min.css">
    <link rel="stylesheet" href="css1/owl.theme.default.min.css">
    <link rel="stylesheet" href="css1/magnific-popup.css">

    <link rel="stylesheet" href="css1/aos.css">

    <link rel="stylesheet" href="css1/ionicons.min.css">

    <link rel="stylesheet" href="css1/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css1/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css1/flaticon.css">
    <link rel="stylesheet" href="css1/icomoon.css">
    <link rel="stylesheet" href="css1/style.css">
  </head>
  <body>
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"></div>

					    </div>
					    
					    
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Iskay Car Rental</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a  class="nav-link js-scroll-trigger" href="#services">Services</a></li>
	          <li class="nav-item"><a  class="nav-link js-scroll-trigger"href="#cars">Our Cars</a></li>
            <li class="nav-item"><a class="nav-link" href="nakmasuk.php">Login to Book</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(images/chill.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

          
            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4 mt-5">Choose Your Ideal Car</h1>
              
            </div>

    

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/fam.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4 mt-5">Manage Your booking</h1>
              
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/gtg.jfif);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4 mt-5">enjoy your day</h1>
             
            </div>

          </div>
        </div>
      </div>
    </section>
	

		<section class="ftco-section ftco-wrap-about ftco-no-pb" id="services">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-10 wrap-about ftco-animate text-center">
	          <div class="heading-section mb-4 text-center">
	          	
	            <h2 class="mb-4">Our Services</h2>
	          </div>
						<p>We Provides cars for your use..Perfrom these easy steps and you are good to go</p>
            <p>1. Complete Your Registration as a first time user..Login if you already have an account</p>
            <p>2. Manage your booking by choosing your ideal car,pickup date and return date. You can also Modify the booking that has been made</p>
            <p>3. You are already set. Visit us again next time..Thank you</p><br><br>

					
					</div>
				</div>
			</div>
		</section>

		
		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/stati.jpg);" data-stellar-background-ratio="1.0">
		<!-- <section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter"> -->
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="10">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="15000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="5">0</strong>
		                <span>Brand of cars</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="25780">0</strong>
		                <span>Number of visitors</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-section bg-light" id="cars">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	
            <h2 class="mb-4">Pick Your Cars</h2>
          </div>
        </div>
        <div class="row">
          <?php 

          $sql="SELECT * FROM tb_vehicle";
          $result=mysqli_query($con,$sql);

          while($row=mysqli_fetch_array($result))
          {
            echo' <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="d-flex justify-content-center align-items-center">
               <img src="images/'.$row['v_img'].'" style="width: 100%; height: 200px;">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">'.$row['v_type'].'</h3>
                <h5 class="heading">RM '.$row['v_price'].' /day</h5>
                <p>'.$row['v_desc'].'</p><br><br>
              </div>
            </div>      
          </div>';

          }

          ?>
          
        </div>
			</div>
		</section>

    

   
    
		
		<!-- <section class="ftco-section testimony-section" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5"> -->
		
		
>
<div class="footer">
  <p>Iskay car Rent Sdn.Bhd</p>
</div>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js1/jquery.min.js"></script>
  <script src="js1/jquery-migrate-3.0.1.min.js"></script>
  <script src="js1/popper.min.js"></script>
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/jquery.easing.1.3.js"></script>
  <script src="js1/jquery.waypoints.min.js"></script>
  <script src="js1/jquery.stellar.min.js"></script>
  <script src="js1/owl.carousel.min.js"></script>
  <script src="js1/jquery.magnific-popup.min.js"></script>
  <script src="js1/aos.js"></script>
  <script src="js1/jquery.animateNumber.min.js"></script>
  <script src="js1/bootstrap-datepicker.js"></script>
  <script src="js1/jquery.timepicker.min.js"></script>
  <script src="js1/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js1/google-map.js"></script>
  <script src="js1/main.js"></script>
    
  </body>
</html>