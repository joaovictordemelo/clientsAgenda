<html>
	<head>
		<title> sch </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<!-- Bootstrap JS Requirements -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


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

	<body>
		<?php require_once 'process.php'; ?>


		<?php

		if(isset($_SESSION['message'])): ?>

		<div class="alert alert-<?=$_SESSION['msg_type']?>">

			<?php

				echo $_SESSION['message'];
				unset($_SESSION['message']);

			?>

		</div>
		<?php endif ?>

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
							<th >Name</th>
							<th>Email</th>

							
							<th>job</th>
							<th>market</th>
							<th>phone</th>
							<th>address</th>

							<th colspan="6">Buttons</th>


						</tr>

					</thread>

			<?php

				while($row = $result->fetch_assoc()):?>

					<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>

					<td><?php echo $row['job']; ?></td>
					<td><?php echo $row['market']; ?></td>
					<td><?php echo $row['phone']; ?></td>
					<td><?php echo $row['address']; ?></td>


					<td>
											
						<a href="edit.php?edit=<?php echo $row['id']; ?>"
							class="btn btn-primary">Edit</a>

						<a href="process.php?delete=<?php echo $row['id']; ?>"
							class="btn btn-secondary">Delete</a>

					</td>

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

			<input type="hidden" name="id" value="<?php echo $id; ?>">
			
			<div class="form-group">


			<label>Name</label>
			<input type="text" name="name" class= "form-control" value = "<?php echo $name; ?>" Placeholder="Enter name">
			</div>
			<div>
			<label>Email</label>
			<input type = "text" name = "email" class ="form-control " value = "<?php echo $email; ?>" Placeholder="Enter your email">
			</div>


			<div>
			<label>job</label>
			<input type = "text" name = "job" class ="form-control " value = "<?php echo $job; ?>" Placeholder="Enter your email">
			</div>

			<div>
			<label>market</label>
			<input type = "text" name = "market" class ="form-control " value = "<?php echo $market; ?>" Placeholder="Enter your email">
			</div>


			<div>
			<label>phone</label>
			<input type = "text" name = "phone" class ="form-control " value = "<?php echo $phone; ?>" Placeholder="Enter your email">
			</div>

			<div>
			<label>address</label>
			<input type = "text" name = "address" class ="form-control " value = "<?php echo $address; ?>" Placeholder="Enter your email">
			</div>



			<div class="form-group">

			<?php

			if($update == true):

			?>

			<button type="submit" class="btn-info" name="update"> Update </button>

			<?php else: ?>


			<button type="submit" class="btn-primary" name="save"> Save </button>

		<?php endif; ?>
			</div>
		</form>
		</div>
	</div>


	<form style="text-align: center; " action = "menu.php"> 
	<button type="submit" name = "submit">Go Back to Menu </button>
</form>


	</body>

	
