<?php 
		$con = mysqli_connect("localhost", "root", "", "se");

		if(isset($_POST["submit"])){

		$email = $_POST["email"];
		$password = $_POST["password"];
		$query = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";

		$results = mysqli_query($con, $query);

		if($results){
			header("Location:index.html");
		}
	}
		

 ?>