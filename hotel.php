<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from triper.dexignlab.com/xhtml/hotel.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 05:58:44 GMT -->
<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
		<meta name="description" content="Triper : Tour, Travel & Travel Agency Template" />
	<meta property="og:title" content="Triper : Tour, Travel & Travel Agency Template" />
	<meta property="og:description" content="Triper : Tour, Travel & Travel Agency Template" />
	<meta property="og:image" content="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="https://s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>AccomNow:PG</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="https://s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/js/html5shiv.min.js"></script>
	<script src="https://s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/css/skin/skin-1.css">
	<link rel="stylesheet" href="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/datepicker/css/bootstrap-datetimepicker.min.css"/>
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/css/navigation.css">
	<!-- Revolution Navigation Style -->
</head>
<body id="bg">
<div id="loading-area"></div>
<div class="page-wraper">
        <?php include('includes/header.php') ?>
    <!-- Content -->
    <div class="page-content">
		<!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Paying Guest Rooms</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>PGs</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- PACKAGES -->
		<div class="section-full bg-white content-inner dlab-about-1">
			<div class="container">
			
				<div class="section-head text-black text-center">
					<h2 class="m-b0 text-uppercase">Popular Paying Guest Location</h2>
					<p class="font-18">We have in stock the most comfortable places to stay.Choose according to your wish.</p>
				</div>
				<div class="row">
				<?php 
				include("includes/connect.php");
					$query = mysqli_query($db,"select * from hotel");
				
				while($rows = mysqli_fetch_assoc($query))
					{
						$name = $rows['name'];
						$allowed = $rows['allowed'];
						$price = $rows['price'];
						$image = $rows['image'];
						
						
					?>
					<div class="col-md-6 col-lg-4 col-sm-6 m-b30">
						<div class="dlab-box hotal-box" data-tilt data-tilt-max="10" data-tilt-speed="1">
							<div class="dlab-media dlab-img-effect dlab-img-overlay2"> <img src="images/<?php echo $image;?>" alt="">
								<div class="dlab-info-has p-a20 text-white no-hover">
									<h4 class="m-t0 m-b10"><?php echo $name;?></h4>
									<span><?php echo $allowed;?></span>
									<h2 class="m-t10 m-b20"><?php echo $price;?></h2>
									<a href="hotel-booking.php?location=<?php echo $name?>" class="site-button outline outline-2 radius-xl">Book Now</a>
								</div>
							</div>
						</div>
					</div>
					
					<?php
					}
					?>
						
				</div>
			</div>
		</div>
		<!-- PACKAGES END -->
	</div>
	 <?php include('includes/footer.php') ?>
    <!-- scroll top button -->
    <button class="scroltop fa fa-plane " ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/wow/wow.js"></script><!-- WOW JS -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->

<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/rangeslider/rangeslider.js" ></script><!-- Rangeslider -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/datepicker/js/moment.js"></script><!-- DATEPICKER JS -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script><!-- DATEPICKER JS -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script>
jQuery(document).ready(function() {
	'use strict';
	$('#datetimepicker4').datetimepicker();
});	/*ready*/
</script>
 

</body>

<!-- Mirrored from triper.dexignlab.com/xhtml/hotel.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 05:58:44 GMT -->
</html>