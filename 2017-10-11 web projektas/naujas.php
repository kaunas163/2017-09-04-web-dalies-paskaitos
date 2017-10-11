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
        <form>
            <div class="form-group">
                <label class="control-label" for="col1">Column 1</label>
                <input class="form-control" type="text" id="col1">
            </div>
            <div class="form-group">
                <label class="control-label" for="col2">Column 2</label>
                <input class="form-control" type="text" id="col2">
            </div>
            <div class="form-group">
                <label class="control-label" for="col3">Column 3</label>
                <input class="form-control" type="text" id="col3">
            </div>
            <div class="form-group"><a class="btn btn-primary" role="button" href="#">Gerai </a><a class="btn btn-default" role="button" href="index.html">Atšaukti </a></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>