<!DOCTYPE html>
<html>
<head>
	<title>Arrys</title>
</head>
<body>
	<?php 
			$arry = array("tharindu","vihanga","Damindu","Sajith");
			echo $arry[1];
	 ?>
	 <br>
	 <h1>Before</h1>
	 <pre>
	 	<?php print_r($arry) ?>
	 </pre>

	 <?php 
	 		$arry[0]="kavishna";
	 		$arry[4]="Sithum";
	  ?>

	 <h1>After</h1>
	 <pre>
	 	<?php print_r($arry) ?>
	 </pre>

</body>
</html>