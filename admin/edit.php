<?php include "header.php";?>
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
<select id="tech" name="technology" class="form-control bg bg-dark text text-light" >
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
<label class="text text-light">Content</label>
<input type="file" name="content" class="form-control-file bg bg-dark text text-light">
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
</script>	
		</body>
	</html>
	

<?php
if (isset($_POST['upload'])) {
    $branch = $_POST['branch'];
    $technology = $_POST['technology'];
	$duration = $_POST['duration'];
	$time = time();
	$content = $_FILES['content']['name'];
	$tmpcontent = $_FILES['content']['tmp_name'];
	$filepath = "content/$time$content";
	move_uploaded_file($tmpcontent,$filepath);
    include "../connect.php";
    $query="UPDATE training SET branch='$branch',content='$filepath' WHERE technology='$technology' AND duration='$duration'";
    $data = mysqli_query($connect, $query);
    }
?>