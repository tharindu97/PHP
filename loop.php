<?php 

	for($i = 0; $i < 10; $i++){
		echo $i;
		echo "<br>";
	}
	echo "<br>";
	echo "<br>";

	$i = 0;
	while ($i < 10) {
		echo "NUmber: " . $i;
		echo "<br>";
		$i++;
	}
	echo "<br>";
	echo "<br>";

	$i = 0;
	do{
		echo $i;
		echo "<br>";
		$i++;
	}while($i < 10);
	echo "<br>";
	echo "<br>";

	$people = array("tharindu","vihanga","sajith");
	foreach($people as $person){
			echo $person;
			echo "<br>";
	}
	echo "<br>";
	echo "<br>";

	$people = array("tharindu" => "tharindu@gmail.com","vihanga" => "vihanga@gmail.com","sajith" => "sajith@gmail.com");
	foreach($people as $person){
			echo $person;
			echo "<br>";

 ?>