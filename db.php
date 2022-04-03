<?php

$dsn = "mysql:host = localhost; dbname = clientsagenda";
$username = "root";
$password = "yes";

try{
	$db = new PDO($dsn, $username, $password);
	echo "connected";

}catch(PDOException $e){

	$error_message = $e -> getMessage();
	echo $error_message;

	exit();

}

?>