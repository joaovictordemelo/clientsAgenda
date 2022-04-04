<?php

	include_once 'dbh.inc.php';


	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$job = $_POST['job'];
	$market = $_POST['market'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];


	$sql = "INSERT INTO clients (id, name, email,job, market, phone, address) VALUES ('$id', '$name', '$email', '$job', '$market', '$phone', '$address');";

	mysqli_query($conn, $sql);

?>
