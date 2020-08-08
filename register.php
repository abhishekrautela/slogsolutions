<?php
include "header.php";
?>
	<div id="banner-area">
		<img src="images/banner/banner2.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Become a Speaker</h2>
		        	
	          	</div>
          	</div><!-- Subpage title end -->
	</div>
	</div>
	
	<!-- Banner area end -->
	<div class="container">
	<form class="col-md -6" method="POST" action="check.php">
		<br>
		<input type="hidden" name="id">
		<label>Email</label>
		<input type="email" name="email" class="form-control" required>
		<label>Password</label>
		<input type="password" name="password" class="form-control" required>
		<label>Confirm Password</label>
		<input type="password" name="cpassword" class="form-control" required>
		<br><br>
		<button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
		<br><br>
		<button class="btn btn-primary" name="Login" onclick="return login()">Already a Member? Click Here to Login</button>
		
	</form>
</div>
	
	<div class="gap-40"></div>
<script>
    var login = ()=>{
        window.location = "login.php";
    }
</script>
	
<?php
include "footer.php";
?>