<?php include "header.php"; ?>
<br><br>
    <div class="container">
        <div class="row">
        <div class="col-md-2"></div>
      <form class="col-md-8"  method="POST" enctype="multipart/form-data">
	 <br><br> 
	  <label class="text text-light">Branch</label>
	   <select name="branch" class="form-control bg bg-dark text text-light">
	     <option>----Select a Branch</option>
         <option value="civil">Civil Engineering</option>
         <option value="cs">CS/IT Engineering</option>
         <option value="electrical">Electrical Engineering</option>
         <option value="electronics">Electronics Engineering</option>
         <option value="mechanical">Mechanical Engineering</option>
         <option value="others">Others</option>
</select>
<label class="text text-light">Technology Name</label>
<input type="text" name="technology" class="form-control bg bg-dark text text-light" required>
<label class="text text-light">Duration</label>
<select name="duration" class="form-control bg bg-dark text text-light">
	     <option>----Select the Duration</option>
         <option value="1d">One Day</option>
         <option value="3d">Three Days</option>
         <option value="4w">Four Weeks</option>
         <option value="6w">Six Weeks</option>
         <option value="3m">Three Months</option>
         <option value="6m">Six Months</option>
</select>
<label class="text text-light">Why from Us?</label>
<textarea type="text" name="wfu" rows="5" class="form-control bg bg-dark text text-light" required></textarea>
<label class="text text-light">About Technology</label>
<textarea type="text" name="about" rows="5" class="form-control bg bg-dark text text-light" required></textarea>
<label class="text text-light">Career and Scope</label>
<textarea name="career" rows="5" class="form-control bg bg-dark text text-light" required></textarea>
<label class="text text-light">Course Content</label>
<input type="file" name="content" class="form-control-file bg bg-dark text text-light" required>  
<br><br>
<button type="reset" name="reset" class="btn btn-primary">Reset</button>
<input type="submit" name="upload" class="btn btn-primary" value="Upload">
</form>
        <div class="col-md-2"></div>
</div>
</div>		
</body>
</html>
<?php
if (isset($_POST['upload'])) {
    $branch = $_POST['branch'];
    $technology = $_POST['technology'];
    $duration = $_POST['duration'];
    $wfu = $_POST['wfu'];
    $about = $_POST['about'];
    $career = $_POST['career'];
    $content = $_FILES['content']['name'];
    $tmp_content = $_FILES['content']['tmp_name'];
    $time = time();
    $folder = "content/$time.$content";
    move_uploaded_file($tmp_content, $folder);
    include "../connect.php";
    $query = "INSERT INTO training(branch,technology,duration,wfu,about,career,content) VALUES('$branch','$technology','$duration','$wfu','$about','$career','$folder')";
    $data = mysqli_query($connect, $query);
    
}
?>