<!DOCTYPE html>
<html>
<head>
	<title>Arry Function</title>
</head>
<body>

	<?php 
			$mynumber = array(10,5,78,1,0,45);
	 ?>

	 Maximum number:<?php echo max($mynumber); ?><br>
	 Minimum number:<?php echo min($mynumber); ?><br>
	 Count:<?php echo count($mynumber); ?><br>
	 Sort:
	 <pre>
	 	<?php echo sort($mynumber); print_r($mynumber); ?>
	 </pre>

	 Revers Sort:
	 <pre>
	 	<?php echo rsort($mynumber); print_r($mynumber); ?>
	 </pre>
	 <br>
	 Implode:
	 <?php 
	 	$string = implode(" | ",$mynumber);
	 	echo $string;
	  ?>
	  <pre>
	  Explode:
	 <?php 
	 	$newarry = explode(" | ",$string);
	 	print_r($newarry);
	  ?>
	  </pre>

	  Search:
	  <?php  echo in_array(5,$mynumber); ?>
</body>
</html>