


<?php
ob_start();
session_start();

if (isset($_SESSION['user']) != "") {
    header("Location: index-2.php");
}
include_once 'dbconnect.php';

if (isset($_POST['create_user'])) {

    $uname = trim($_POST['dzName_user_name']); // get posted data and remove whitespace
    $email = trim($_POST['dzName_email']);
    $upass = trim($_POST['dzName_password']);

    // hash password with SHA256;
    $password = hash('sha256', $upass);

    // check email exist or not
    $stmt = $conn->prepare("SELECT email FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
	$stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $count = $result->num_rows;

	echo "haha: ",$count;


    if ($count == 0) { // if email is not found add user

        $stmts = $conn->prepare("INSERT INTO users(username,email,password) VALUES(?, ?, ?)");
        $stmts->bind_param("sss", $uname, $email, $password);
        $res = $stmts->execute();//get result
        $stmts->close();


        $user_id = mysqli_insert_id($conn);
        if ($user_id > 0) {
			$_SESSION['user'] = $user_id; // set session and redirect to index page
            if (isset($_SESSION['user'])) {
                // print_r($_SESSION);
                header("Location: index-2.php");
                exit;
            }

        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again";
        }

    } else {
        $errTyp = "warning";
        $errMSG = "Email is already used";
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from triper.dexignlab.com/xhtml/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 05:58:46 GMT -->
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
	<title>Accom Now:Register</title>
	
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
    <header class="site-header mo-left header">
        <!-- top bar -->
        <div class="top-bar bg-dark">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="dlab-topbar-left">
						<ul>
							<!-- <li><a class="site-button-link" href="hotel.php">Hotels</a></li>
							<li><a class="site-button-link" href="place.php">Places</a></li>
							<li><a class="site-button-link" href="packages.php">Packages</a></li> -->
						</ul>
					</div>
					<div class="dlab-topbar-right top-login">
						<ul>
							<li><a href="login.php" class="site-button-link">Login</a></li>
							<li><a href="register.php" class="site-button-link">Register</a></li>
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
						<a href="index-2.php"><img src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/logo.png" alt=""></a>
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
							</li>
							<li><a href="#">Hotels <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="hotel.php" class="dez-page">Hotel</a></li>
									<li><a href="hotel-booking.php" class="dez-page">Hotel Booking</a></li>
								</ul>
							</li> -->
							<li><a href="about-us.php">About us <i class="fa fa-chevron"></i></a>
								
							</li>
							<!-- <li><a href="#">Our Portfolio <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="portfolio-grid-2.php" class="dez-page">Portfolio Grid 2 </a></li>
									<li><a href="portfolio-grid-3.php" class="dez-page">Portfolio Grid 3 </a></li>
									<li><a href="portfolio-grid-4.php" class="dez-page">Portfolio Grid 4 </a></li>
								</ul>
							</li> -->
							<li><a href="contact.php" class="dez-page">Contact Us</a></li>
						</ul>	
					</div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/images/banner/bnr2.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Register</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Register</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center">
						<h3 class="font-weight-700 m-t0 m-b20">Create An Account</h3>
					</div>
				</div>
                <div class="row">
					<div class="col-md-12 m-b30">
						<div class="p-a30 border-1  max-w500 m-auto">
							<div class="tab-content">
								<form id="login" class="tab-pane active" method="POST">
								<!--  -->
									<h4 class="font-weight-700">PERSONAL INFORMATION</h4>
									<?php
										if (isset($errMSG)) {
											?>
											<div class="form-group">
												<div class="alert alert-<?php echo ($errTyp == "success") ? "success" : $errTyp; ?>">
													<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
												</div>
											</div>
											<?php
										}
										?>
									<!-- <p class="font-weight-600" ></p> -->
									<div class="form-group">
										<label class="font-weight-700">User Name *</label>
										<input name="dzName_user_name" required="" class="form-control" placeholder="User Name" type="text" >
									</div>
									<div class="form-group">
										<label class="font-weight-700">E-MAIL *</label>
										<input name="dzName_email" required="" class="form-control" placeholder="Your Email Id" type="email" >
									</div>
									<div class="form-group">
										<label class="font-weight-700">PASSWORD *</label>
										<input name="dzName_password" required="" class="form-control " placeholder="Type Password" type="password" >
									</div>
									<div class="text-left">
										<button class="site-button button-lg radius-no outline outline-2" name="create_user" >CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>
		<!-- contact area  END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?><!-- Footer END-->
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
<script src="../../s3.ap-south-1.amazonaws.com/dlab-html/triper/xhtml/js/dz.ajax.js"></script><!-- CONTACT JS  -->
 

</body>

<!-- Mirrored from triper.dexignlab.com/xhtml/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Oct 2018 05:58:46 GMT -->
</html>
