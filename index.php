<?php

	include_once 'dbh.inc.php'

?>

<!DOCTYPE html>

<html>
<head>
	<title>Welcome to Adamastor</title>
</head>
<body>


<form action = "signup.inc.php" method = "POST">
	<input type = "text" name = "id" placeholder="id">
	<br>
	<input type = "text" name = "name" placeholder="name">
	<br>
	<input type = "text" name = "email" placeholder="email">
	<br>
	<button type="submit" name = "submit">Enter </button>

</form>

<?php
	$sql = "INSERT INTO clients (id, name, email) VALUES ('1', 'Melo', 'joaovictordemelo@ufmg.br' );";

	mysqli_query($conn, $sql);
	
?>

</body>
</html>