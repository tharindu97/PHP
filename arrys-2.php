<!DOCTYPE html>
<html>
<head>
	<title>Arrys</title>
</head>
<body>
	<?php 
			$arry = array(10,20,30,"tharindu","vihanga",array(100,200,300),"Damindu","Sajith");
			echo $arry[1];
	 ?>
	 <br>
	 <h1>Before</h1>
	 <pre>
	 	<?php print_r($arry) ?>
	 </pre>
     
	 <?php 
	 		$arry[5][1]=500;
	 		
	  ?>

	 <h1>After</h1>
	 <pre>
	 	<?php print_r($arry) ?>
	 </pre>

</body>
</html>