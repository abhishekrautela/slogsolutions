<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Best Institute For Computer Trainings In Dehradun India" />
    <meta name="keywords" content="Best Institute For Summer & Winter Training In Dehradun India" />
    <meta name="keywords" content="Live Project Training in Dehradun" />
    <meta name="keywords" content="Live Project Training in PYTHON, MACHINE LEARNING, DATA SCIENCE, ARTIFICIAL INTILLEGENCE" />
    <meta name="keywords" content="6 months Industrial Training in JAVA, PHP, Ethical Hacking, Cyber Security, ANDROID" />
    <meta name="keywords" content="Live Project Training in Web  Development" />
    <meta name="keywords" content="Industrial Training on Live Projects" />
    <meta name="keywords" content="Summer Training in Python, Machine Learning, Data Science, AutoCAD, 3d Max, Revit, Solidworks" />
    <meta name="keywords" content="Summer Training in Web Site Development" />
    <meta name="keywords" content="Training in Plc Scada, Industrial Automation, Embedded System, Core Java, Adv Java, J2ee, Java Expert" />
    <meta name="keywords" content="Project Training with Java Expert Curriculum" />
    <meta name="keywords" content="Project Training with Matlab Expert Curriculum" />
    <meta name="keywords" content="Training in Embedded System in Dehradun" />
    <meta name="keywords" content="Training in Ethical Hacking cyber security in dehradun" />
    <meta name="keywords" content="Training in Web Development in dehradun" />
    <meta name="keywords" content="Training in C- Programming and Data Structure  " />
    <meta name="keywords" content="Best Python Machine Learning Training Institute in Dehradun and Uttarakhand" />
    <meta name="keywords" content="Best Java Training Institute in Dehradun and Uttarakhand" />
    <meta name="keywords" content="Best PHP web designing Training Institute in Dehradun and Uttarakhand" />
    <meta name="keywords" content="100% Practical Project Based Training" />
    <meta name="keywords" content="Best Training Institute for Vocational Training in Dehradun" />
    <meta name="keywords" content="Provide Live Project Training to Final Year B.Tech and MCA Students" />
    <meta name="keywords" content="Best FDP Training Institute in Dehradun  and Uttarakhand" />
    <meta name="keywords" content="Corporate and government Trainings in Dehradun">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title><?php echo "Slog Solutions Private Limited Dehradun"; ?></title>
    <link rel="icon" href="images/title.png" type="image/x-icon">

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
    <link id="style-switch" href="css/presets/preset2.css" media="screen" rel="stylesheet" type="text/css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <?php include "connect.php"; ?>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="palatinNav">
                        <!-- Nav brand -->
                        <a href="http://www.slogsolutions.com" class="nav-brand"><img src="images/logo.png" alt=""></a>
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="about.php">About Us</a>
                                    </li>
                                    <li><a href="speaker.php">Speaker</a>
                                        <ul class="dropdown">
                                            <li><a href="register.php">Be a Speaker</a></li>
                                            <li><a href="hire.php">Hire a Speaker</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">FDP | Training | Workshop</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <?php
                                                $query = "SELECT DISTINCT technology FROM training WHERE branch='civil'";
                                                $data = mysqli_query($connect, $query);
                                                while ($result = mysqli_fetch_assoc($data)) {
                                                    ?>
                                                    <li><a href="coursedata.php?technology=<?php echo $result['technology']; ?>"><?php echo $result['technology']; ?></a>
                                                    </li>
                                                <?php
                                                } ?>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <?php
                                                $query = "SELECT DISTINCT technology FROM training WHERE branch='electronics' OR branch='electrical'";
                                                $data = mysqli_query($connect, $query);
                                                while ($result = mysqli_fetch_assoc($data)) {
                                                    ?>
                                                    <li><a href="coursedata.php?technology=<?php echo $result['technology']; ?>"><?php echo $result['technology']; ?></a>
                                                    </li>
                                                <?php }
                                                ?>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <?php
                                                $query = "SELECT DISTINCT technology FROM training WHERE branch='cs'";
                                                $data = mysqli_query($connect, $query);
                                                while ($result = mysqli_fetch_assoc($data)) {
                                                    ?>
                                                    <li><a href="coursedata.php?technology=<?php echo $result['technology']; ?>"><?php echo $result['technology']; ?></a>
                                                    </li>
                                                <?php }
                                                ?>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <?php
                                                $query = "SELECT DISTINCT technology FROM training WHERE branch='others' OR branch='mechanical'";
                                                $data = mysqli_query($connect, $query);
                                                while ($result = mysqli_fetch_assoc($data)) {
                                                    ?>
                                                    <li><a href="coursedata.php?technology=<?php echo $result['technology']; ?>"><?php echo $result['technology']; ?></a>
                                                    </li>
                                                <?php }
                                                ?>
                                            </ul>

                                        </div>
                                    </li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ##### Header Area End ##### -->