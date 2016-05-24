<?php
	$dsn = 'mysql:host=localhost;dbname=notebook';
	$username = 'rmp';
	$password = 'piis3141';
	
	try {
		$db = new PDO($dsn,$username,$password);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		$include ('datbase_error.php');
		exit();
	}
?>