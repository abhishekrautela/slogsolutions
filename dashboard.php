<?php 
session_start();
$email = $_SESSION['email'];
$connect = mysqli_connect("localhost","root","","cetpa");
$query = "SELECT * FROM speaker WHERE email='$email'";
$data = mysqli_query($connect,$query);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>BizCraft - Responsive Html5 Template</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

	<!-- CSS
	================================================== -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" hrCreate Your Profileef="css/animate.css">Create Your Profile
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="body-inner">
		<!-- Header start -->
		<!-- Header start -->
		<header id="header" class="navbar-fixed-top header" role="banner">
			<div class="container">
				<div class="row">
					<!-- Logo start -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand navbar-bg">
							<a href="index.html">
								<img class="img-responsive" src="images/logo.png" alt="logo">
							</a>
						</div>
					</div>
					<!--/ Logo end -->
					<nav class="collapse navbar-collapse clearfix" role="navigation">
						<ul class="nav navbar-nav navbar-right">

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <i
										class="fa fa-angle-down"></i></a>
								<div class="dropdown-menu">
									<ul>
										<li><a href="about.html">About Us</a></li>
										<li><a href="service.html">Services</a></li>
										<li><a href="career.html">Career</a></li>
										<li><a href="testimonial.html">Testimonials</a></li>
										<li><a href="faq.html">Faq</a></li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">FDP <i
										class="fa fa-angle-down"></i></a>
								<div class="dropdown-menu">
									<ul>
										<li><a href="portfolio-classic.html">FDP1</a></li>
										<li><a href="portfolio-static.html">FDP2</a></li>
										<li><a href="portfolio-item.html">FDP3</a></li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="portfolio-item.html">Speaker<i class="fa fa-angle-down"></i></a>
								<div class="dropdown-menu">
									<ul>
										<li><a href="portfolio-static.html">Be a Speaker</a></li>
										<li><a href="elements.html">Hire a Speaker</a></li>

									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Training <i
										class="fa fa-angle-down"></i></a>
								<div class="dropdown-menu">
									<ul>
										<li><a href="typography.html">PHP</a></li>
										<li><a href="elements.html">Python</a></li>
										<li><a href="elements.html">Javascript</a></li>
									</ul>
								</div>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
					<!--/ Navigation end -->
				</div>
				<!--/ Row end -->
			</div>
			<!--/ Container end -->
		</header>
		<!--/ Header end -->


		<div id="banner-area">
			<img src="images/banner/banner2.jpg" alt="" />
			<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
				<div class="text-center">
  					<h2>Welcome <?php echo $result['fname']." ".$result['lname']; ?></h2>
					
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->

		<!-- Main container start -->
		<section id="team" class="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fas fa-user"></i></span>
					<h2 class="title">Profile</h2>
				</div>
			</div><!-- Title row end -->

			<div class="row text-center">
				<div class="col-md-12 col-sm-6">
					<div class="team wow slideInLeft">
						<div class="img-hexagon">
							<img src="uploads/bg.jpg" alt="Image Not found">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3><?php echo $result['fname'] . " " . $result['lname'] ; ?></h3>
							<p><?php echo $result['expertise']; ?></p>
							<div class="team-social">
								<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
								<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                <p>State : <?php echo $result['state']; ?></p>
                                <p>City : <?php echo $result['city']; ?></p>
                                <p>Bio : <?php echo $result['bio']; ?></p>
                                <p>Graduation : <?php echo $result['graduation']; ?></p>
                                <p>Company : <?php echo $result['company']; ?></p>
								<p>Position : <?php echo $result['position']; ?></p>
								<p>Primary Language : <?php echo $result['primaryl']; ?></p>
								<p>Secondary Language : <?php echo $result['secondaryl']; ?></p>
								<p>Availability : <?php echo $result['availability']; ?></p>
								<p>Fees : <?php echo $result['fees']; ?></p>
                                <button type="submit" class="btn btn-primary" name="edit" onclick="return edit()">Edit Your profile</button>
							</div>
						</div>
					</div>	
				</div><!--/ Team 1 end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
    </section><!--/ Team end -->

	<br>
	<!-- Footer start -->
	<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
						<div class="col-md-8 col-sm-12 footer-widget footer-about-us">
						<h3 class="widget-title">About Cetpa</h3>
						<p>Training and placement assistance</p>
						<h4>Address</h4>
						<p>105 Mohit Vihar , GMS Road, Dehradun</p>
						<div class="row">
							<div class="col-md-6">
								<h4>Email:</h4>
								<p>abhishekrautela007@gmail.com</p>
							</div>
							<p>+(91)9634399779</p>
							</div>
						</div>
						
					</div><!--/ end about us -->
	
				</div><!-- Row end -->
			</div><!-- Container end -->
		</footer><!-- Footer end -->
		
	
		<!-- Copyright start -->
		<section id="copyright" class="copyright angle">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="footer-social unstyled">
							<li>
								<a title="Twitter" href="#">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
								</a>
								<a title="Facebook" href="#">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
								</a>
								<a title="Google+" href="#">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
								</a>
								<a title="linkedin" href="#">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
								</a>
								<a title="Pinterest" href="#">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
								</a>
								<a title="Skype" href="#">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
								</a>
								<a title="Dribble" href="#">
									<span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
								</a>
							</li>
						</ul>
					</div>
				</div><!--/ Row end -->
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="copyright-info">
						  &copy; Copyright 2019 
						</div>
					</div>
				</div><!--/ Row end -->
			   <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
					<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
				</div>
			</div><!--/ Container end -->
		
		
		
		<!-- Javascript Files
	================================================== -->

		<!-- initialize jQuery Library -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<!-- Bootstrap jQuery -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- Style Switcher -->
		<script type="text/javascript" src="js/style-switcher.js"></script>
		<!-- Owl Carousel -->
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<!-- PrettyPhoto -->
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<!-- Bxslider -->
		<script type="text/javascript" src="js/jquery.flexslider.js"></script>
		<!-- Owl Carousel -->
		<script type="text/javascript" src="js/cd-hero.js"></script>
		<!-- Isotope -->
		<script type="text/javascript" src="js/isotope.js"></script>
		<script type="text/javascript" src="js/ini.isotope.js"></script>
		<!-- Wow Animation -->
		<script type="text/javascript" src="js/wow.min.js"></script>
		<!-- SmoothScroll -->
		<script type="text/javascript" src="js/smoothscroll.js"></script>
		<!-- Eeasing -->
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<!-- Counter -->
		<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
		<!-- Waypoints -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		<!-- Template custom -->
		<script type="text/javascript" src="js/custom.js"></script>
	</div><!-- Body inner end -->
	<script>
function edit()
{
	window.location = "edit.php";
}

	</script>
</body>

</html>
