<?php include "header.php"; ?>
<br><br>
    <div class="container">
        <div class="row">
                    <div class="col-md-2"></div>
      <form class="col-md-8"  method="POST" enctype="multipart/form-data">
	 <br><br> 
	  <label class="text text-light">Branch</label>
	   <select name="branch" class="form-control bg bg-dark text text-light" onchange="myfun(this.value)">
	     <option>----Select a Branch</option>
         <option value="civil">Civil Engineering</option>
         <option value="cs">CS/IT Engineering</option>
         <option value="electrical">Electrical Engineering</option>
         <option value="electronics">Electronics Engineering</option>
         <option value="mechanical">Mechanical Engineering</option>
         <option value="others">Others</option>
</select>
<label class="text text-light">Technology Name</label>
<select id="tech" name="technology" class="form-control bg bg-dark text text-light" onmouseup="newfun(this.value)">
</select>
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
<textarea type="text" id="why" name="wfu" rows="5" class="form-control bg bg-dark text text-light" required></textarea>
<label class="text text-light">About Technology</label>
<textarea type="text" id="abouttech" name="about" rows="5" class="form-control bg bg-dark text text-light" required></textarea>
<label class="text text-light">Career and Scope</label>
<textarea name="career" id="scope" rows="5" class="form-control bg bg-dark text text-light" required></textarea>
<br><br>
<button type="reset" name="reset" class="btn btn-primary">Reset</button>
<button type="submit" name="upload" class="btn btn-primary">Update</button>
</form>
        <div class="col-md-2"></div>
</div>
</div>
<script>
var myfun =(data)=>{
	var req = new XMLHttpRequest();
	req.open('GET',"response.php?datavalue="+data,true);
	req.send();
	req.onreadystatechange=()=>{
		if(req.readyState == 4 && req.status == 200)
		{
			document.getElementById('tech').innerHTML = req.responseText;

		}
	}
}
var newfun =(data)=>{
	var req = new XMLHttpRequest();
	req.open('GET',"fetch.php?datavalue="+data,true);
	req.send();
	req.onreadystatechange=()=>{
		if(req.readyState == 4 && req.status == 200)
		{
			var arr = req.responseText.split('=');
			var everything = {
				wfu:arr[4],
				about:arr[5],
				career:arr[6]
			} 
			document.getElementById('why').innerHTML = everything.wfu;
			document.getElementById('abouttech').innerHTML = everything.about;
			document.getElementById('scope').innerHTML = everything.career;
		}
	}
}

</script>	
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
    include "../connect.php";
    $query="UPDATE training SET branch='$branch',technology='$technology',duration='$duration',wfu=' $wfu',about='$about',career='$career' WHERE technology='$technology' AND duration='$duration'";
    $data = mysqli_query($connect, $query);
    }
?>