<?php 
	if(isset($_REQUEST['submit'])){
		$title = $_REQUEST['title'];
		$colomu = $_REQUEST['colomu'];
		$row = $_REQUEST['row'];

		echo "<h1>$title</h1>";
		echo '<table border="1">';
		for($i=1; $i<=$row;$i++){
			echo "<tr>";
			for($j=1; $j<=$colomu;$j++){
				echo '<td style="padding: 30px">'." "."</td>" ;
			}
			echo "</tr>";
		}
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 </head>
 <body>
 	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 		<?php for($i=1; $i<=$row;$i++){ ?>
 		<div>
 			<label>Enter the Heading <?php echo $i; ?>:</label>
			<input type="text" name="col">
 		</div>
 	<?php }; ?>
 		<div>
			<input type="submit" name="add" value="SUBMIT">
		</div>
 	</form>
 </body>
 </html>
