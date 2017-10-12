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
            <h1>Įrašo redagavimas</h1></div>
    </div>
    <div class="container">
       
       <?php
			
			$id = $_GET["id"]; // failas.php?id=reikšmė, gaunam id reikšmę
		
			$sql = "SELECT id, autorius, puslapiuSk, reitingas FROM filmai WHERE id=$id";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					?>
					
					<form action="redaguoti_action.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label class="control-label" for="col1">Autorius</label>
                <input class="form-control" type="text" name="autorius" value="<?php echo $row["autorius"]; ?>" id="col1">
            </div>
            <div class="form-group">
                <label class="control-label" for="col2">Puslapių skaičius</label>
                <input class="form-control" type="text" name="puslapiai" value="<?php echo $row["puslapiuSk"]; ?>" id="col2">
            </div>
            <div class="form-group">
                <label class="control-label" for="col3">Reitingas</label>
                <input class="form-control" type="text" name="reitingas" value="<?php echo $row["reitingas"]; ?>" id="col3">
            </div>
            <div class="form-group">
				<input type="submit" class="btn btn-primary" value="Gerai">
				<a class="btn btn-default" role="button" href="index.php">Atšaukti</a>
            </div>
        </form>
					
					<?php
				}
			} else {
				echo "Įrašas su tokiu id nerastas";
			}
		
		?>
       
        
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>