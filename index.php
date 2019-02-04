<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['user'])) {
	header("Location: index-2.php");
	$res = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['user']);
	$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
    // exit;
}
// else
// 	header("Location: index-2.php");
// select logged in users detail


?>


<!DOCTYPE html>
<html lang="en">

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
	<title>Accom Now:Home</title>
	
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
    <!-- header -->
    <header class="site-header mo-left header">
        <!-- top bar -->
        <div class="top-bar bg-dark" class = "navigation_option" style="visibility: visible;">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="dlab-topbar-left">
						<!-- <ul>
							<li><a class="site-button-link" href="hotel.php">Hotels</a></li>
							<li><a class="site-button-link" href="place.php">Places</a></li>
							<li><a class="site-button-link" href="packages.php">Packages</a></li>
						</ul> -->
					</div>
					<div class="dlab-topbar-right top-login">
						<ul>
							<li><a href="login.php" class="site-button-link">Login</a></li>
							<li><a href="register.php" class="site-button-link">Register</a></li>
							<!-- <li><a href="logout.php?logout" class="site-button-link">Logout</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
        <!-- top bar END-->
        <!-- main header -->
        <div class="sticky-header navbar-expand-lg">
            <div class="main-bar clearfix onepage">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index.php"><img src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/logo.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button-link"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dlab-quik-search bg-primary search-style-1">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="ti-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse navbar myNavbar justify-content-end" id="navbarNavDropdown">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index-2.php">Home</a></li>
							<!-- <li><a href="#">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="about-us.php" class="dez-page">About Us</a></li>
									<li><a href="hotel.php">Hotels</a></li>
									<li><a href="booking-details.php">Booking Details</a></li>
									<li><a href="place.php">Places</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="packages.php">Packages</a></li>
									<li><a href="coming-soon.php" class="dez-page">Coming Soon</a></li>
									<li><a href="error-404.php" class="dez-page">Error 404</a></li>
									<li><a href="login.php" class="dez-page">Login</a></li>
									<li><a href="register.php" class="dez-page">Register</a></li>
								</ul>
							</li> -->
							<!-- <li><a href="#">Hotels <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="hotel.php" class="dez-page">Hotel</a></li>
									<li><a href="hotel-booking.php" class="dez-page">Hotel Booking</a></li>
								</ul>
							</li> -->
							<li><a href="hotel.php">PG <i class="fa fa-chevron"></i></a>
								<!-- <ul class="sub-menu">
									<li><a href="blog-classic.php" class="dez-page">Classic</a></li>
									<li><a href="blog-classic-sidebar.php" class="dez-page">Classic Sidebar</a></li>
									<li><a href="blog-detailed-grid.php" class="dez-page">Detailed Grid</a></li>
									<li><a href="blog-detailed-grid-sidebar.php" class="dez-page">Detailed Grid Sidebar</a></li>
									<li><a href="blog-left-img.php" class="dez-page">Left Image Sidebar</a></li>
									<li><a href="blog-details.php" class="dez-page">Blog Details</a></li>
								</ul> -->
							</li>
							<li><a href="about-us.php">About Us <i class="fa fa-chevron"></i></a>
								
							</li>
							<li><a href="contact.php" class="dez-page">Contact Us</a></li>
							<li id = "profile_place" style="visibility: hidden;"><a href="profile.php" class="site-button-link">uname</a></li>
						</ul>	
					</div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
      <div class="page-content">
		<!-- Main Slider -->
        <div class="rev-slider">
			<div id="rev_slider_265_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container errow-style-1" data-alias="" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
			<div id="rev_slider_265_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
				<ul>  <!-- SLIDE  -->
					<li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/main-slider/slide1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="R/bc3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						<div class="tp-caption tp-shape tp-shapewrapper" 
							id="slide-100-layer-1" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
							data-width="full"
							data-height="full"
							data-whitespace="nowrap"
							data-type="shape" 
							data-basealign="slide" 
							data-responsive_offset="on" 
							data-responsive="off"
							data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","ease":"nothing"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);"> </div>
                         <div class="tp-caption tp-resizeme d-md-block d-none text-white" 
							id="slide-100-layer-3" 
							data-x="180" 
							data-y="70" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+50","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 55px; line-height: 60px; font-weight: 800; letter-spacing: 0px; font-family:Signika;">This is a beta website download our app from the link given below </div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption tp-resizeme d-md-block d-none text-white" 
							id="slide-100-layer-2" 
							data-x="380" 
							data-y="210" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 55px; line-height: 60px; font-weight: 800; letter-spacing: 0px; font-family:Signika;">Find The Best PG in Town</div>
						<div class="tp-caption tp-resizeme d-md-block d-none text-white" 
							id="slide-100-layer-3" 
							data-x="380" 
							data-y="280" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+2000","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 55px; line-height: 60px; font-weight: 800; letter-spacing: 0px; font-family:Signika;">At Affordable Range </div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption   tp-resizeme d-md-block d-none" 
							id="slide-100-layer-4" 
							data-x="380" 
							data-y="360" 
							data-width="[700,700,700,700]"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+2200","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 6; font-size: 18px; line-height: 28px; font-weight: 500; color: #fff; white-space: inherit; font-family:Nunito;">AccomNowis a stop by for the best in place search for the PGs in town.For whatever reason the stay is for we promise to get you the best deal at your affordable price.Join Us and find amazing deals and real time customer support who will help 24*7 to make your stay worth it.
						</div>	
						<!-- LAYER NR. 6 -->
						<div class="tp-caption tp-resizeme d-md-block d-none" 
							id="slide-100-layer-5" 
							data-x="380" 
							data-y="485" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button button-md">Get the App</a>
						</div>
						<div class="tp-caption tp-resizeme d-md-block d-none" 
							id="slide-100-layer-6" 
							data-x="570" 
							data-y="485" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"delay":2700,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button white button-md">Talk To US</a>
						</div>
					</li>
					<li data-index="rs-200" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/main-slider/slide2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="R/bc2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						<div class="tp-caption tp-shape tp-shapewrapper" 
							id="slide-200-layer-1" 
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
							data-width="full"
							data-height="full"
							data-whitespace="nowrap"
							data-type="shape" 
							data-basealign="slide" 
							data-responsive_offset="on" 
							data-responsive="off"
							data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","ease":"nothing"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);"> </div>
                        <div class="tp-caption tp-resizeme d-md-block d-none text-white" 
							id="slide-100-layer-3" 
							data-x="180" 
							data-y="70" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+50","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 55px; line-height: 60px; font-weight: 800; letter-spacing: 0px; font-family:Signika;">This is a beta website download our app from the link given below </div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption tp-resizeme d-md-block d-none text-white" 
							id="slide-200-layer-2" 
							data-x="380" 
							data-y="210" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 55px; line-height: 60px; font-weight: 800; letter-spacing: 0px; font-family:Signika;">Find The Best PG in Town</div>
						<div class="tp-caption tp-resizeme d-md-block d-none text-white" 
							id="slide-200-layer-3" 
							data-x="380" 
							data-y="280" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+2000","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 55px; line-height: 60px; font-weight: 800; letter-spacing: 0px; font-family:Signika;">At Affordable Range</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption   tp-resizeme d-md-block d-none" 
							id="slide-200-layer-4" 
							data-x="380" 
							data-y="360" 
							data-width="[700,700,700,700]"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+2200","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 6; font-size: 18px; line-height: 28px; font-weight: 500; color: #fff; white-space: inherit; font-family:Nunito;">AccomNow is a stop by for the best in place search for the PGs in town.For whatever reason the stay is for we promise to get you the best deal at your affordable price.Join Us and find amazing deals and real time customer support who will help 24*7 to make your stay worth it.
						</div>	
						<!-- LAYER NR. 6 -->
						<div class="tp-caption tp-resizeme d-md-block d-none" 
							id="slide-200-layer-5" 
							data-x="380" 
							data-y="485" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button button-md">Get the App</a>
						</div>
						<div class="tp-caption tp-resizeme d-md-block d-none" 
							id="slide-200-layer-6" 
							data-x="570" 
							data-y="485" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"delay":2700,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button white button-md">Talk To US</a>
						</div>
					</li>
				</ul>
				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
			</div>  
		</div>      <!-- Main Slider -->
		<div class="section-full book-form overlay-black-dark bg-img-fix p-t30 p-b10 mid" style="background-image:url(../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/background/bg1.jpg);">
			<div class="container">
				<form class="row">
					<div class="col-md-4 col-sm-6 col-6 col-lg-2 form-group">
						<label>Keywords</label>
						<input class="form-control" placeholder="Enter Zip Code" type="text">
					</div>
					<div class="col-md-4 col-sm-6 col-6 col-lg-2 form-group">
						<label>Activity</label>
						<select>
							<option>Any</option>
							<option>City Tours</option>
							<option>Cultural &amp; Thematic Tours</option>
							<option>Family Friendly Tours</option>
							<option>Holiday &amp; Seasonal Tours</option>
							<option>Indulgence &amp; Luxury Tours</option>
							<option>Outdoor Activites</option>
							<option>Relaxation Tours</option>
							<option>Wild &amp; Adventure Tours</option>
						</select>
					</div>
					<div class="col-md-4 col-sm-6 col-6 col-lg-2 form-group">
						<label>Destination</label>
						<select>
							<option>Any</option>
							<option>City Tours</option>
							<option>Cultural &amp; Thematic Tours</option>
							<option>Family Friendly Tours</option>
							<option>Holiday &amp; Seasonal Tours</option>
							<option>Indulgence &amp; Luxury Tours</option>
							<option>Outdoor Activites</option>
							<option>Relaxation Tours</option>
							<option>Wild &amp; Adventure Tours</option>
						</select>
					</div>
					<div class="col-md-4 col-sm-6 col-6 col-lg-2 form-group">
						<label>Duration</label>
						<select>
							<option>Any</option>
							<option>City Tours</option>
							<option>Cultural &amp; Thematic Tours</option>
							<option>Family Friendly Tours</option>
							<option>Holiday &amp; Seasonal Tours</option>
							<option>Indulgence &amp; Luxury Tours</option>
							<option>Outdoor Activites</option>
							<option>Relaxation Tours</option>
							<option>Wild &amp; Adventure Tours</option>
						</select>
					</div>
					<div class="col-md-4 col-sm-6 col-6 col-lg-2 form-group">
						<label>Date</label>
						<input type='text' class="form-control" id='datetimepicker4' />
					</div>
					<div class="col-md-4 col-sm-6 col-6 col-lg-2 form-group">
						<label>Find</label>
						<button type="button" onclick="location.href='place.php'" class="site-button btn-block">SEARCH</button>
					</div>
				</form>
			</div>
		</div>
        <!-- About Us -->
		<div class="section-full bg-white content-inner dlab-about-1 promotions" id="about-us">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="text-uppercase m-b0">TOP PLACES</h2>
					<p class="font-18">BEST PACKAGES AVAILABLE</p>
				</div>
				<div class="row" id="masonry">
					<div class="col-lg-4 col-md-6 col-sm-6 m-b30 card-container">
						<div class="dlab-box">
							<div class="dlab-media"> <a href="#">
								<img src="./R/kolkata-victoria.jpg" alt=""></a> 
								<div class="tr-price">
									<span>Rs 3520 </span>
								</div>
							</div>
							<div class="dlab-info p-a20 border-1 text-center">
								<h4 class="dlab-title m-t0"><a href="#">Kolkata</a></h4>
								<p>We invite you to experience here with your family, definitely you are filled with lasting memories and feel awesome.Make Yourself At home.</p>
								
								<div class="tr-btn-info">
									<a href="#" class="site-button radius-no"><i class="fa fa-location-arrow" aria-hidden="true"></i> Kolkata</a> 
									<a href="#" class="site-button bg-primary-dark radius-no"><i class="fa fa-info-circle" aria-hidden="true"></i>  Relax </a> 
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 m-b30 card-container">
						<div class="dlab-box">
							<div class="dlab-media"> <a href="#">
								<img src="./R/bengalore.jpg" alt=""></a> 
								<div class="tr-price">
									<span>Rs 4500</span>
								</div>
							</div>
							<div class="dlab-info p-a20 border-1 text-center">
								<h4 class="dlab-title m-t0"><a href="#"> Bangalore</a></h4>
								<p>We invite you to experience here with your family, definitely you are filled with lasting memories and feel awesome.Make Yourself at Home.</p>
								
								<div class="tr-btn-info">
									<a href="#" class="site-button radius-no"><i class="fa fa-location-arrow" aria-hidden="true"></i> Bangalore</a> 
									<a href="#" class="site-button bg-primary-dark radius-no"><i class="fa fa-info-circle" aria-hidden="true"></i>  Relax </a> 
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 m-b30 card-container">
						<div class="dlab-box">
							<div class="dlab-media"> <a href="#">
								<img src="./R/mumbai.jpg" alt=""></a> 
								<div class="tr-price">
									<span>Rs 4500</span>
								</div>
							</div>
							<div class="dlab-info p-a20 border-1 text-center">
								<h4 class="dlab-title m-t0"><a href="#">Mumbai</a></h4>
								<p>We invite you to experience here with your family, definitely you are filled with lasting memories and feel awesome.Make Yourself at home.</p>
								
								<div class="tr-btn-info">
									<a href="#" class="site-button radius-no"><i class="fa fa-location-arrow" aria-hidden="true"></i> Mumbai</a> 
									<a href="#" class="site-button bg-primary-dark radius-no"><i class="fa fa-info-circle" aria-hidden="true"></i>  Relax </a> 
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 m-b30 card-container">
						<div class="dlab-box">
							<div class="dlab-media"> <a href="#">
								<img src="./R/goa.jpg" alt=""></a> 
								<div class="tr-price">
									<span>Rs 5500</span>
								</div>
							</div>
							<div class="dlab-info p-a20 border-1 text-center">
								<h4 class="dlab-title m-t0"><a href="#">Goa</a></h4>
								<p>We invite you to experience here with your family, definitely you are filled with lasting memories and feel awesome.Make Yourself At home.</p>
								
								<div class="tr-btn-info">
									<a href="#" class="site-button radius-no"><i class="fa fa-location-arrow" aria-hidden="true"></i> Goa</a> 
									<a href="#" class="site-button bg-primary-dark radius-no"><i class="fa fa-info-circle" aria-hidden="true"></i>  Relax </a> 
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 m-b30 card-container">
						<div class="dlab-box">
							<div class="dlab-media"> <a href="#">
								<img src="./R/chenni.jpg" alt=""></a> 
								<div class="tr-price">
									<span>Rs 6000</span>
								</div>
							</div>
							<div class="dlab-info p-a20 border-1 text-center">
								<h4 class="dlab-title m-t0"><a href="#">Chennai</a></h4>
								<p>We invite you to experience here with your family, definitely you are filled with lasting memories and feel awesome.Make Yourself At home.</p>
								
								<div class="tr-btn-info">
									<a href="#" class="site-button radius-no"><i class="fa fa-location-arrow" aria-hidden="true"></i> Chennai</a> 
									<a href="#" class="site-button bg-primary-dark radius-no"><i class="fa fa-info-circle" aria-hidden="true"></i>  Relax </a> 
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 m-b30 card-container">
						<div class="dlab-box">
							<div class="dlab-media"> <a href="#">
								<img src="./R/kota.jpg" alt=""></a> 
								<div class="tr-price">
									<span>Rs 3500</span>
								</div>
							</div>
							<div class="dlab-info p-a20 border-1 text-center">
								<h4 class="dlab-title m-t0"><a href="#">Kota</a></h4>
								<p>We invite you to experience here with your family, definitely you are filled with lasting memories and feel awesome.Make Yourself At home.. </p>
								
								<div class="tr-btn-info">
									<a href="#" class="site-button radius-no"><i class="fa fa-location-arrow" aria-hidden="true"></i> Kota</a> 
									<a href="#" class="site-button bg-primary-dark radius-no"><i class="fa fa-info-circle" aria-hidden="true"></i>  Relax </a> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About Us END -->
		<!-- Stats -->

		<!-- Stats END -->	
		<!-- ******************************************************************************************** -->
		<div class="section-full bg-white content-inner-2 bgeffect overlay-black-middle" style="background-image:url(./R/bc5.jpg); background-size:cover" data-0="background-position:0px 0px;" data-end="background-position:0px -100px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="add-area">
							<h2>Discount <span class="text-primary">10-30%</span> Off</h2>
							<p>If you’re looking for paying guest house here you find the lowest price on the right PG for you. It's indescribable. Stay up to date and check out the deals for these trending locations.</p>
							<a href="#" class="site-button white">Download Our App</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6"></div>
				</div>
			</div>
		</div>

		<!-- Destinations -->
		<!-- <div class="section-full bg-white content-inner-1">
            <div class="container">
				<div class="section-head d-flex text-black">
					<div class="flex-grow-1">
						<h2 class="text-uppercase m-b0">Popular Destinations</h2>
						<p class="m-b0">CHOOSE YOUR NEXT DESTINATION</p>
					</div>
					<div class="align-self-center">
						<a href="packages.html" class="site-button button-md pull-right m-t5">View All</a>
					</div>
				</div>
			</div>
			<div class="section-content">
				<div class="destination owl-loaded owl-theme owl-none owl-carousel">
					<div class="item">
						<div class="dlab-box">
							<div class="dlab-media dlab-img-effect zoom-slow dlab-img-overlay2"> <img src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/gallery/destinations/pic1.jpg" alt="">
								<div class="dlab-info-has p-a20 no-hover ">
									<div class="dlab-info-has-text">
										<h3 class="text-white">Rajarhat <span class="text-primary pull-right">4 tours</span></h3>
										<a href="packages.html" class="site-button-link">View All Tours</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="dlab-box">
							<div class="dlab-media dlab-img-effect zoom-slow dlab-img-overlay2"> <img src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/gallery/destinations/pic2.jpg" alt="">
								<div class="dlab-info-has p-a20 no-hover ">
									<div class="dlab-info-has-text">
										<h3 class="text-white">Barabazar <span class="text-primary pull-right">4 tours</span></h3>
										<a href="packages.html" class="site-button-link">View All Tours</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="dlab-box">
							<div class="dlab-media dlab-img-effect zoom-slow dlab-img-overlay2"> <img src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/gallery/destinations/pic3.jpg" alt="">
								<div class="dlab-info-has p-a20 no-hover ">
									<div class="dlab-info-has-text">
										<h3 class="text-white">Dumdum <span class="text-primary pull-right">4 tours</span></h3>
										<a href="packages.html" class="site-button-link">View All Tours</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="dlab-box">
							<div class="dlab-media dlab-img-effect zoom-slow dlab-img-overlay2"> <img src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/gallery/destinations/pic4.jpg" alt="">
								<div class="dlab-info-has p-a20 no-hover ">
									<div class="dlab-info-has-text">
										<h3 class="text-white">Chennai<span class="text-primary pull-right">4 tours</span></h3>
										<a href="packages.html" class="site-button-link">View All Tours</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="dlab-box">
							<div class="dlab-media dlab-img-effect zoom-slow dlab-img-overlay2"> <img src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/gallery/destinations/pic5.jpg" alt="">
								<div class="dlab-info-has p-a20 no-hover ">
									<div class="dlab-info-has-text">
										<h3 class="text-white">Bangalore <span class="text-primary pull-right">4 tours</span></h3>
										<a href="packages.html" class="site-button-link">View All Tours</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- Destinations END -->
		<div class="section-full bg-white content-inner dlab-about-1 promotions">
			<div class="container">
				<div class="section-head text-black text-center">
					<h2 class="text-uppercase m-b0">PACKAGES</h2>
					<p class="font-18">BEST TRAVEL PACKAGES </p>
				</div>
				<div class="row packages">
					<div class="col-lg-6 col-xl-3 col-sm-6 col-md-6 m-b30">
						<div class="dlab-box">
							<div class="dlab-media"> 
								<a href="#"><img src="images/park.JPG" alt=""></a> 
							</div>
							<div class="dlab-info p-a15 border-1">
								<h4 class="dlab-title m-t0"><a href="#">At Howrah</a></h4>
								<span class="location">Park Street</span>
								<div class="package-content">
									<ul class="package-meta">
										<li><span class="fa fa-calendar"></span> No of Month: 2 </li>
										<li> <span class="fa fa-user"></span> People: 1 </li>
									</ul>
									<div class="clearfix">
										<span class="package-price pull-left text-primary">Rs 5000</span>
										<a href="#" class="site-button pull-right">View details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-3 col-sm-6 col-md-6 m-b30">
						<div class="dlab-box">
							<div class="dlab-media"> 
								<a href="#"><img src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/gallery/img3.jpg" alt=""></a> 
							</div>
							<div class="dlab-info p-a15 border-1">
								<h4 class="dlab-title m-t0"><a href="#">At Gujarat</a></h4>
								<span class="location">Gir,India</span>
								<div class="package-content">
									<ul class="package-meta">
										<li><span class="fa fa-calendar"></span> No of Months: 2 </li>
										<li> <span class="fa fa-user"></span> People: 1 </li>
									</ul>
									<div class="clearfix">
										<span class="package-price pull-left text-primary">Rs 8000 </span>
										<a href="#" class="site-button pull-right">View details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-3 col-sm-6 col-md-6 m-b30">
						<div class="dlab-box">
							<div class="dlab-media"> 
								<a href="#"><img src="images/bangalore.jpg" alt=""></a> 
							</div>
							<div class="dlab-info p-a15 border-1">
								<h4 class="dlab-title m-t0"><a href="#">At Bangalore</a></h4>
								<span class="location">Dawat Gali ,India</span>
								<div class="package-content">
									<ul class="package-meta">
										<li><span class="fa fa-calendar"></span> No of Months: 2 </li>
										<li> <span class="fa fa-user"></span> People: 1 </li>
									</ul>
									<div class="clearfix">
										<span class="package-price pull-left text-primary">Rs 6000</span>
										<a href="#" class="site-button pull-right">View details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-3 col-sm-6 col-md-6 m-b30">
						<div class="dlab-box">
							<div class="dlab-media"> 
								<a href="#"><img src="images/goa.jpg" alt=""></a> 
							</div>
							<div class="dlab-info p-a15 border-1">
								<h4 class="dlab-title m-t0"><a href="#">At Goa</a></h4>
								<span class="location">Goa,India</span>
								<div class="package-content">
									<ul class="package-meta">
										<li><span class="fa fa-calendar"></span> No of Months: 2 </li>
										<li> <span class="fa fa-user"></span> People: 1 </li>
									</ul>
									<div class="clearfix">
										<span class="package-price pull-left text-primary">Rs 7000</span>
										<a href="#" class="site-button pull-right">View details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
    <?php include 'includes/footer.php'; ?><!-- Footer END-->
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
<!-- <script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/magnific-popup/magnific-popup.js"></script>MAGNIFIC POPUP JS -->
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
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/paroller/skrollr.min.js"></script><!-- PAROLLER -->
<!-- REVOLUTION JS FILES -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/js/rev.slider.js"></script>
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_1();
	$('#datetimepicker4').datetimepicker();
});	/*ready*/
</script>
</body>


</html>