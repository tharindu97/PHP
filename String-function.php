<?php 
	$first = "the five boxing wizard ";
	$second = "jumps quickly.";

	$sentence = $first;
	$sentence .= $second;

	echo $sentence;
 ?>
 <br>
 All simple: <?php echo strtolower($sentence); ?> <br>
 All capital: <?php echo strtoupper($sentence); ?> <br>
 First letter Capital: <?php echo ucfirst($sentence); ?> <br>
 First letter Capital in all words: <?php echo ucwords($sentence); ?> <br>
 Number of Characters: <?php echo strlen($sentence); ?> <br>
 Search for a string or character: <?php echo strstr($sentence, "jumps"); ?> <br>
