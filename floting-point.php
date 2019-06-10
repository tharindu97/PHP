<!DOCTYPE html>
<html>
<head>
	<title>Float</title>
</head>
<body>
	<?php 
			$float = 6.28;
	 ?>
	 <?php echo $float; ?><br>
	 <?php $float +=5; echo $float; ?><br>
	 <?php echo 10/3; ?><br>
	 <?php echo 10/0; ?><br>


	 <h2>Functions</h2>

	 Round:<?php echo round($float,1); ?><br>
	 Round Up:<?php echo ceil($float); ?><br>
	 Round Down:<?php echo floor($float); ?>

	 <h2>How to check if a number is a Integer or a Float</h2>
	 <?php 
	 		$myfloat = 7.45;
	 		$myinteger =12;
	  ?>

	  <?php echo "is {$myfloat} an Integer?" . is_int($myfloat);?><br>
	  <?php echo "is {$myinteger} an Integer?" . is_int($myinteger);?><br>
	  <br>
	  <?php echo "is {$myfloat} an Float?" . is_float($myfloat);?><br>
	  <?php echo "is {$myinteger} an Float?" . is_float($myinteger);?><br>
	  <br>

	  <?php echo "is {$myfloat} an Number?" . is_numeric($myfloat);?><br>
	  <?php echo "is {$myinteger} an Number?" . is_numeric($myinteger);?><br>






</body>
</html>