<?php

include './database.php';

try {
	$conn = new PDO("mysql:host=$DB_DSN;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

$sql2 = "DROP TABLE IF EXISTS users;";

try {
	$conn->exec($sql2);
	echo "Users dropped successfully <br>";
} catch (PDOException $e) {
	echo "error: " . $sql2 . "<br>" . $e->getMessage();
}

$sql3 = "DROP TABLE IF EXISTS images;";

try {
	$conn->exec($sql3);
	echo "Images dropped successfully <br>";
} catch (PDOException $e) {
	echo "error: " . $sql3 . "<br>" . $e->getMessage();
}

$sql4 = "DROP TABLE IF EXISTS comments;";

try {
	$conn->exec($sql4);
	echo "Comments dropped successfully <br>";
} catch (PDOException $e) {
	echo "error: " . $sql4 . "<br>" . $e->getMessage();
}

$conn = null;

?>