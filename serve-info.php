<?php 
	
	//Create Server Array
	$server = [
		'Host Server Name' => $_SERVER['SERVER_NAME'],
		'Host Header' => $_SERVER['HTTP_HOST'],
		'Server Software' => $_SERVER['SERVER_SOFTWARE'],
		'Document Root' => $_SERVER['DOCUMENT_ROOT'],
		'Durrent Page' => $_SERVER['PHP_SELF'],
		'Script Name' => $_SERVER['SCRIPT_NAME'],
		'Abosolute Path' => $_SERVER['SCRIPT_FILENAME']
	];

	//echo $server['Abosolute Path'];

	//Create Client Array
	$client = [
		'Client System info' => $_SERVER['HTTP_USER_AGENT'],
		'Client Id' => $_SERVER['REMOTE_ADDR'],
		'Remort Port' => $_SERVER['REMOTE_PORT']
	];

 ?>