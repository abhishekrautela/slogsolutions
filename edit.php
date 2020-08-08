<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <title>Cetpa Infotech</title>
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
    <link rel="stylesheet" href="css/animate.css">
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

    <!-- Style switcher start -->
    <div class="style-switch-wrapper">
        <div class="style-switch-button">
            <i class="fa fa-sliders"></i>
        </div>
        <h3>Style Options</h3>
        <button id="preset1" class="btn btn-sm btn-primary"></button>
        <button id="preset2" class="btn btn-sm btn-primary"></button>
        <button id="preset3" class="btn btn-sm btn-primary"></button>
        <button id="preset4" class="btn btn-sm btn-primary"></button>
        <button id="preset5" class="btn btn-sm btn-primary"></button>
        <button id="preset6" class="btn btn-sm btn-primary"></button>
        <br /><br />
        <a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
    </div>
    <!-- Style switcher end -->

    <div class="body-inner">

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
                            <li><a href="contact.html">Logout</a></li>
                        </ul>
                    </nav>
                    <!--/ Navigation end -->
                </div>
                <!--/ Row end -->
            </div>
            <!--/ Container end -->
        </header>
        <!--/ Header end -->

        <!-- Slider start -->
        <section id="home" class="no-padding">
            <div id="main-slide" class="cd-hero">
                <ul class="cd-hero-slider">
                    <li class="selected">
                        <div class="overlay2">
                            <img class="" src="images/slider/bg1.jpg" alt="slider">
                        </div>
                        <div class="cd-full-width">
                            <h2>Edit Your Profile</h2>
                        </div> <!-- .cd-full-width -->
                    </li>
                    <li>

            </div>
            <!--/ Main slider end -->
        </section>
        <!--/ Slider end -->
        <div class="container">
            <div class="row">
                <form class="col-md-8" action="check.php" method="POST" enctype="multipart/form-data">
                    <br>
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control">
                    <label>Profile Picture</label>
                    <input type="file" name="image" class="form-control-file">
                    <label>Gender</label>
                    <br>
                    <label>Male:</label><input type="radio" name="gender">
                    <label>Female:</label><input type="radio" name="gender">
                    <br>

                    <label>State</label>
                    <select name="state">
<option value="">------------Select State------------</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select>
			<br>
                    <label>City</label>
                    <input type="text" name="city" class="form-control">
                    <label>Why choose Me</label>
                    <br>
                    <textarea name="cm" class="form-control-file col-md-12" rows="5"></textarea>
                    <label>Bio</label>
                    <textarea name="bio" class="form-control-file col-md-12" rows="5"></textarea>
                    <label>EXPERTISE</label>
                    <select class="form-control">
                        <option></option>
                    </select>
                    <label>Graduation</label>
                    <input type="text" name="college" class="form-control">
                    <label>Current Company</label>
                    <input type="text" name="company" class="form-control">
                    <label>Position</label>
                    <input type="text" name="position" class="form-control">
                    <label>Primary Language</label>
                    <input type="text" name="language1" class="form-control">
                    <label>Secondary Language</label>
                    <input type="text" name="language2" class="form-control">
                    <br>
                    <label>Availability</label>
                    <br>
                    <label>Uttarakhand&nbsp;</label><input type="checkbox" name="availability[]">
                    <label>Uttarakhand&nbsp;</label><input type="checkbox" name="availability[]">
                    <label>Uttarakhand&nbsp;</label><input type="checkbox" name="availability[]">
                    <br>
                    <label>Fees</label>
                    <br>
                    <label>Free</label><input type="radio" name="fees" value="free"><br>
                    <label>Upto 1000</label><input type="radio" name="fees" value="upto 1000"><br>
                    <label>Upto 2000</label><input type="radio" name="fees" value="upto 2000"><br>
                    <label>Upto 3000</label><input type="radio" name="fees" value="upto 3000"><br>
                    <label>Articles Published:</label>
                    <br>
                    <label>Title</label>
                    <input type="text" class="form-control" name="tilte">
                    <label>Description</label>
                    <input type="text" class="form-control" name="link">
                    <label>Social Media:</label>
                    <br><br>
                    <label>Facebook</label>
                    <input type="url" name="facebook" class="form-control">

                    <label>Twitter</label>
                    <input type="url" name="twitter" class="form-control">

                    <label>LinkedIn</label>
                    <input type="url" name="linkedin" class="form-control">

                    <label>Instagram</label>
                    <input type="url" name="instagram" class="form-control">

                    <label>Youtube Channel</label>
                    <input type="url" name="youtube" class="form-control">
                    <br>
                    <button type="submit" name="update" class="btn btn-primary">Submit</button>

                    <br><br>
                </form>
            </div>
        </div>

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
        <!-- CD Hero slider -->
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
</body>

</html>