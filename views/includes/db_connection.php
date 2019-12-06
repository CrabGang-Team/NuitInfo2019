<?php
try {
	$db = new PDO("mysql:host=localhost;dbname=mrat;charset=UTF8", "root", "mysql");

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//$db = new mysqli("localhost", "root", "mysql", "mrat");
	
} catch (PDOException $e) {
	echo 'Échec lors de la connexion : ' . $e->getMessage();
}
?>
