<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>Slog Solutions</title>
    <meta name="description" content="">	
	<meta name="author" content="">
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Template styles-->
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif] -->
</head>
<body>
<div style="position: absolute; top:30%; left:15%; height: 100%; width: 100%;" >	
    <div class="container">
        <div class="row">
            <form class="col-md-8" action="adminlogin.php" method="POST">
               <label>Username</label>
               <input type="text" name="username" class="form-control">
               <label>Password</label>
			   <input type="password" name="password" class="form-control">
               <br><br>
               <button type="submit" name="submit" class="btn btn-primary">Login</button> 
            </form>
        </div>
    </div>
</div>
	</body>
</html>
