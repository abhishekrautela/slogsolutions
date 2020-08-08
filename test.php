<!DOCTYPE html>
<html lang="en">

<head>
    <style>
   .navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Mega Menu header, if needed */
.dropdown-content .header {
  background: red;
  padding: 16px;
  color: white;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  background-color: #ccc;
  height: 250px;
}

/* Style links inside the columns */
.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a background color on hover */
.column a:hover {
  background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
    </style>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <title><?php echo "Slog Solutions"; ?></title>
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
    <link id="style-switch" href="css/presets/preset5.css" media="screen" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif] -->

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
                            <a href="index.php">
                                <img class="img-responsive" src="images/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <!--/ Logo end -->
                    <nav class="collapse navbar-collapse clearfix" role="navigation">
                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <i
                                        class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu">
                                    <div class="inner-mega-menu">
                                        <p>About Us</p>
                                        <p>Testimonial</p>

                                    </div>

                                </div>
                            </li>
                            <li>
                                <a href="speaker.php">Speaker<i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu">
                                    <div class="inner-mega-menu">
                                        <p>Be a speaker</p>
                                        <p>Hire a Speaker</p>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="navbar">
                                    <div class="dropdown">
                                        <button class="dropbtn">Dropdown
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                        <div class="dropdown-content">
                                            <div class="header">
                                                <h2>Mega Menu</h2>
                                            </div>
                                            <div class="row">
                                                <div class="column">
                                                    <h3>Category 1</h3>
                                                    <a href="#">Link 1</a>
                                                    <a href="#">Link 2</a>
                                                    <a href="#">Link 3</a>
                                                </div>
                                                <div class="column">
                                                    <h3>Category 2</h3>
                                                    <a href="#">Link 1</a>
                                                    <a href="#">Link 2</a>
                                                    <a href="#">Link 3</a>
                                                </div>
                                                <div class="column">
                                                    <h3>Category 3</h3>
                                                    <a href="#">Link 1</a>
                                                    <a href="#">Link 2</a>
                                                    <a href="#">Link 3</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li><a href="#">Contact</a></li>
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