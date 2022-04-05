
<html>
<body>

<h1>My Agenda</h1>

	<table>
		<tr>
			
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>job</th>
			<th>market</th>
			<th>phone</th>
			<th>address</th>
		</tr>

		<?php
			$conn = mysqli_connect("localhost", "root"," ", "clientsagenda");
			$sql = "SELECT * FROM clients";
			$result = $conn->query($sql);
			//$result = $conn->query($sql) or die($conn->error);


			if($result->num_rows> 0){
				while($row = $result -> fetch_assoc()){
					echo "<tr><td>".$row["id"]."<td></td>".$row["name"]."<td></td>".$row["email"]."<td></td>".$row["job"]."<td></td>".$row["market"]."<td></td>".$row["phone"]."<td></td>".$row["address"]."<td></tr>";
				}
			}else{

				echo "No results";
			}
			$conn->close();
		?>

	</table>


</body>
</html> 