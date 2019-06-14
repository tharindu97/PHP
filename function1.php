<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>
	<?php   
			$mynum = 10;
			function addFive($num){
					$num += 5; 
			}

			function addTen(&$num){
					$num += 10;
			}

			addFive($mynum);
			echo "Value: {$mynum}<br>";

			addTen($mynum);
			echo "Value: {$mynum}<br>";

	 ?>
</body>
</html>