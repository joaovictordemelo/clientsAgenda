<?php

	include_once 'dbh.inc.php';


	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];


	$sql = "INSERT INTO clients (id, name, email) VALUES ('$id', '$name', '$email');";

	mysqli_query($conn, $sql);

?>