<?php

	include_once 'dbh.inc.php'

?>

<!DOCTYPE html>

<html>
<head>
	<style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  color: white;
  text-align: center;
}




</style>

	<link rel= "stylesheet" type = "tex/css" href="formclient.css">
	<title>Welcome to Adamastor</title>
</head>
<body>

	<div>
		<h1 id = "title"> Agenda Adamastor, Hi friend </h1>
		<p > Diga mais sobre você! </p>

	</div>


<form   style="text-align: center; " action = "signup.inc.php" method = "POST">
	<input  type = "text" name = "id" placeholder="id" required>
	<br>
	<input type = "text" name = "name" placeholder="name" required>
	<br>
	<input type = "text" name = "email" placeholder="email" required>
	<br>
	<input type = "text" name = "job" placeholder="job">
	<br>
	<input type = "text" name = "market" placeholder="market">
	<br>
	<input type = "tel" name = "phone" placeholder="phone" required>
	<br>
	<input type = "text" name = "address" placeholder="address">
	<br>

	<button type="submit" name = "submit">Enter </button>

</form>

<?php
	$sql = "INSERT INTO clients (id, name, email,job, market, phone, address) VALUES ('1', 'joao', 'joaovictordemelo@ufmg.br', 'student', 'universidade', '96861197', 'avenida das palmeiras');";

	mysqli_query($conn, $sql);
	
?>

</body>
</html>
