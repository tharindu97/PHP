<?php include "db.php";?>
<?php include "functions.php";?>
<?php deleteRows(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-xs-6">
			<h1 class="text-center">Delete</h1>
			<form action="login_delet.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" name="password" class="form-control">
				</div>

				<div class="form-group">
					<select name="id" id="">
						<?php 
							showAllData();		
						 ?>
					</select>
				</div>

				<input type="submit" name="submit" value="DELETE" class="btn btn-primary">
			</form>
		</div> 
	</div>
</body>
</html>