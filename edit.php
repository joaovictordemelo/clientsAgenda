<html>
	<head>
		<title> sch </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<!-- Bootstrap JS Requirements -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


	</head>

	<body>
		<?php require_once 'process.php'; ?>
		<div class="container">

		<?php 
			$mysqli = new mysqli('localhost', 'root', '', 'clientsagenda') or die(mysqli_error($mysqli));
			$result = $mysqli->query("SELECT * FROM clients") or die($mysqli->error);

			//pre_r($result);
			//pre_r($result->fetch_assoc());
			?>

			

			<div class="row justifify-content-center">
				<table class="table">

					<thread>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th colspan="2">Action</th>


						</tr>

					</thread>

			<?php

				while($row = $result->fetch_assoc()):?>

					<tr>
					<td><?php echo $row['name']; ?></td>
					<tr><?php echo $row['email']; ?></td>

					<td></td>

					</tr>

				<?php endwhile; ?>



				</table>


			</div>

			<?php


			function pre_r($array){

				echo '<pre>';
				print_r($array);
				echo '</pre>';
			}

		?>
		<div class = "row justify-content-center">
		<form action="process.php" method="POST">
			<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class= "form-control" value="Enter name">
			</div>
			<div>
			<label>Email</label>
			<input type = "text" name = "email" class ="form-control " value="Enter your email">
			</div>
			<div>
			<button type="submit" class="btn-primary" name="save"> Save </button>
			</div>
		</form>
		</div>
	   </div>

	</body>

	
//min 1839