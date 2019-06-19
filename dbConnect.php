<?php 

	$con = mysqli_connect("localhost", "root", "", "se");


	if(isset($_POST["submit"])){

		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$query = "INSERT INTO user(name, email, password) VALUES('$name', '$email', '$password')";

		$results = mysqli_query($con, $query);

		if($results){
			header("Location:user.html");
		}
	}

 ?>