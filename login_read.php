<?php include "db.php";?>
<?php include "functions.php";?>
<?php Read(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-xs-6">
			<?php 
					while($row = mysqli_fetch_row($result)){ 
			?>
			<pre>
				
				<?php 	print_r($row);
					 ?>
			</pre>

		<?php } ?>
					
			 
		</div>
	</div>
</body>
</html>