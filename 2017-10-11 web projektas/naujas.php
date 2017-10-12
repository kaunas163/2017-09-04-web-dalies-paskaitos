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
            <h1>Naujas įrašas</h1></div>
    </div>
    <div class="container">
        <form action="naujas_action.php" method="get">
            <div class="form-group">
                <label class="control-label" for="col1">Autorius</label>
                <input class="form-control" type="text" name="autoriusInput" id="col1">
            </div>
            <div class="form-group">
                <label class="control-label" for="col2">Puslapių skaičius</label>
                <input class="form-control" type="number" name="puslapiaiInput" id="col2">
            </div>
            <div class="form-group">
                <label class="control-label" for="col3">Reitingas</label>
                <input class="form-control" type="number" name="reitingasInput" min="1" max="5" value="1" id="col3">
            </div>
            <div class="form-group">
            	<input type="submit" value="Gerai" class="btn btn-success">
            	<a class="btn btn-default" role="button" href="index.php">Atšaukti</a></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>