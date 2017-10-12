<?php require_once("duombaze.php"); ?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>kcs web projektas</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
	</head>

	<body>
		<div class="jumbotron">
			<div class="container">
				<h1>Visi įrašai</h1>
			</div>
		</div>
		<div class="container">
			<a href="naujas.php" class="btn btn-success">Naujas įrašas</a><br><br>

			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Autorius</th>
							<th>Puslapiu skaicius</th>
							<th>Reitingas</th>
							<th>Veiksmai</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$sql = "SELECT id, autorius, puslapiuSk, reitingas FROM filmai";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								/*echo "id: " . $row["id"]. " - Name: " . $row["autorius"]. " " . $row["puslapiuSk"]. " " .$row["reitingas"] . "<br>";*/

								?>

<tr>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["autorius"]; ?></td>
	<td><?php echo $row["puslapiuSk"]; ?></td>
	<td><?php echo $row["reitingas"]; ?></td>
	<td>
		<a class="btn btn-primary" role="button"
			href="perziura.php?id=<?php echo $row["id"]; ?>">
			Peržiūrėti
		</a>
		<a class="btn btn-warning" role="button"
		href="redaguoti.php?id=<?php echo $row["id"]; ?>">
			Redaguoti
		</a>
		<a class="btn btn-danger" role="button"
		href="salinti.php?id=<?php echo $row["id"]; ?>">
			Šalinti
		</a>
	</td>
</tr>

								<?php
							}
						} else {
							echo "0 rezultatų";
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	</body>

</html>