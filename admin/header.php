<?php
session_start();
include "../connect.php";
$query = "SELECT * FROM adminlogin";
$data = mysqli_query($connect,$query);
$result = mysqli_fetch_assoc($data);
if($_SESSION['sid'] == $_SESSION['uid'].$result['username'])
{ ?>
	<!DOCTYPE html>
	<html lang="en" class="no-js">
		<head>
        <link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body class="bg bg-secondary">
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main" style="z-index:1000;">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
                                <li><a class="gn-icon gn-icon-illustrator" href="training.php">Add Training Data</a></li>
                                <li><a class="gn-icon gn-icon-photoshop" href="edittraining.php">Edit Training Data</a></li>
                                <li><a class="gn-icon gn-icon-photoshop" href="edit.php">Edit Course Content</a></li>
								</li>
								<li><a class="gn-icon gn-icon-cog">Settings</a></li>
								<li><a class="gn-icon gn-icon-help">Help</a></li>
								<li>
									<a class="gn-icon gn-icon-archive">Archives</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">Articles</a></li>
										<li><a class="gn-icon gn-icon-pictures">Images</a></li>
										<li><a class="gn-icon gn-icon-videos">Videos</a></li>
                                    </ul>
                                    </li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="adminpanel.php">SLOG SOLUTIONS</a></li>
				<li><a class="codrops-icon codrops-icon-prev" href="adminpanel.php"><span>Home</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="logout.php"><span>Logout</span></a></li>
			</ul>
			
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
		
	<?php
}
else{
	header("location:index.php");
}

?>
