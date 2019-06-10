<!DOCTYPE html>
<html>
<head>
	<title>If-Statement</title>
</head>
<body>
	<?php 

			$avg_score = 74;
			echo "Score: " . $avg_score;
			echo "<br>";

			if($avg_score >= 75 && $avg_score<= 100){
				echo "Your mark A";
			}
			else if($avg_score >= 65 && $avg_score<75){
				echo "Your mark B";
			}
			else if($avg_score >= 55 && $avg_score<65){
				echo "Your mark C";
			}
			else{
				echo "Your mark F";
			}



	 ?>
</body>
</html>