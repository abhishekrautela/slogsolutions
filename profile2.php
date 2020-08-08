<?php
include "header.php";
?>

		<div id="banner-area">
			<img src="images/banner/banner2.jpg" alt="" />
			<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
				<div class="text-center">
					<h2>Create Your Profile</h2>
					
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->

		<!-- Main container start -->

		<div class="container">
			<div class="row">
			<form class="col-md-8" method="POST" action="check.php">
				<br>
				
				<label>EXPERTISE</label>
				<select class="form-control" name="expertise">
						<option>Select your Expertise</option>
						<option>Time Management</option>
						<option>Technology</option>
						<option>Cyber Security</option>
						<option>Machine Learning</option>
						<option>Programming</option>
						<option>Technology</option>
						<option>Sports</option>
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
				<button type="submit" name="next2" class="btn btn-primary">Next</button>
			</form>
		</div>
	</div>
	<br>
	<?php
include "footer.php";
?>