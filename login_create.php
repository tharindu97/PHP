<?php 
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

		if($connection){
			echo "We are connect";
		}else{
			die("Not connect");
		}

		$query = "INSERT INTO users(username,password)";
		$query.="VALUES ('$username', '$password')";

		$result = mysqli_query($connection, $query);

		if(!$result){
			die('Query Failed' . mysqli_error());
		}


	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-xs-6">
			<form action="login.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" name="password" class="form-control">
				</div>

				<input type="submit" name="submit" value="submit" class="btn btn-primary">
			</form>
		</div>
	</div>
</body>
</html>