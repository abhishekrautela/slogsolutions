<?php
	include "header.php";
?>
    <div id="banner-area">
			<img src="images/banner/banner2.jpg" alt="" />
			<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
				<div class="text-center">
					<h2>Training Programs</h2>
					
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->


    
<main>
    <br><br><br>
<div class="container">
    <div class="row">
    <form method="POST" action="check.php" class="col-md-8">
    <label>Branch</label>
	   <select name="branch" class="form-control">
	     <option>----Select a Branch</option>
         <option value="civil">Civil Engineering</option>
         <option value="cs">CS/IT Engineering</option>
         <option value="electrical">Electrical Engineering</option>
         <option value="electronics">Electronics Engineering</option>
         <option value="mechanical">Mechanical Engineering</option>
         <option value="others">Others</option>
</select>

<br><br>
<button type="submit" name="training" class="btn btn-primary">Search</button>
</form>
</div>
</div>
</main>
<br><br>



<?php
	include "footer.php";
?>
