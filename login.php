<?php include "header.php";?>
	<div id="banner-area">
	    <img src="images/banner/banner2.jpg" alt="" />
	    <div class="parallax-overlay"></div>
	    <!-- Subpage title start -->
	    <div class="banner-title-content">
	        <div class="text-center">
	            <h2>Login</h2>
	        </div>
	    </div><!-- Subpage title end -->
	</div>
	</div>
	<!-- Banner area end -->
	<div class="container">
	    <form class="col-md -6" method="POST" action="check.php">
	        <br>
	        <label>Email</label>
	        <input type="email" name="email" class="form-control" required>
	        <label>Password</label>
	        <input type="password" name="password" class="form-control" required>
	        <br><br>
	        <button type="submit" class="btn btn-primary" name="login">Log In</button>
	        <br><br>
	    </form>
	</div>
	<div class="gap-40"></div>
	<?php include "footer.php";?>