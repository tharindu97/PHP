<?php 
	if(isset($_GET['name'])){
		//print_r($_GET);
		$name = htmlentities($_GET['name']);
		echo $name;
	}/*

	if(isset($_POST['name'])){
		print_r($_POST);
		$name = htmlentities($_POST['name']);
		echo $name;
	}

	if(isset($_REQUEST['name'])){
		print_r($_REQUEST);
		$name = htmlentities($_REQUEST['name']);
		echo $name;
	} */

	//echo $_SERVER['QUERY_STRING'];
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<form method="GET" action="get-post.php">
		<div>
			<label>Name:</label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email:</label>
			<input type="text" name="email">
		</div>
		<input type="submit" value="submit">
	</form>
	<ul>
		<li>
			<a href="get-post.php?name=tharindu">Tharindu</a>
		</li>
		<li>
			<a href="get-post.php?name=rangika">Rangika</a>
		</li>
	</ul>
	<h1>
		<?php echo "{$name}'s Profile" ?>
	</h1>
	
</body>
</html>