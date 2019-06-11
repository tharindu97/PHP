<!DOCTYPE html>
<html>
<head>
	<title>Switch Statement</title>
</head>
<body>

	<?php 
			$user_code = 'A';
			switch ($user_code) {
				case 'A':
					echo "User Group: Administrator <br>";
					break;
				case 'P':
					echo "User Group: Power User <br>";
					break;
				case 'U':
					echo "User Group: User <br>";
					break;
				case 'G':
					echo "User Group: Guest <br>";
					break;	
				
				default:
					echo "Invalid User Group";
					break;
			}
	 ?>
	

</body>
</html>