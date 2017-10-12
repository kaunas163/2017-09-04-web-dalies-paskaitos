<?php

require_once("duombaze.php");

$id = $_GET["id"];
$autorius = $_POST["autorius"]; // input'o name atributo reikšmė
$puslapiai = $_POST["puslapiai"];
$reitingas = $_POST["reitingas"];

$sql = "UPDATE filmai
SET autorius='$autorius',
puslapiuSk = $puslapiai,
reitingas = $reitingas
WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: perziura.php?id=$id");
} else {
    echo "Klaida: " . $conn->error;
	echo "<a href='index.php'>Grįžti į pradžią</a>";
}