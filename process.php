<?php

$mysqli = new mysqli('localhost', 'root', " ", "clientsagenda") or die(mysql_error($mysqli));

if(isset($_POST['save'])){
	$name = $_POST['name'];
	//$email = $_POST['email'];

	$mysqli->query("INSERT INTO clients (name) VALUES ('$name')") or
		die($mysqli->error);

}