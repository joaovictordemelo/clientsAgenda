


<html>

	<head>
		
		<style>

			table {
  border-collapse: collapse;
  width: 100%;
  color:  #696969;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
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
tr:hover {background-color: skyblue;}


       </style>
	</head>


<style type="tex/css">
			table{

				border-collapse: collapse;
				width: 100%
				color: #34dfeb;
				font-family: monospace;
				fonte-size: 25px;
				text-align: left;
			}

			th{
				background-color: #34dfeb;
				color: white;
			}

			tr: nth-child(2) {background-color: #ededed} //verify this


</style>


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
			$conn = mysqli_connect("localhost", "root","", "clientsagenda");
			$sql = "SELECT * FROM clients";
			$result = $conn->query($sql);
			//$result = $conn->query($sql) or die($conn->error);


			if($result->num_rows> 0){
				while($row = $result -> fetch_assoc()){
					echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["job"]."</td><td>".$row["market"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td></tr>";
				}
			}else{

				echo "No results";
			}
			$conn->close();
		?>

	</table>
		<form action="menu.php">
			<button  type="submit" name = "submit"> Go back</button>
		</form>
   </body>
</html> 

    
