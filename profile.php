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
			<form class="col-md-8" method="POST" enctype="multipart/form-data" action="check.php">
				<br>
				<label>First Name</label>
				<input type="text" name="fname" class="form-control">
				<label>Last Name</label>
				<input type="text" name="lname" class="form-control">
				<label>Gender</label>
				<br>
				<label>Male:</label><input type="radio" name="gender" value="male" >
				<label>Female:</label><input type="radio" name="gender" vallue="female">
				<br>
				<label>Profile Picture</label>
				<input type="file" name="image" class="form-control-file">
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
			<br><label>City</label>
				<input type="text" name="city" class="form-control">
				<label>Why choose Me</label>
				<br>
				<textarea name="cm" class="form-control-file col-md-12" rows="5" ></textarea>
				<label>Bio</label>
				<textarea name="bio" class="form-control-file col-md-12" rows="5" ></textarea>
				<br><br>
				<button type="submit" name="next1" class="btn btn-primary">Next</button>
			</form>
		</div>
	</div>
	<br>
	<?php
include "footer.php";
?>