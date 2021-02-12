<!DOCTYPE html>
<html>
<head>
	<title>User login registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	   <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
	<div align="right">
<a href="signup.php">	<button type="submit" class="btn btn-primary">Signup</button></a>
</div>
<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left">
			<h2>Login</h2>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="Register" class="btn btn-primary">Login</button>
				
			
				
			</form>
			
		</div>

	</div>	
	</div>
</div>
</body>
</html>