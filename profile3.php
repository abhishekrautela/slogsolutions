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
				<label>Availability</label>
				<br>
				<label>Uttarakhand&nbsp;</label><input type="checkbox" name="availability[]" value="uttarakhand1">
				<label>Uttarakhand&nbsp;</label><input type="checkbox" name="availability[]" value="uttarakhand2">
				<label>Uttarakhand&nbsp;</label><input type="checkbox" name="availability[]" value="uttarakhand3">
				<br>
				<label>Fees</label>
				<br>
				<label>Upto 1000</label><input type="radio" name="fees" value="upto 1000"><br>
				<label>Upto 2000</label><input type="radio" name="fees" value="upto 2000"><br>
				<label>Upto 3000</label><input type="radio" name="fees" value="upto 3000"><br>
				<br>
				<button type="submit" name="finalsubmit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	<br>
	<?php
include "footer.php";
?>