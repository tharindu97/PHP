<!DOCTYPE html>
<html>
<head>
	<title>Integers</title>
</head>
<body>
	<?php 
			$var1 = 30;
			$var2 = 40;
	 ?>
	 <h2>Some useful integers functions </h2>

	 Square Root:<?php echo sqrt(100); ?><br>
	 Exponential: <?php echo pow(2, 4); ?><br>
	 Absolute Value:<?php echo abs(10-15); ?><br>
	 Modulo:<?php echo fmod(10,3); ?><br>
	 Random Number:<?php echo rand(); ?><br>
	 Random Number:<?php echo rand(10,100); ?><br>

	 <h2>Increment / Decrement</h2>
	 Addition: <?php $var1 +=20; echo $var1; ?><br>
	 Substraction: <?php $var1 -= 40; echo $var1; ?><br>
	 Multiplication:<?php $var1 *=9; echo $var1; ?><br>
	 Division:<?php $var1/=9; echo $var1; ?><br>


</body>
</html>