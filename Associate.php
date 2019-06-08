<!DOCTYPE html>
<html>
<head>
	<title>Associate</title>
</head>
<body>
	<?php 
			$arry = array("fist_name"=>"Tharindu", "last_name"=>"kavishna","age"=>20);
	 ?>
	 <?php print_r($arry) ?><br>
	 <?php echo $arry["fist_name"]; ?><br>

	 <?php echo $arry["fist_name"] . " " . $arry["last_name"]; ?><br>
	 <?php $arry["age"] = 24; ?><br>

	 <?php echo $arry["age"]; ?><br>
</body>
</html>