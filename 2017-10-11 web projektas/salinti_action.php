<?php

require_once("duombaze.php");

$id = $_GET["id"];

$sql = "DELETE FROM filmai WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Klaida: " . $conn->error;
	echo "<a href='index.php'>Grįžti į pradžią</a>";
}
