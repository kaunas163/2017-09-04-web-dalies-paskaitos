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
            <h1>Šalinimas </h1></div>
    </div>
    <div class="container">
        <p>Ar tikrai norite šalinti šį įrašą?</p>
        <?php
			
			$id = $_GET["id"]; // failas.php?id=reikšmė, gaunam id reikšmę
		
			$sql = "SELECT id, autorius, puslapiuSk, reitingas FROM filmai WHERE id=$id";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					?>
					
					<p><strong>ID:</strong> <?php echo $row["id"]; ?></p>
					<p><strong>Autorius:</strong> <?php echo $row["autorius"]; ?></p>
					<p><strong>Puslapių skaičius:</strong> <?php echo $row["puslapiuSk"]; ?></p>
					<p><strong>Reitingas:</strong> <?php echo $row["reitingas"]; ?></p><a class="btn btn-default" role="button" href="index.php">Atgal </a></div>
					
					<?php
				}
			} else {
				echo "Įrašas su tokiu id nerastas";
			}
		
		?>
        <a class="btn btn-primary" role="button" href="#">Taip</a>
        <a class="btn btn-default" role="button" href="#">Ne</a>
        
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>