<?php

require_once("duombaze.php");

$autorius = $_GET["autoriusInput"]; // input'o name atributo reikšmė
$puslapiai = $_GET["puslapiaiInput"];
$reitingas = $_GET["reitingasInput"];

$sql = "INSERT INTO filmai (autorius, puslapiuSk, reitingas)
VALUES ('$autorius', $puslapiai, $reitingas)";

// 'čia kur turit tekstą paliekat kabutes'
// jei tik skaičių įterpiat tuomet nereikia kintamojo dėti į ''

if ($conn->query($sql) === TRUE) {
    header('Location: index.php'); // jeigu įrašą pavyko įrašyti
	// tuomet nueinam į pagrindinį puslapį,
	// kur žmogus galės pasižiūrėti visus įrašus, ir galbūt savo naują įrašą
} else {
    echo "Klaida: " . $sql . "<br>" . $conn->error;
	echo "<a href='index.php'>Grįžti į pradžią</a>";
}