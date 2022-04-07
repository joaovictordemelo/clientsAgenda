<?php

session_start();

$mysqli = new mysqli('localhost', 'root', "", "clientsagenda") or die(mysql_error($mysqli));

$id = 1;
$update=false;
$name = '';
$email = '';


if(isset($_POST['save'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	//add more columns here;


	$mysqli->query("INSERT INTO clients (name, email) VALUES ('$name', '$email')") or
		die($mysqli->error);

		//above add more columns

	$_SESSION['message'] = "New member saved!";
	$_SESSION['msg_type'] = "sucess";

	header("location:edit.php");

}


if(isset($_GET['delete'])){

	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM clients WHERE id = $id");


	$_SESSION['message'] = "Member went out!";
	$_SESSION['msg_type'] = "danger";

	header("location: edit.php");

}

if(isset($_GET['edit'])){

	$id = $_GET['edit'];
	$update=true;

	$result = $mysqli->query("SELECT * FROM clients WHERE id=$id") or die($mysqli->error());

	if(count(array($result))==1){

		$row = $result->fetch_array();
		$name = $row['name'];
		$email = $row['email'];
		//add more columns here


	}
}

if(isset($_POST['update'])){

	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	//add columns

	$mysqli->query("UPDATE clients SET name='$name', email = '$email' WHERE id=$id") or die($mysqli->error);

	$_SESSION['message'] = "Record updated Friend!";
	$_SESSION['msg_type'] = "Warning";

	header('location: edit.php');

}