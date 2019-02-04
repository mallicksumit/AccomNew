<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from triper.dexignlab.com/xhtml/hotel-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 05:59:09 GMT -->
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
	<title>Booking PG</title>
	
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
<div class="page-wraper">
<div id="loading-area"></div>

    <!-- header -->
    <?php include('includes/header.php') ?> <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">PGs Booking</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>PGs Details</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<div class="content-block">
            <div class="section-full content-inner">
				<div class="container">
						<?php include("includes/connect.php");
						$location = $_GET['location'];
							$query = mysqli_query($db,"select * from hotelbooking where place='$location'");
						
						while($rows = mysqli_fetch_assoc($query))
							{
								$name = $rows['name'];
								$place = $rows['place'];
								$price = $rows['price'];
								$actualprice = $rows['actualprice'];
								$feature = $rows['feature'];
								$allowed = $rows['allowed'];
								$about = $rows['about'];
								$locate = $rows['locate'];
								$eat = $rows['eat'];
								
								
							?>
					<div class="row m-b30">
						<div class="col-lg-8">
							<div class="d-flex info-bx m-b30">
								<div class="tour-title">
								
									<h2><?php echo $name; ?></h2>
									<p><i class="fa fa-map-marker m-r5"></i><?php echo $place; ?> <a href="#" class="text-primary">View on Map</a></p>
									<p><?php echo $feature; ?> <?php echo $allowed; ?></p>
								</div>
								<div class="tour-price ml-auto">
									<span>Per Room </span>
									<h2 class="price"><?php echo $price; ?></h2>
									<h4 class="actual-price"><?php echo $actualprice; ?>,</h4>
								</div>
							</div>
							
							<div class="product-gallery on-show-slider"> 
                                <div id="sync1" class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-btn-1 primary">
												<?php 
									$query1 = mysqli_query($db,"select * from hotelimage where name='$name' AND place='$place'");
								
									while($rows1 = mysqli_fetch_assoc($query1))
									{
										$image = $rows1['image'];
										
										?>
									<div class="item">
							
										<div class="dlab-box">
											<div class="dlab-thum-bx">
												<img src="images/<?php echo $image; ?>" alt="">
											</div>
										</div>
							
									</div>
											<?php 
											}
											?>
								</div>
							
							
								<div id="sync2" class="owl-carousel owl-theme owl-none">'
									
							<?php 
							$query = mysqli_query($db,"select * from hotelimage where name='$name' AND place='$place'");
						
							while($rows2 = mysqli_fetch_assoc($query))
							{
								
								$thumb = $rows2['thumb'];
								?>
									<div class="item">
										<div class="dlab-media">
											<img src="images/<?php echo $thumb; ?>" alt="">
										</div>
									</div>
									<?php
							}
							?>
								</div>
							
							</div>
							
							<div class="tour-days">
								<h2 class="m-b10">About PGs</h2>
								
								<div class="row">
									<div class="col-md-12 col-lg-12 col-sm-12">
										<ul class="list-hand-point primary">
											<?php echo $about; ?>
										</ul>
									</div>
									<div class="col-md-12 col-lg-12 col-sm-12">
										<h5>Where we are Located</h5>
										<ul class="list-hand-point primary">
											<?php echo $locate; ?>
										</ul>
									</div>
									<div class="col-md-12 col-lg-12 col-sm-12">
										<h5>Where to Eat</h5>
										<ul class="list-hand-point primary">
											<?php echo $eat; ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="sticky-top">
								<form class="hotel-booking">
									<div class="row">
										<div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6">
											<div class="form-group">
												<div class="input-group">
													<input name="dzName" required="" class="form-control" placeholder="" type="date">
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6">
											<div class="form-group">
												<div class="input-group">
													<input name="dzName" required="" class="form-control" placeholder="" type="date">
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6 col-6">
											<div class="form-group">
												<div class="quantity btn-quantity">
													<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
												</div>
												<span class="font-12">Rooms</span>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6 col-6">
											<div class="form-group">
												<div class="quantity btn-quantity">
													<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
												</div>
												<span class="font-12">Adults</span>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6 col-6">
											<div class="form-group">
												<div class="quantity btn-quantity">
													<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
												</div>
												<span class="font-12">Children</span>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-12 col-sm-6 col-6">
											<div class="form-group">
												<div class="input-group">
													<select class="selectpicker" multiple data-actions-box="true">
														<option>Single Room</option>
														<option>Shared</option>
														<option>Shared (Smoking)</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-12">
											<div class="booking-total">
												<h3 class="d-flex">Rs.4000 <span>Sub Total1 room per month</span></h3>
												
											</div>
										</div>
										<div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-12">
											<button type="submit" class="site-button btn-block">Book Now</button>
										</div>
									</div>
								</form>
								<div class="m-t30">
									<img src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/add/add-bnr.jpg" class="d-md-none d-xl-block d-lg-block" alt=""/>
								</div>
							</div>
						</div>
					</div>
					
				<!-- Why Chose Us -->
			<div class="modal fade submit-query" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Check Price & Availability</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Customer City</label>
										<div class="input-group">
											<select class="form-control">
												<option>Select City</option>
												<option>Banglore</option>
												<option>Mumbai</option>
												<option>Kolkata</option>
                                                <option>New Delhi</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Customer State</label>
										<div class="input-group">
											<select class="form-control">
												<option>Select State</option>
                                                <option>Banglore</option>
												<option>Kolkata</option>
												<option>Mumbai</option>
												<option>New Delhi</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Departure Date Selected</label>
										<div class="input-group">
											<input name="dzName" required="" class="form-control" type="date">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="quantity btn-quantity">
										<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
										<span class="font-12">Adult (12yrs +)</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="quantity btn-quantity">
										<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
										<span class="font-12">Child (2-12yrs)</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="quantity btn-quantity">
										<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
										<span class="font-12">Infant (0-2yrs)</span>
									</div>
								</div>
							</form>
							
						</div>
						<div class="modal-footer d-flex justify-content-between">
							<button type="submit" class="site-button-secondry" data-dismiss="modal">Close</button>
							<button type="submit" class="site-button">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade submit-query" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Get the Best PGs Planned by Accom Experts!</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Enter your contact details and we will get the best PGs suiting all your requirements.</h5>
							<form class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="dzName" required="" class="form-control" placeholder="Your Name" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="dzName" required="" class="form-control" placeholder="Your Email Address" type="email">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<div class="input-group">
											<input name="dzName" required="" class="form-control" placeholder="Mobile No" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<div class="input-group">
											<input name="dzName" required="" class="form-control" placeholder="Your City" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<div class="input-group">
											<input name="dzName" required="" class="form-control" type="date">
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="quantity btn-quantity">
										<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
										<span class="font-12">Adult (12yrs +)</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="quantity btn-quantity">
										<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
										<span class="font-12">Child (2-12yrs)</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="quantity btn-quantity">
										<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
										<span class="font-12">Infant (0-2yrs)</span>
									</div>
								</div>
							</form>
							
						</div>
						<div class="modal-footer d-flex justify-content-between">
							<button type="submit" class="site-button-secondry" data-dismiss="modal">Close</button>
							<button type="submit" class="site-button">Submit</button>
						</div>
					</div>
				</div>
			</div>
         <?php 
				}
				?>
			</div>
			
	   </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer -->
  
									
        
     <?php include('includes/footer.php') ?>
    <button class="scroltop fa fa-plane" ></button>
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
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/paroller/skrollr.min.js"></script><!-- PAROLLER -->
<script>
$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 8; //globaly define number of elements per page
  var syncedSecondary = true;

	  sync1.owlCarousel({
		items : 1,
		slideSpeed : 2000,
		nav: true,
		autoplay: false,
		dots: false,
		loop: true,
		responsiveRefreshRate : 200,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
	  }).on('changed.owl.carousel', syncPosition);

	  sync2.on('initialized.owl.carousel', function () {
		  sync2.find(".owl-item").eq(0).addClass("current");
		}).owlCarousel({
		items : slidesPerPage,
		dots: false,
		nav: false,
		margin:5,
		smartSpeed: 200,
		slideSpeed : 500,
		slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
		responsiveRefreshRate : 100
	  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).index();
		//sync1.data('owl.carousel').to(number, 300, true);
		
		sync1.data('owl.carousel').to(number, 300, true);
		
	});
});
</script>
</body>

<!-- Mirrored from triper.dexignlab.com/xhtml/hotel-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 05:59:19 GMT -->
</html>
